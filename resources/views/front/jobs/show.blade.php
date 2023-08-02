@extends('layouts.front')

@section('title', $job->title)

@section("meta_title",config("app.name")." - ".$job->title)
@section("meta_description",config("app.name")." - ".$job->title)
<style>
    #bgi {
        background-image: url('{{ asset("logo/onyl_arr.svg") }}') ;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 500px;
        width: 100%;
    }

    /* add media queries for bgi */

    @media (max-width: 768px) {
        #bgi {
            background-image: url('{{ asset("logo/onyl_arr.svg") }}') ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 300px;
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        #bgi {
            background-image: url('{{ asset("logo/onyl_arr.svg") }}') ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 290;
            width: 100%;
        }
    }

    @media (max-width: 400px) {
        #bgi {
            background-image: url('{{ asset("logo/onyl_arr.svg") }}') ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 283px;
            width: 100%;
        }
    }

    @media (max-width: 300px) {
        #bgi {
            background-image: url('{{ asset("logo/onyl_arr.svg") }}') ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100px;
            width: 100%;
        }
    }


</style>

@section('content')



    <div id="bgi" class="text-center" style="border:1px solid red;">
        <img src="{{ asset(Storage::url($job->image)) }}" alt="Logo" style="height: 100px; margin-top: 40px">
    </div>

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        {{ $job->title }}
                    </h1>

                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            {{ __('Job') }}
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

                        <div class="block-header block-header-default d-flex justify-content-between">




                            <a target="__blank"
                                href="https://wa.me/?text={{ route('home.job', ['id' => $job->id, 'slug' => $job->slug]) }}">
                                <i class="fab fa-whatsapp fa-2x"></i>
                            </a>
                            <a target="__blank"
                                href="https://www.facebook.com/sharer/sharer.php?u={{ route('home.job', ['id' => $job->id, 'slug' => $job->slug]) }}">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a target="__blank"
                                href="https://twitter.com/intent/tweet?text={{ route('home.job', ['id' => $job->id, 'slug' => $job->slug]) }}">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a target="__blank"
                                href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('home.job', ['id' => $job->id, 'slug' => $job->slug]) }}">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>


                        </div>



                        <div class="block-content block-content-full">
                            {!! $job->description !!}
                        </div>

                    </div>
                </div>



        </section>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
