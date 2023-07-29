<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;

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

        $jobObj=new Job();

        $types=$jobObj->types();

        $jobTypes=[];

        foreach($types as $key=>$type){

            $jobTypes[]=$type;
        }

        // merge english and arabic types
        $jobTypes=array_merge($jobTypes[0],$jobTypes[1]);

        // dd($jobTypes);




        return view("admin.jobs.add_edit",compact("job","categories","locations","jobTypes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
