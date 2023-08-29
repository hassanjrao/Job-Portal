@extends('layouts.front')


@section('content')
    <div>
        <img src="{{ asset('logo/logo_svg.svg') }}" alt="Logo" class="img-fluid" style="width:100%">
    </div>
    <!-- Page Content -->
    <div class="content">

        <section>
            <div class="row mb-4 justify-content-center">

                <div class="col-lg-4  mt-2">
                    <select class="form-select" onchange="locationSelected(this)" id="location" name="location"
                        style="width: 100%;" placeholder="Location">
                        <option value="all" selected>{{ __('All') }}</option>
                        @foreach ($locations as $location)
                            <option {{ $location->id == $locationSelected ? 'selected' : '' }} value="{{ $location->id }}">
                                {{ $location->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


            </div>
        </section>

        <section>



            <div class="row">

                <div class="col-lg-12 text-center">


                    <ul class="nav nav-pills push">
                        <li class="nav-item me-1">
                            <a class="nav-link  {{ $categorySelected == 'all' ? 'active bg-custom-primary' : '' }}"
                                href="{{ route('home', ['category' => 'all']) }}">
                                {{ __('All') }}

                            </a>
                        </li>

                        @foreach ($jobCategories as $category)
                            <li class="nav-item me-1">
                                <a class="nav-link  {{ $categorySelected == $category->id ? 'active bg-custom-primary' : '' }}"
                                    href="{{ route('home', ['category' => $category->id]) }}">
                                    {{ $category->name }}

                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            {{-- <div class="row">

                <div class="col-lg-6">

                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9764394862584545"
                        crossorigin="anonymous"></script>
                    <!-- square ad -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9764394862584545"
                        data-ad-slot="4866663033" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </div>


                <div class="col-lg-6">

                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9764394862584545"
                        crossorigin="anonymous"></script>
                    <!-- square ad -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9764394862584545"
                        data-ad-slot="4866663033" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>



            </div> --}}

            <div class="row">


                @foreach ($jobs as $ind => $job)
                    @if ($ind != 0 && $ind % 5 == 0)
                        <div class="col-md-6 col-xl-12">

                            {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9764394862584545"
                        crossorigin="anonymous"></script>
                    <!-- square ad -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9764394862584545"
                        data-ad-slot="4866663033" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || [])
                        .push({});
                    </script> --}}


                            <script async type="text/javascript">
                                atOptions = {
                                    'key': '33b7c599e717c17bcd82712d10457100',
                                    'format': 'iframe',
                                    'height': 50,
                                    'width': 320,
                                    'params': {}
                                };
                                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') +
                                    '://www.profitablecreativeformat.com/33b7c599e717c17bcd82712d10457100/invoke.js"></scr' + 'ipt>');
                            </script>
                        </div>
                    @endif

                    <div class="col-md-6 col-xl-6">
                        <div class="block block-rounded">


                            <div
                                class=" d-flex justify-content-between align-items-center {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row-reverse' }}">

                                <div class=" flex-fill">
                                    <a class="h6 text-custom-primary p-2"
                                        href="{{ route('home.job', ['id' => $job->id]) }}">
                                        {{ $job->title }}
                                    </a>

                                    <div class="d-flex p-2 pt-4 justify-content-between">
                                        <div class="align-self-end">

                                            <i class="fa fa-fw fa-calendar-alt text-muted me-1"></i>
                                            {{ $job->created_at->format('Y-m-d') }}
                                        </div>

                                    </div>

                                </div>

                                <div class="border">
                                    <img class="job-card-image" src="{{ Storage::url($job->image) }}" alt="">
                                </div>

                            </div>



                        </div>
                    </div>
                @endforeach

                {{ $jobs->links() }}



            </div>
        </section>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
    <script>
        function locationSelected(e) {
            let value = e.value;

            if (value == 'all') {
                window.location.href = "{{ route('home') }}";
            } else {
                window.location.href = "{{ route('home') }}?location=" + value;
            }

        }
    </script>
@endsection
