@extends('layouts.master')


@section('content')


    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


                <div class="col-md-12 text-center">
                    <h1>Our Artists</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Our Artist
                        </li>
                    </ol>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-50"></div>


            </div>
        </div>
    </section>

    <section class="ds casting s-py-lg-our s-py-xl-50">
        <div class="container">
            <div class="row mb-4">
                <div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
                    <article class="text-left vertical-item post type-post status-publish format-standard content-padding border-rad-5">


                        <div class="entry-content">
                            <h3 class="entry-title">
                                {{$record->title}}

                            </h3>
                            <p>
                                {!!$record->first_paragraph!!}
                            </p>
                            @if(!empty($record->second_paragraph))
                                <p>
                                    {{$record->second_paragraph}}
                                </p>
                            @endif
                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                </div>

            </div>

        </div>

    </section>


    <section class="ds single-model s-pb-40 s-pb-sm-70 s-py-xl-10 c-mb-30 c-gutter-50 ">
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


                </div>
            </div>
        </div>
    </section>





@endsection



