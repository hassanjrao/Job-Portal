<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Location;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){

        $jobs=Job::count();
        $categories=JobCategory::count();
        $locations=Location::count();

        return view("admin.dashboard.index",compact("jobs","categories","locations"));
    }
}
