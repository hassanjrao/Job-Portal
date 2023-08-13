<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::latest()
        ->with(["category","location"])
        ->get();

        $jobs=$jobs->map(function($job){
            // stripe tags from description
            $description=strip_tags($job->description_en);
            // get first 100 characters
            $description=substr($description,0,100);
            // add ... to the end
            $description.="...";

            $job->description_en=$description;


              // stripe tags from description
              $description=strip_tags($job->description_ar);
              // get first 100 characters
              $description=substr($description,0,100);
              // add ... to the end
              $description.="...";

              $job->description_ar=$description;

            return $job;

        });


        return view("admin.jobs.index",compact("jobs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job=null;

        $categories=JobCategory::latest()->get();

        $locations=Location::latest()->get();

        return view("admin.jobs.add_edit",compact("job","categories","locations"));
    }

    public function slug($string, $separator = '-') {
        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title_en"=>"required",
            "title_ar"=>"required",
            "description_en"=>"required",
            "description_ar"=>"required",
            "category"=>"required|exists:job_categories,id",
            "location"=>"nullable|exists:locations,id",
            "image"=>"required|image"
        ]);

        $image=$request->file("image")->store("jobs");

        $slug_ar=$this->slug($request->title_ar,"-");
        $slug_en=Str::slug($request->title_en,"-");

        Job::create([
            "title_en"=>$request->title_en,
            "title_ar"=>$request->title_ar,
            "description_en"=>$request->description_en,
            "description_ar"=>$request->description_ar,
            "job_category_id"=>$request->category,
            "location_id"=>$request->location,
            "image"=>$image,
            "slug_en"=>$slug_en,
            "slug_ar"=>$slug_ar,
        ]);

        return redirect()->route("admin.jobs.index")->with("success","Job has been added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Job::findOrFail($id);

        $categories=JobCategory::latest()->get();

        $locations=Location::latest()->get();

        return view("admin.jobs.add_edit",compact("job","categories","locations"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job=Job::findOrFail($id);

        $request->validate([
            "title_en"=>"required",
            "title_ar"=>"required",
            "description_en"=>"required",
            "description_ar"=>"required",
            "category"=>"required|exists:job_categories,id",
            "location"=>"nullable|exists:locations,id",
            "image"=>"nullable|image"
        ]);

        $slug_ar=$this->slug($request->title_ar,"-");
        $slug_en=Str::slug($request->title_en,"-");

        $dataToUpdate=[
            "title_en"=>$request->title_en,
            "title_ar"=>$request->title_ar,
            "description_en"=>$request->description_en,
            "description_ar"=>$request->description_ar,
            "job_category_id"=>$request->category,
            "location_id"=>$request->location,
            "slug_en"=>$slug_en,
            "slug_ar"=>$slug_ar,
        ];

        if($request->hasFile("image")){
            $image=$request->file("image")->store("jobs");
            $dataToUpdate["image"]=$image;
        }

        $job->update($dataToUpdate);

        return redirect()->route("admin.jobs.index")->with("success","Job has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::findOrFail($id);

        $job->delete();

        return redirect()->route("admin.jobs.index")->with("success","Job has been deleted successfully");
    }
}
