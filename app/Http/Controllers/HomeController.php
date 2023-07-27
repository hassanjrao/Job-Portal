<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $jobs=Job::all();

        return view("front.home",compact("jobs"));

    }
}
