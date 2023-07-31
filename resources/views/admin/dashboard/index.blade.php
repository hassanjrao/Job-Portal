@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row row-deck">

            <div class="col-sm-6 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">
                    <a href="{{ route('admin.jobs.index') }}">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">{{ $jobs }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Jobs</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="nav-main-link-icon fa fa-briefcase"></i>

                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="{{ route('admin.jobs.index') }}">
                                <span>View Jobs</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </a>
                </div>


            </div>


            <div class="col-sm-6 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">
                    <a href="{{ route('admin.locations.index') }}">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">{{ $locations }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Locations</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">

                                <i class="nav-main-link-icon fa fa-map-marker-alt"></i>

                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="{{ route('admin.locations.index') }}">
                                <span>View Locations</span>

                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </a>
                </div>


            </div>


            <div class="col-sm-6 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">
                    <a href="{{ route('admin.categories.index') }}">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">{{ $categories }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Categories</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">

                                <i class="nav-main-link-icon fa fa-list"></i>

                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="{{ route('admin.categories.index') }}">
                                <span>View Categories</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
