@extends('layouts.master_withoutnav')


@section('content')

    <section class="ds s-overlay ds soon s-py-70 s-py-lg-100 s-py-xl-150 page_title">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <a href="./" class="logo">
                        <img src="assets1/images/logo.png" alt="img">
                    </a>
                </div>
            </div>
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-70"></div>
                <div class="fw-divider-space hidden-above-lg mt-30"></div>

                <div class="col-sm-12 text-center">
                    <h2 class="special-heading">
                        Coming Soon!
                    </h2>
                    <p>Stay Tuned!</p>

                    <div id="comingsoon-countdown" data-date="Aug 31, 2022 10:00:00"></div>
                    <!--
            use "data-date" attribute with your date value to set date that you need to count to
            <div id="comingsoon-countdown" data-date="March 29, 2018 10:00:00"></div>
        -->

                </div>
                <div class="fw-divider-space hidden-below-lg mt-55"></div>
                <div class="fw-divider-space hidden-above-lg mt-20"></div>

                <div class="fw-divider-space hidden-below-lg mt-100"></div>
                <div class="fw-divider-space hidden-above-lg mt-30"></div>
            </div>

        </div>
    </section>
@endsection
