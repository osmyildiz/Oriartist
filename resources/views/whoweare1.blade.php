@extends('layouts.master')


@section('content')


    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


                <div class="col-md-12 text-center">
                    <h1>Who We Are</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Who We are
                        </li>
                    </ol>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


            </div>
        </div>
    </section>

    <section class="ds single-model s-pt-70 s-pb-40 s-pb-sm-70 s-py-lg-100 s-py-xl-10 c-mb-30 c-gutter-50 ">
        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">

                    <h3>Our Services</h3>

                    <ul class="list1">
                        @foreach($services as $service)
                            @if($service->whom=='Artist')
                                <li>
                                    <a href="/what-we-offer-artist">{{$service->name}}</a>
                                </li>
                            @else
                                <li>
                                    <a href="/what-we-offer-client">{{$service->name}}</a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>


                <div class="col-lg-8 content-padding border-rad-5">
                    <div class="item-media">
                        <img src="{{$record->img}}" class="rounded-0" alt="img">
                    </div>

                    <div class="item-content ds">
                        <h3>Who we are</h3>

                        <p>
                            {{$record->first_paragraph}}
                        </p>
                        @if(!empty($record->second_paragraph))
                            <p>
                                {{$record->second_paragraph}}
                            </p>
                        @endif

                    </div>


                </div><!-- .col-* -->

            </div>
        </div>
    </section>



@endsection



