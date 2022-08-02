@extends('layouts.master')


@section('content')


    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


                <div class="col-md-12 text-center">
                    <h1>What We Offer</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            What We Offer
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
                            <li>
                                <p>{{$service->name}}</p>
                            </li>
                        @endforeach


                    </ul>
                </div>


                <div class="col-lg-8 content-padding border-rad-5">

                    <div class="item-content ds">
                        <h3>{{$content->title}}</h3>

                        <p>
                            {{$content->paragraph1}}
                        </p>
                        <p>
                            {{$content->paragraph2}}
                        </p>
                        <p>
                            {{$content->paragraph3}}
                        </p>



                        <div class="row">

                            <div class="col-md-12">
                                <h4>{{$content->title2}}</h4>
                                <ul class="list1">
                                    @for($i=1;$i<4;$i++)
                                        @php
                                        $item = 'item'.$i;
                                        @endphp

                                        @if($content->$item !="")
                                            <li>
                                                {{$content->$item}}
                                            </li>
                                        @endif
                                    @endfor

                                </ul>
                            </div>
                        </div> <!-- .row -->
                    </div>


                </div><!-- .col-* -->

            </div>
        </div>
    </section>

    <!--<section class="ds">
        <div class="container">

            <div class="row mt-5">


                <div class="col-xs-12 col-lg-4">

                    <div class="pricing-plan">
                        <div class="plan-name bg-maincolor">
                            <h3>
                                {{$packages[0]->name}}
                            </h3>
                        </div>
                        <div class="plan-description small-text color-darkgrey">
                            {{$packages[0]->top_text}}
                        </div>

                        <div class="plan-features">
                            <ul class="list-bordered">
                                @foreach($item1 as $it)
                                    @if(!empty($it->name))
                                        <li>{{$it->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-description-bottom color-darkgrey">
                            {{$packages[0]->bottom_text}}
                        </div>
                        <div class="plan-button">
                            <a href="/contact" class="btn btn-maincolor">order now</a>
                        </div>
                    </div>

                </div>


                <div class="col-xs-12 col-lg-4">

                    <div class="pricing-plan plan-featured">
                        <div class="plan-name bg-maincolor">
                            <h3>
                                {{$packages[1]->name}}
                            </h3>
                        </div>

                        <div class="plan-description small-text color-darkgrey">
                            {{$packages[1]->top_text}}
                        </div>
                        <div class="plan-features">
                            <ul class="list-bordered">
                                @foreach($item2 as $it)
                                    @if(!empty($it->name))
                                        <li>{{$it->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-description-bottom color-darkgrey">
                            {{$packages[1]->bottom_text}}
                        </div>
                        <div class="plan-button">
                            <a href="/contact" class="btn btn-maincolor">order now</a>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-lg-4 mx-sm-auto">

                    <div class="pricing-plan">
                        <div class="plan-name bg-maincolor">
                            <h3>
                                {{$packages[2]->name}}
                            </h3>
                        </div>
                        <div class="plan-description small-text color-darkgrey">
                            {{$packages[2]->top_text}}
                        </div>
                        <div class="plan-features">
                            <ul class="list-bordered">
                                @foreach($item3 as $it)
                                    @if(!empty($it->name))
                                    <li>{{$it->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-description-bottom color-darkgrey">
                            {{$packages[2]->bottom_text}}
                        </div>
                        <div class="plan-button">
                            <a href="/contact" class="btn btn-maincolor">order now</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="fw-divider-space hidden-below-lg mt-70"></div>
        <div class="fw-divider-space hidden-xs hidden-above-lg mt-40"></div>
    </section>-->

    <section class="page_title">
        <div class="row justify-content-center mt-5">
            <div class="col-xs-12 col-lg-8 text-center">
                <h4 class="title">{{$content->quote}}</h4>


            </div>
        </div>

        <div class="fw-divider-space hidden-below-lg mt-70"></div>
        <div class="fw-divider-space hidden-xs hidden-above-lg mt-40"></div>
    </section>


@endsection



