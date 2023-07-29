@extends('layouts.backend')

@php
    $addEdit = isset($job) ? 'Edit' : 'Add';
    $addUpdate = isset($job) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Job')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Job</h3>


                <a href="{{ route('admin.jobs.index') }}" class="btn btn-primary">All Jobs</a>


            </div>
            <div class="block-content">

                @if ($job)
                    <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('category', $job ? $job->category_id : null);

                                ?>
                                <label class="form-label" for="label">Category <span class="text-danger">*</span></label>

                                <select class="js-select2 form-select" id="location" name="location" style="width: 100%;"
                                    data-placeholder="Location">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($category->id == $value) selected @endif>
                                            {{ $category->name_en_ar }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('category')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('location', $job ? $job->location_id : null);

                                ?>
                                <label class="form-label" for="label">Location <span class="text-danger">*</span></label>

                                <select class="js-select2 form-select" id="location" name="location" style="width: 100%;"
                                    data-placeholder="Location">

                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}" @if ($location->id == $value) selected @endif>
                                            {{ $location->name_en_ar }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('location')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            {{-- <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('type', $job ? $job->job_type : null);

                                ?>
                                <label class="form-label" for="label">Type <span class="text-danger">*</span></label>

                                <select class="js-select2 form-select" id="type" name="type" style="width: 100%;"
                                    data-placeholder="type">

                                    @foreach ($jobTypes as $type)
                                        <option value="{{ $type->id }}" @if ($type->id == $value) selected @endif>
                                            {{ $type->name_en_ar }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('type')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <?php
                                $value = old('name_en', $job ? $job->name_en : null);

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
