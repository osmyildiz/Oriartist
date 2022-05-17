@extends('layouts.master')


@section('content')


    <section class="page_title s-parallax s-overlay ds title-overlay s-py-md-25">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-160"></div>
                <div class="fw-divider-space hidden-above-lg mt-100"></div>

                <div class="col-md-12 text-center">
                    <h1>Contact Us</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Contact
                        </li>
                    </ol>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-160"></div>
                <div class="fw-divider-space hidden-above-lg mt-100"></div>

            </div>
        </div>
    </section>



    <section class="ds background-contact overflow-visible s-py-70 s-py-lg-100 s-py-xl-50">
        <div class="container">
            <div class="row c-mb-20">
                <div class="col-sm-4 animate" data-animation="pullDown">
                    <div class="media media-top">
                        <div class="icon-styled text-center bg-maincolor rounded">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p>
                            <strong>Phone:</strong> +12 345 678 9123<br>
                            <strong>Fax:</strong> +12 345 678 9123
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-animation="pullDown">
                    <div class="media media-top">
                        <div class="icon-styled text-center bg-maincolor rounded">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <p>
                            PO Box 54378<br>
                            4321 Your Address,<br>
                            Your City, Your Country
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-animation="pullDown">
                    <div class="media media-top">
                        <div class="icon-styled text-center bg-maincolor rounded">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="fw-divider-space hidden-below-lg mt-40"></div>
            <div class="fw-divider-space hidden-above-lg mt-20"></div>
            <div class="row">
                <div class="col-12 animate" data-animation="scaleAppear">
                    <form class="contact-form c-mb-20 c-gutter-20" method="post" action="/">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="full name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="phone number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="your city">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="6" cols="45" name="message" class="form-control" placeholder="your message"></textarea>
                                    <button type="submit" class="btn-submit"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <!--.col-* -->

            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
            <div class="fw-divider-space hidden-xs hidden-above-lg mt-20"></div>
        </div>
    </section>

    <section class="ds">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <iframe class="mapx" style="filter: invert(90%)" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.081453611822!2d-0.12032988481386286!3d51.51172161820914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ca3a62f9dd%3A0xebe931baa1181a63!2sStrand%2C%20London%20WC2R%201LA%2C%20Birle%C5%9Fik%20Krall%C4%B1k!5e0!3m2!1str!2str!4v1652445277013!5m2!1str!2str" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>




@endsection



