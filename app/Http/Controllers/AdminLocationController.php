<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class AdminLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::latest()->get();

        return view("admin.locations.index", compact("locations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = null;

        return view("admin.locations.add_edit", compact("location"));
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
            "name_en" => "required",
            "name_ar" => "required",
        ]);

        Location::create([
            "name_en" => $request->name_en,
            "name_ar" => $request->name_ar,
        ]);

        return redirect()->route("admin.locations.index")->withToastSuccess( "Location added successfully");
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
        $location=Location::findOrFail($id);

        return view("admin.locations.add_edit",compact("location"));
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
        $location=Location::findOrFail($id);

        $request->validate([
            "name_en"=>"required",
            "name_ar"=>"required",
        ]);

        $location->update([
            "name_en"=>$request->name_en,
            "name_ar"=>$request->name_ar,
        ]);

        return redirect()->route("admin.locations.index")->withToastSuccess("Location updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location=Location::findOrFail($id);

        $location->delete();

        return redirect()->route("admin.locations.index")->withToastSuccess("Location deleted successfully");
    }
}
