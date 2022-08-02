@extends('layouts.master')


@section('content')


    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


                <div class="col-md-12 text-center">
                    <h1><span class="color-main">BECOME</span> AN ORI ARTIST</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            BECOME AN ORI ARTIST
                        </li>
                    </ol>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


            </div>
        </div>
    </section>



    <section class="ds casting s-py-70 s-py-lg-100 s-py-xl-50">
        <div class="container">
            <div class="row mb-4">
                <div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
                    <article class="text-left vertical-item post type-post status-publish format-standard content-padding border-rad-5">


                            <div class="entry-content">
                                <h3 class="entry-title">
                                    {{$content->title}}

                                </h3>
                                <p>
                                    {!!$content->first_paragraph!!}
                                </p>
                                @if(!empty($content->second_paragraph))
                                    <p>
                                        {{$content->second_paragraph}}
                                    </p>
                                @endif
                            </div><!-- .entry-content -->


                        <div class="fw-divider-space hidden-above-lg mt-100"></div>
                    </article><!-- #post-## -->

                </div>

            </div>
            <!--<div class="row" id="submitmessage">

                <div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
                    <h3>Registration Form</h3>
                    <div class="row" >
                        <div class="col-sm-12">

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

                        <form class="pt-10 c-mb-20 c-gutter-20" id="joinusform" method="post" action="{{url('/joinus-form')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="row ">
                            <div class="col-lg-6">
                                <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('name', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                                <div class="form-group">
                                    <input type="text" name="name" @if(old('name'))
                                    value="{{ old('name') }}" @else placeholder="full name" @endif  class="form-control">
                                </div>
                                <span class="alert-danger" role="alert">
                                    <strong> {!! $errors->first('phone', '<h6 class="color-main">:message</h6>') !!}</strong>
                                </span>
                                <div class="form-group">
                                    <input type="tel" name="phone" @if(old('phone'))
                                    value="{{ old('phone') }}" @else placeholder="phone number" @endif  class="form-control" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="website" @if(old('website'))
                                    value="{{ old('website') }}" @else placeholder="website" @endif  class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="facebook" @if(old('facebook'))
                                    value="{{ old('facebook') }}" @else placeholder="facebook" @endif  class="form-control">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('email', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                                <div class="form-group">
                                    <input type="email" name="email" @if(old('email'))
                                    value="{{ old('email') }}" @else placeholder="email" @endif  class="form-control" address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" @if(old('city'))
                                    value="{{ old('city') }}" @else placeholder="your city" @endif  class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="youtube" @if(old('youtube'))
                                    value="{{ old('youtube') }}" @else placeholder="youtube" @endif  class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="instagram" @if(old('instagram'))
                                    value="{{ old('instagram') }}" @else placeholder="instagram" @endif  class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class="fw-divider-space hidden-below-lg mt--10"></div>
                        <h4>Fields of Interest</h4>
                        <div class="row checkboxs">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="checkbox" id="singer" name="singer" value="singer" @if(old('singer')) checked @endif><label class="color-dark-font" for="singer">Singer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="dj" name="dj" value="dj" @if(old('dj')) checked @endif><label class="color-dark-font" for="dj">Dj</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="dq" name="dq" value="Drag Queens" @if(old('dq')) checked @endif><label class="color-dark-font" for="dq">Drag Queens</label>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="checkbox" id="dancer" name="dancer" value="dancer" @if(old('dancer')) checked @endif><label class="color-dark-font" for="dancer">Dancer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="specialacts" name="specialacts" value="specialacts" @if(old('specialacts')) checked @endif><label class="color-dark-font" for="specialacts">Specialist Acts</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="musicians" name="musicians" value="musicians" @if(old('musicians')) checked @endif><label class="color-dark-font" for="musicians">Musicians</label>
                                </div>


                            </div>
                            <div class="col-12 mt-20">
                                 <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('message', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="10" @if(!old('message')) placeholder="about me" @endif class="form-control">{{old('message')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="agreement" name="agreement" value="agreement" @if(old('agreement')) checked @endif><label class="mt-40" for="agreement">I Agree to Oriartist Terms and Conditions</label>
                            <span class="alert-danger" role="alert">
                                <strong> {!! $errors->first('agreement', '<h6 class="color-main">:message</h6>') !!}</strong>
                            </span>
                        <div class="form-group mt-30">
                            <button type="submit" class="btn-maincolor">submit</button>
                        </div>
                    </form>
                </div>
            </div>-->

        </div>
        <div class="fw-divider-space hidden-below-lg mt-40"></div>
    </section>





@endsection



