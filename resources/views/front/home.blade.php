@extends('layouts.front')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="py-1 text-center">
                <h1 class="h3 fw-bold mb-1">
                    {{ __('Latest Jobs') }}
                </h1>

            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content">

        <section>
            <div class="row mb-4 justify-content-center">

                <div class="col-lg-4">
                    <select class="js-select2 form-select" id="location" name="location" style="width: 100%;" data-placeholder="Location" multiple>
                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                        <option value="1" selected>HTML</option>
                        <option value="2" selected>CSS</option>
                        <option value="3">JavaScript</option>
                        <option value="4">PHP</option>
                        <option value="5">MySQL</option>
                        <option value="6">Ruby</option>
                        <option value="7">Angular</option>
                        <option value="8">React</option>
                        <option value="9">Vue.js</option>
                      </select>
                </div>

                <div class="col-lg-4 text-center">
                    <select class="js-select2 form-select" id="Categories" name="Categories" style="width: 100%;" data-placeholder="Categories" multiple>
                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                        <option value="1" selected>HTML</option>
                        <option value="2" selected>CSS</option>
                        <option value="3">JavaScript</option>
                        <option value="4">PHP</option>
                        <option value="5">MySQL</option>
                        <option value="6">Ruby</option>
                        <option value="7">Angular</option>
                        <option value="8">React</option>
                        <option value="9">Vue.js</option>
                      </select>
                </div>

                <div class="col-lg-2">

                    <button type="button" class="btn btn-secondary me-1 mb-3">
                        <i class="fa fa-fw fa-upload me-1"></i> Upload
                      </button>
                </div>

            </div>
        </section>

        <section>
            <div class="row items-push">

                @foreach ($jobs as $job)
                    <div class="col-md-6 col-xl-6">
                        <div class="block block-rounded h-100 mb-0">

                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">

                                    <div class="">
                                        <a class="h6" href="be_pages_ecom_store_product.html">Cooperative training
                                            in the Board of Grievances courts - all cities Cooperative training
                                            in the Board of Grievances courts - all cities</a>

                                    </div>
                                    <img class="img-fluid options-item" width="100px"
                                        src="{{ asset('media/various/ecom_product6.png') }}" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </section>
    </div>
    <!-- END Page Content -->
@endsection
