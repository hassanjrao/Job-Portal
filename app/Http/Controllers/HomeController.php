<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;

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

        ->paginate(15);



        $locations=Location::latest()->get();

        $jobCategories=JobCategory::latest()->get();

        return view("front.home",compact("jobs","categorySelected","locations","jobCategories","locationSelected"));

    }
}
