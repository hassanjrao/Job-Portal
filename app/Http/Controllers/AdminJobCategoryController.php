<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class AdminJobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = JobCategory::latest()->get();

        return view("admin.job-categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = null;

        return view("admin.job-categories.add_edit", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            "name_en" => "required",
            "name_ar" => "required",
        ]);

        JobCategory::create($requestData);

        return redirect()->route("admin.categories.index")->withToastSuccess("Category added successfully");
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
        $category = JobCategory::findOrFail($id);

        return view("admin.job-categories.add_edit", compact("category"));
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
        $category=JobCategory::findOrFail($id);

        $request->validate([
            "name_en" => "required",
            "name_ar" => "required",
        ]);

        $category->update([
            "name_en" => $request->name_en,
            "name_ar" => $request->name_ar,
        ]);

        return redirect()->route("admin.categories.index")->withToastSuccess("Category updated successfully");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobCategory::findOrFail($id)->delete();

        return redirect()->route("admin.categories.index")->withToastSuccess("Category deleted successfully");
    }
}
