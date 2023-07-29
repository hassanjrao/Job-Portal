@extends('layouts.backend')

@php
    $addEdit = isset($category) ? 'Edit' : 'Add';
    $addUpdate = isset($category) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Category')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Category</h3>


                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">All categories</a>


            </div>
            <div class="block-content">

                @if ($category)
                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('name_en', $category ? $category->name_en : null);

                                ?>
                                <label class="form-label" for="label">Name En <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="name_en" name="name_en" placeholder="Enter Name English">
                                @error('name_en')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('name_ar', $category ? $category->name_ar : null);

                                ?>
                                <label class="form-label" for="label">Name Ar <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $value }}" class="form-control"
                                    id="name_ar" name="name_ar" placeholder="Enter Name Arabic">
                                @error('name_ar')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>


                    </div>


                </div>

                <div class="d-flex justify-content-end mb-4">

                    <button type="submit" id="submitBtn" class="btn btn-primary  border">{{ $addUpdate }}</button>

                </div>


                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')






@endsection
