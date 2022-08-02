@extends('layouts.master1')


@section('content')



    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


                <div class="col-md-12 text-center">
                    <h1>personal page</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{$artist->name.' '.$artist->surname}}
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
                <div class="col-xs-12 col-lg-6">

                    <div class="vertical-item content-padding item-gallery">
                        <div class="model border-rad-5">
                            <div class="model-images">
                                <div class="model-figure">
                                    <div data-thumb="{{$artist->cover_img}}">

                                        <img src="{{$artist->cover_img}}" alt="img" data-caption="" data-large_image_width="555" data-large_image_height="555">

                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-lg-6">
                    <h2 class="entry-title">{{$artist->name.' '.$artist->surname}}</h2>
                    <div class="fw-divider-space hidden-below-lg mt--10"></div>
                    <p>
                        {{$artist->paragraph1}}
                    </p>
                    <p>
                        {{$artist->paragraph2}}
                    </p>
                    <p>
                        {{$artist->paragraph3}}
                    </p>
                    <p>
                        {{$artist->paragraph4}}
                    </p>


                </div>
            </div>

        </div>
        <div class="fw-divider-space hidden-below-lg mt-25"></div>
        <div class="fw-divider-space hidden-xs hidden-above-lg mt-30"></div>
    </section>

    <section class="ds gallery-single s-py-70 s-py-lg-100 s-py-xl-10">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 offset-lg-1">

                    <div class="vertical-item text-left content-padding border-rad-5">
                        <div class="item-media">
                            <div class="owl-carousel buttons-type"  data-loop="true" data-margin="0" data-nav="true" data-dots="false" data-themeclass="entry-thumbnail-carousel" data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
                                @foreach($photos as $photo)

                                        <img src="{{$photo->img}}" alt="img">

                                @endforeach
                                <!--
                                <a href="assets1/images/artists/lowri1.jpg" class="photoswipe-link" >
                                    <img src="assets1/images/artists/lowri1.jpg" alt="img">
                                </a>
                                <a href="assets1/images/artists/lowri2.jpg" class="photoswipe-link">
                                    <img src="assets1/images/artists/lowri2.jpg" alt="img">4e
                                </a>
                                <a href="assets1/images/artists/lowri3.jpg" class="photoswipe-link">
                                    <img src="assets1/images/artists/lowri3.jpg" alt="img">
                                </a>
                                <a href="assets1/images/artists/lowri4.jpg" class="photoswipe-link">
                                    <img src="assets1/images/artists/lowri4.jpg" alt="img">
                                </a>
                                <a href="assets1/images/artists/lowri5.jpg" class="photoswipe-link">
                                    <img src="assets1/images/artists/lowri5.jpg" alt="img">
                                </a>
                                -->
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="ds s-pt-70 s-pb-50 s-pb-sm-70 s-py-lg-10 s-py-xl-20 c-gutter-60">
        <div class="container">
            <div class="row">
                @if($artist->video_url!='')
                    <div class="offset-lg-1 col-lg-10">
                        <div class="item-media post-thumbnail pb-40">
                            <div class="embed-responsive embed-responsive-3by2">
                                <a href="{{$artist->video_url}}" class="embed-placeholder">
                                    <img src="{{$photos[0]->img}}" alt="img">
                                </a>
                            </div>
                        </div><!-- .post-thumbnail -->

                    </div>
                @endif



            </div>
            <div class="row">

                <div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
                    <h3>Book Artist</h3>
                    <form class="pt-10 c-mb-20 c-gutter-20" id="bookartistform" method="post" action="{{route('bookartistform1',$artist->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row" id="submitmessage">
                            <div class="col-lg-12">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has($msg))
                                        <div class="alert alert-{{ $msg }} alert-dismissible color-main" role="alert">
                                            <i class="mdi mdi-check-all me-2"></i>
                                            {{ Session::get($msg) }}
                                        </div>

                                    @endif
                                @endforeach
                                </div>

                        </div>
                        <div class="row " >

                            <div class="col-lg-6">
                                 <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('name', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                                <div class="form-group">
                                    <input type="text" name="name" @if(old('name'))
                                    value="{{ old('name') }}" @else placeholder="full name" @endif class="form-control">
                                </div>
                                <span class="alert-danger" role="alert">
                                    <strong> {!! $errors->first('phone', '<h6 class="color-main">:message</h6>') !!}</strong>
                                </span>

                                <div class="form-group mt-10">
                                    <input type="tel" name="phone" @if(old('phone'))
                                    value="{{ old('phone') }}" @else placeholder="phone number" @endif class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="event_date" placeholder="event date" class="form-control">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                 <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('email', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                                <div class="form-group">
                                    <input type="text" name="email" @if(old('email'))
                                    value="{{ old('email') }}" @else placeholder="email" @endif class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" @if(old('city')) value="{{ old('city') }}" @else placeholder="your city" @endif class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="event_type" name="event_type" @if(old('event_type'))
                                    value="{{ old('event_type') }}" @else placeholder="event type" @endif class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class="fw-divider-space hidden-below-lg mt--10"></div>
                        <div class="row checkboxs">

                            <div class="col-12 mt-20">
                                <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('message', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="10" @if(!old('message')) placeholder="message" @endif class="form-control">{{old('message')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="agreement" name="agreement" value="agreement"><label class="mt-40" for="agreement">I Agree to Oriartist Terms and Conditions</label>
                        <span class="alert-danger" role="alert">
                                <strong> {!! $errors->first('agreement', '<h6 class="color-main">:message</h6>') !!}</strong>
                            </span>
                        <div class="form-group mt-30">
                            <button type="submit" class="btn-maincolor">submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="fw-divider-space hidden-below-lg mt-50"></div>
    </section>





@endsection



