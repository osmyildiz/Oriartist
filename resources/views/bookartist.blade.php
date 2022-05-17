@extends('layouts.master')


@section('content')


    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-160"></div>
                <div class="fw-divider-space hidden-above-lg mt-100"></div>

                <div class="col-md-12 text-center">
                    <h1>Book Artist</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Book Artist
                        </li>
                    </ol>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-160"></div>
                <div class="fw-divider-space hidden-above-lg mt-100"></div>

            </div>
        </div>
    </section>



    <section class="ds casting s-py-70 s-py-lg-100 s-py-xl-50">
        <div class="container">
            <div class="row mb-4">
                <div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
                    <article class="text-left vertical-item post type-post status-publish format-standard content-padding border-rad-5">


                            <div class="entry-content">
                                <h3 class="entry-title"><a href="blog-single-full.html" rel="bookmark">
                                        Header Title

                                </h3>
                                <p>Ridens nostrud delenit duo ea, sed mutat graecis cu, fuisset dolores intellegebat mei ei. Vitae alienum eu mea, lorem tollit et nam. Sea eu lorem integre, sea ei libris aliquid has signiferumque.</p>
                            </div><!-- .entry-content -->


                        <div class="fw-divider-space hidden-above-lg mt-100"></div>
                    </article><!-- #post-## -->

                </div>

            </div>
            <div class="row">

                <div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
                    <h3>Registration Form</h3>
                    <form class="pt-10">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="full name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="phone number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="event_date" placeholder="event date" class="form-control">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="email address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" placeholder="your city" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="eventtype" placeholder="event type" class="form-control">
                                </div>

                            </div>
                        </div>
                        <div class="fw-divider-space hidden-below-lg mt--10"></div>
                        <h4>Fields of Interest</h4>
                        <div class="row checkboxs">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="checkbox" id="singer" name="singer" value="singer"><label class="color-dark-font" for="singer">Singer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="dj" name="dj" value="dj"><label class="color-dark-font" for="dj">Dj</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="dragquins" name="dragquins" value="dragquins"><label class="color-dark-font" for="dragquins">Drag Quins</label>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="checkbox" id="dancer" name="dancer" value="dancer"><label class="color-dark-font" for="dancer">Dancer</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="specialacts" name="specialacts" value="specialacts"><label class="color-dark-font" for="specialacts">Special Acts</label>
                                </div>


                            </div>
                            <div class="col-12 mt-20">
                                <div class="form-group">
                                    <textarea name="about_user" id="about_user" cols="30" rows="10" placeholder="additional information" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="agreement" name="agreement" value="agreement"><label class="mt-40" for="agreement">I Agree to Oriartist Terms and Conditions</label>
                        <div class="form-group mt-30">
                            <button type="submit" class="btn-maincolor">submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="fw-divider-space hidden-below-lg mt-40"></div>
    </section>





@endsection



