@extends('layouts.front')

@section('title', 'Contact Us')

@section('content')


    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        {{ __('Contact Us') }}
                    </h1>

                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            {{ __('Contact Us') }}
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


                        <div class="block-content block-content-full ">

                            <div class="row">

                                <div class="col-lg-6">
                                    <h4>{{ __("Email") }}: </h4>
                                    <p>{{ 'contact@m.com' }}</p>

                                    <h4>{{ __("Whatsapp") }}: </h4>
                                    <p>{{ '932423432432' }}</p>

                                    <h4>{{ __("Instagram") }}</h4>
                                    <p>{{ 'https://www.instagram.com/' }}</p>
                                </div>

                                <div class="col-lg-6 d-flex flex-column justify-content-center ">

                                    {{-- apple store and playstore icons --}}

                                    <a href="" class="mb-3" >
                                        <img src="{{ asset('media/apple-store.png') }}" alt="" class="img-fluid"
                                            width="200px" height="200px">
                                    </a>

                                    <a href="">
                                        <img src="{{ asset('media/google-store.png') }}" alt="" class="img-fluid"
                                            width="200px" height="200px">
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>



        </section>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
