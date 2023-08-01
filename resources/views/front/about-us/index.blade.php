@extends('layouts.front')

@section('title', 'About Us')

@section('content')


<div >
    <img src="{{ asset('logo/logo_svg.svg') }}" alt="Logo" class="img-fluid" style="width:100%">
</div>

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        {{ __('About Us') }}
                    </h1>

                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            {{ __('About Us') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Page Content -->
    <div class="content">


        <section>

            <div class="row">

                <div class="col-lg-12">

                    <div class="block block-rounded">


                        <div class="block-content block-content-full text-center">
                            <img src="{{ Storage::url($aboutUs->image) }}" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>



        </section>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
