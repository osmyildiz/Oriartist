@extends('layouts.master')


@section('content')


    <section class="page_slider " style="height: 400px">
        <div class="flexslider nav-true" style="height: 400px" >
            <ul class="slides">
                @if(count($sliders)>0)
                    @foreach($sliders as $key=>$slider)
                        @if($slider->is_video==0)
                            <li class="cover-image ds s-overlay text-center" style="height: 400px" >
                                <img src="assets1/images/manset.jpg" class="" alt="img">
                                <div class="soc-buttons">
                                    <span>follow:</span>
                                    <span><a href="{{$contact->facebook}}" target="_blank"  class="fa fa-facebook"></a></span>
                                    <span><a href="{{$contact->twitter}}" target="_blank"  class="fa fa-twitter"></a></span>
                                    <span><a href="{{$contact->youtube}}" target="_blank"  class="fa fa-youtube-play"></a></span>
                                    <span><a href="{{$contact->instagram}}" target="_blank"  class="fa fa-instagram"></a></span>

                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="intro_layers_wrapper">
                                                <div class="intro_layers">

                                                    <div class="intro_layer" data-animation="fadeInRight">
                                                        <div class="d-inline-block">
                                                            <h2 class="text-uppercase intro_featured_word"> {{$slider->uptitle}}</h2>
                                                        </div>
                                                    </div>
                                                    <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                        <div class="intro_after_featured_word">
                                                            <a href="">{{$slider->downtitle}}</a>
                                                        </div>
                                                    </div>


                                                </div> <!-- eof .intro_layers -->
                                            </div> <!-- eof .intro_layers_wrapper -->
                                        </div> <!-- eof .col-* -->
                                    </div><!-- eof .row -->
                                </div><!-- eof .container-fluid -->
                            </li>
                        @else
                            <li class="ds cover-image video-bg text-center" style="height: 400px" >
                                <img src="{{$sliders[1]->url}}" class="" alt="img">
                                <div class="flex-bg ds s-overlay">
                                    <video muted loop id="myVideo">
                                        <source  data-src="{{$slider->url}}" data-time="30" type="video/mp4">
                                    </video>
                                </div>
                                <div class="soc-buttons">
                                    <span>follow:</span>
                                    <span><a href="{{$contact->facebook}}" target="_blank" class="fa fa-facebook"></a></span>
                                    <span><a href="{{$contact->twitter}}" target="_blank" class="fa fa-twitter"></a></span>
                                    <span><a href="{{$contact->youtube}}" target="_blank" class="fa fa-youtube-play"></a></span>
                                    <span><a href="{{$contact->instagram}}" target="_blank" class="fa fa-instagram"></a></span>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="intro_layers_wrapper">
                                                <div class="intro_layers">
                                                    <div class="intro_layer" data-animation="fadeInRight">
                                                        <div class="d-inline-block">
                                                            <h2 class="text-uppercase intro_featured_word">{{$slider->uptitle}}</h2>
                                                        </div>
                                                    </div>
                                                    <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                        <div class="intro_after_featured_word">
                                                            <a href="">{{$slider->downtitle}}</a>

                                                        </div>
                                                    </div>
                                                </div> <!-- eof .intro_layers -->
                                            </div> <!-- eof .intro_layers_wrapper -->
                                        </div> <!-- eof .col-* -->
                                    </div><!-- eof .row -->
                                </div><!-- eof .container-fluid -->
                            </li>
                        @endif

                    @endforeach
                @else
                    <li class="ds cover-image video-bg text-center">
                        <img src="assets1/images/manset.jpg" class="" alt="img">
                        <div class="flex-bg ds z-6 s-overlay">
                            <video muted loop id="myVideo">
                                <source src="#" data-src="assets1/images/video/video1.mp4" data-time="26" type="video/mp4">
                            </video>
                        </div>
                        <div class="soc-buttons">
                            <span>follow:</span>
                            <span><a href="#" class="fa fa-facebook"></a></span>
                            <span><a href="#" class="fa fa-twitter"></a></span>
                            <span><a href="#" class="fa fa-google-plus"></a></span>
                            <span><a href="#" class="fa fa-youtube-play"></a></span>
                            <span><a href="#" class="fa fa-instagram"></a></span>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="intro_layers">
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <div class="d-inline-block">
                                                    <h2 class="text-uppercase intro_featured_word">
                                                        World class events aligned                                                 </h2>
                                                </div>
                                            </div>
                                            <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                <div class="intro_after_featured_word">
                                                    <a href="#">with world class talent </a>
                                                </div>
                                            </div>
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>

                    <li class="cover-image ds s-overlay text-center">
                        <img src="assets1/images/manset.jpg" class="" alt="img">
                        <div class="soc-buttons">
                            <span>follow:</span>
                            <span><a href="#" class="fa fa-facebook"></a></span>
                            <span><a href="#" class="fa fa-twitter"></a></span>
                            <span><a href="#" class="fa fa-google-plus"></a></span>
                            <span><a href="#" class="fa fa-youtube-play"></a></span>
                            <span><a href="#" class="fa fa-instagram"></a></span>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="intro_layers">
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <div class="d-inline-block">
                                                    <h2 class="text-uppercase intro_featured_word">
                                                        True artistry                                               </h2>
                                                </div>
                                            </div>
                                            <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                <div class="intro_after_featured_word">
                                                    <a href="#">and unique entertainment</a>
                                                </div>
                                            </div>
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>
                    <li class="cover-image ds s-overlay text-center">
                        <img src="assets1/images/manset.jpg" class="" alt="img">
                        <div class="soc-buttons">
                            <span>follow:</span>
                            <span><a href="#" class="fa fa-facebook"></a></span>
                            <span><a href="#" class="fa fa-twitter"></a></span>
                            <span><a href="#" class="fa fa-google-plus"></a></span>
                            <span><a href="#" class="fa fa-youtube-play"></a></span>
                            <span><a href="#" class="fa fa-instagram"></a></span>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="intro_layers">
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <div class="d-inline-block">
                                                    <h2 class="text-uppercase intro_featured_word">
                                                        Expert advice and knowledge                                                  </h2>
                                                </div>
                                            </div>
                                            <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                <div class="intro_after_featured_word">
                                                    <a href="#">from key industry professionals</a>
                                                </div>
                                            </div>
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>
                    <li class="cover-image ds s-overlay text-center">
                        <img src="assets1/images/manset.jpg" class="" alt="img">
                        <div class="soc-buttons">
                            <span>follow:</span>
                            <span><a href="#" class="fa fa-facebook"></a></span>
                            <span><a href="#" class="fa fa-twitter"></a></span>
                            <span><a href="#" class="fa fa-google-plus"></a></span>
                            <span><a href="#" class="fa fa-youtube-play"></a></span>
                            <span><a href="#" class="fa fa-instagram"></a></span>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="intro_layers">
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <div class="d-inline-block">
                                                    <h2 class="text-uppercase intro_featured_word">
                                                        hentic and original talent                                                  </h2>
                                                </div>
                                            </div>
                                            <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                <div class="intro_after_featured_word">
                                                    <a href="#">from around the world </a>
                                                </div>
                                            </div>
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>
                    <li class="cover-image ds s-overlay text-center">
                        <img src="assets1/images/manset.jpg" class="" alt="img">
                        <div class="soc-buttons">
                            <span>follow:</span>
                            <span><a href="#" class="fa fa-facebook"></a></span>
                            <span><a href="#" class="fa fa-twitter"></a></span>
                            <span><a href="#" class="fa fa-google-plus"></a></span>
                            <span><a href="#" class="fa fa-youtube-play"></a></span>
                            <span><a href="#" class="fa fa-instagram"></a></span>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="intro_layers_wrapper">
                                        <div class="intro_layers">
                                            <div class="intro_layer" data-animation="fadeInRight">
                                                <div class="d-inline-block">
                                                    <h2 class="text-uppercase intro_featured_word">
                                                        Bespoke
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="intro_layer mt-30" data-animation="fadeInUp">
                                                <div class="intro_after_featured_word">
                                                    <a href="#">and impressive talent</a>
                                                </div>
                                            </div>
                                        </div> <!-- eof .intro_layers -->
                                    </div> <!-- eof .intro_layers_wrapper -->
                                </div> <!-- eof .col-* -->
                            </div><!-- eof .row -->
                        </div><!-- eof .container-fluid -->
                    </li>
                @endif





            </ul>
        </div> <!-- eof flexslider -->
    </section>


    <section id="about" class="ds hello-section s-pt-70 s-pb-115  s-pb-md-130 s-pb-lg-100 s-pt-lg-10 s-pb-xl-35 overflow-visible s-overlay s-mobile-overlay">
        <div class="container">
            <div class="fw-divider-space hidden-below-xxl pt-20"></div>

            <div class="row justify-content-end">
                <div class="col-xs-12 col-lg-6">
                    <h4 class="big-title">
                        {{$hello->title}}!
                    </h4>
                    <div class="fw-divider-space hidden-below-lg mt-45"></div>
                    <p class="color-white font-main">
                    {{$hello->first_paragraph}}
                    <p>
                        {{$hello->second_paragraph}}
                    </p>
                    <img src="{{$hello->sign_url}}" alt="signature">
                    <div class="fw-divider-space hidden-below-lg mt-65"></div>
                    <div class="entry-content">
                        <p class="quote">
                            {{$hello->quote}}
                        </p>
                    </div>
                    <div class="fw-divider-space hidden-below-lg mt-65"></div>
                    <div class="fw-divider-space hidden-above-lg mt-30"></div>
                    <a href="/join-us" class="btn btn-outline-maincolor">JOIN US</a>
                </div>
            </div>
            <div class="fw-divider-space hidden-below-lg mt-30"></div>
        </div>
    </section>

    <section id="become-model" class="become-model s-py-115 s-pt-md-80 s-pb-md-90 s-pt-xl-155 s-pb-xl-145">
        <div class="fw-divider-space hidden-below-md mt-65"></div>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-lg-8 text-center">
                    <h4 class="title">Ori Artists Community</h4>

                    <p>
                        You can book a special event from our wide artist community
                    </p>
                    <a href="/book-ori-artists" class="btn btn-outline-maincolor">BOOK ARTIST</a>
                </div>
            </div>
        </div>
        <div class="fw-divider-space hidden-below-md pt-50"></div>
    </section>

    <section id="gallery" class="gallery-section gallery-6  overflow-visible ds s-pt-115 s-pb-70 s-pb-md-80 s-pt-md-135 s-pb-xl-155 s-pt-xl-120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-5">
                <div class="row justify-content-center"><h3 class="textorange">OUR ARTISTS</h3></div>
                </div>

                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-12">
                            <div class="filters gallery-filters text-lg-right">
                                <a href="#" data-filter="*" class="active selected ">All</a>
                                @foreach($categories as $category)
                                <a href="#" data-filter="{{$category->alias}}">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="fw-divider-space hidden-below-lg pt-10"></div>

                    <div class="row isotope-wrapper masonry-layout c-gutter-30 c-mb-30 animate" data-animation="fadeInDown" data-filters=".gallery-filters">

                        @foreach($artists as $artist)
                            <div class="col-sm-6 col-lg-4 col-lgx-3 col-xl-2
                            @foreach($fields as $field)
                            @if($field->artist_id == $artist->id)
                            {{substr($field->alias, 1, strlen($field->alias)).' '}}
                            @endif
                            @endforeach
                                ">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <a href="/personal/{{$artist->id}}/{{$artist->slug}}" class="item-media h-100 w-100 d-block">
                                        <img src="{{$artist->cover_img}}" alt="img">
                                        <div class="media-links"></div>
                                    </a>
                                    <div class="item-content">
                                        <div class="item-title">
                                            <div class="title">{{$artist->name}}</div>
                                            <div class="subtitle">{{$artist->surname}}</div>
                                        </div>
                                        <p class="model-summary">
                                            {{$artist->brief}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
<!--
                        <div class="col-sm-6 col-lg-4 col-lgx-3 col-xl-2 singer">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <a href="personal-modal-page.html" class="item-media h-100 w-100 d-block">
                                    <img src="assets1/images/artists/lowri.jpg" alt="img">
                                    <div class="media-links"></div>
                                </a>
                                <div class="item-content">
                                    <div class="item-title">
                                        <div class="title">lowri</div>
                                        <div class="subtitle"></div>
                                    </div>
                                    <p class="model-summary">
                                        Lowri Evans is a British EU official and has been Director-General of the European Union's Directorate-General for Internal Market, Industry, Entrepreneurship and SMEs (DG GROW) since 2015. She previously served as Director General of the Directorate-General for Maritime Affairs and Fisheries since 2010 .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-lgx-3 col-xl-2 singer">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <a href="personal-modal-page.html" class="item-media h-100 w-100 d-block">
                                    <img src="assets1/images/artists/benji_purlsow.jpg" alt="img">
                                    <div class="media-links"></div>
                                </a>
                                <div class="item-content">
                                    <div class="item-title">
                                        <div class="title">benji</div>
                                        <div class="subtitle">purslow</div>
                                    </div>
                                    <p class="model-summary">

                                    Lowri Evans is a British EU official and has been Director-General of the European Union's Directorate-General for Internal Market, Industry, Entrepreneurship and SMEs (DG GROW) since 2015. She previously served as Director General of the Directorate-General for Maritime Affairs and Fisheries since 2010 .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-lgx-3 col-xl-2 singer">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <a href="personal-modal-page.html" class="item-media h-100 w-100 d-block">
                                    <img src="assets1/images/artists/cloe_barry.jpg" alt="img">
                                    <div class="media-links"></div>
                                </a>
                                <div class="item-content">
                                    <div class="item-title">
                                        <div class="title">cloe</div>
                                        <div class="subtitle">barry</div>
                                    </div>
                                    <p class="model-summary">

                                    Lowri Evans is a British EU official and has been Director-General of the European Union's Directorate-General for Internal Market, Industry, Entrepreneurship and SMEs (DG GROW) since 2015. She previously served as Director General of the Directorate-General for Maritime Affairs and Fisheries since 2010 .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-lgx-3 col-xl-2 dragqueen">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <a href="personal-modal-page.html" class="item-media h-100 w-100 d-block">
                                    <img src="assets1/images/artists/joel_burman.jpg" alt="img">
                                    <div class="media-links"></div>
                                </a>
                                <div class="item-content">
                                    <div class="item-title">
                                        <div class="title">joel</div>
                                        <div class="subtitle">burman</div>
                                    </div>
                                    <p class="model-summary">

                                    Lowri Evans is a British EU official and has been Director-General of the European Union's Directorate-General for Internal Market, Industry, Entrepreneurship and SMEs (DG GROW) since 2015. She previously served as Director General of the Directorate-General for Maritime Affairs and Fisheries since 2010 .
                                    </p>
                                </div>
                            </div>
                        </div>-->

                    </div>

                    <div class="row">
                        <div class="fw-divider-space pt-20 hidden-above-lg"></div>
                        <div class="col-12 text-center">
                            <a href="/book-ori-artists"><div class="btn btn-maincolor">ALL ARTISTS</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quote" class="blockquote-section s-parallax s-overlay ds s-pt-85 s-pb-140 s-pb-md-170 s-pb-lg-80 s-pt-md-70 s-pt-xl-200 s-pb-xl-190">
        <div class="container animate" data-animation="fadeIn">
            <div class="row">
                <div class="col-xs-12 col-lg-10 offset-lg-1">
                    <div class="owl-carousel buttons-type home" data-loop="true" data-margin="0" data-nav="true" data-dots="false" data-themeclass="entry-thumbnail-carousel" data-center="false" data-items="1" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
                        @foreach($testimonials as $test)
                            <div class="item text-center">
                                <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="{{$test->img}}" alt="img">
												<span class="title">{{$test->name}}</span>
												<a class="url fn n" href="">{{$test->title}}</a>
											</span>
										</span>
                                </div>
                                <div class="entry-content">
                                    <p class="quote">
                                        {{$test->comment}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_1.jpg" alt="img">
												<span class="title">Harriette Mullen</span>
												<a class="url fn n" href="">Singer</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    Since our professional working relationship began, I have experienced nothing but complete and utter support and encouragement from Portia. Portia is incredibly nurturing as a mentor and very generous with her time, advice - and also contacts too! Since working with Ori Artists I have worked on some of the most exciting and momentous gigs of my career so far – I’ve performed at venues that I never would have imagined performing at! I myself am in awe of Portia and I admire her work ethic and incredible talent and so it’s a dream position for me to be working with her on my own career.
                                </p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_2.jpg" alt="img">
												<span class="title">Sian Parry Jones</span>
												<a class="url fn n" href="">Archer Street</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    I have worked with Portia over the last 10 years in Archer Street Cocktail Bar where I am one of the owners. She was instrumental in helping us build the Archer Street team of performers and was immensely popular with our clientele. I and other colleagues have booked her at independent events around the UK and internationally varying from birthdays, weddings and charity functions, she has always been very professional, helpful and has been the key to the most successful parties.
                                </p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_3.jpg" alt="img">
												<span class="title">Tracy Dennis</span>
												<a class="url fn n" href="">Creative Director of The IT Girls</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    I’m bursting at the seams when it comes to praising this talented, professional young lady. She is an absolute pleasure to work with. Not only a super talented vocalist & host but I love how Portia listens and understands a brief and also contributes to make that brief better. She then brings my ideas of a show to life with her superb vocals and hosting skills. I can guarantee my client will be 100% happy when Portia is working at their event.
                                </p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_3.jpg" alt="img">
												<span class="title">Roderick - Williams Young</span>
												<a class="url fn n" href="">Producer</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    I’ve known Portia for well over 10 years now and have been fortunate to work with her on a number of occasions over those years. Portia is one of those few people whose undoubted talent as an artist is combined with such professionalism and a respect for those she works with. She brings both creativity and a real passion to all projects and that is a powerful combination. I also truly believe these qualities are increasingly rare which is why I look forward to the opportunity of working with her again.                                 </p>
                            </div>

                        </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_3.jpg" alt="img">
												<span class="title">Zoe Tyler</span>
												<a class="url fn n" href="">Entertainment Manager</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    Portia was one of the first singers I booked 10 years ago. I was a huge fan of her vocal talents, and was super excited that I could show the world of entertainment what a stunning solo artist she was. 10  years later and I still class Portia as one of the best. Her persona is one of class and poise and a lovely person to know and class as a friend. So proud to be associated with this wonderful woman
                                </p>
                            </div>

                        </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_3.jpg" alt="img">
												<span class="title">Roderick - Williams Young</span>
												<a class="url fn n" href="">Producer</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    I’ve known Portia for well over 10 years now and have been fortunate to work with her on a number of occasions over those years. Portia is one of those few people whose undoubted talent as an artist is combined with such professionalism and a respect for those she works with. She brings both creativity and a real passion to all projects and that is a powerful combination. I also truly believe these qualities are increasingly rare which is why I look forward to the opportunity of working with her again.
                                </p>
                            </div>

                </div>
                        <div class="item text-center">
                            <div class="entry-meta mt-0">
										<span class="byline">
											<span class="author d-flex flex-column align-items-center vcard">
												<img class="avatar mb-2 rounded-circle" src="assets1/images/comment_3.jpg" alt="img">
												<span class="title">Zoe Tyler</span>
												<a class="url fn n" href="">Entertainment Manager</a>
											</span>
										</span>
                            </div>
                            <div class="entry-content">
                                <p class="quote">
                                    Portia was one of the first singers I booked 10 years ago. I was a huge fan of her vocal talents, and was super excited that I could show the world of entertainment what a stunning solo artist she was. 10  years later and I still class Portia as one of the best. Her persona is one of class and poise and a lovely person to know and class as a friend. So proud to be associated with this wonderful woman
                                </p>
                            </div>

                        </div>
            </div>
        </div>
        <div class="fw-divider-space hidden-below-lg pt-90"></div>
    </section>




@endsection



