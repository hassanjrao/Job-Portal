<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(Request $request){



        $categorySelected=$request->category ?? "all";

        $locationSelected=$request->location ?? "all";


        $jobs=Job::when($categorySelected!=="all",function($query) use($categorySelected){
            return $query->where("job_category_id",$categorySelected);
        })
        ->when($locationSelected!=="all",function($query) use($locationSelected){
            return $query->where("location_id",$locationSelected);
        })
        ->latest()
        ->paginate(15);



        $locations=Location::latest()->get();

        $jobCategories=JobCategory::latest()->get();

        return view("front.home",compact("jobs","categorySelected","locations","jobCategories","locationSelected"));

    }


    public function job($id){

        $job=Job::findOrFail($id);

        $job->increment("total_views");




        return view("front.jobs.show",compact("job"));
    }

    public function aboutUs(){
        $aboutUs=AboutUs::first();
        return view("front.about-us.index",compact("aboutUs"));
    }

    public function contactUs(){
        return view("front.contact-us.index");
    }
}
