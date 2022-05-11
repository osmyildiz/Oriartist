@php

    //use App\Models\Contact;
    //$contact=Contact::find(1);

@endphp
<footer  id="contacts" class="contacts-section  ds overflow-visible background-contact s-pt-70 s-pb-60 s-pt-md-95 s-pb-md-80 s-pt-xl-170 s-pb-xl-140 c-gutter-30">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 animate" data-animation="scaleAppear">
                <span class="color-main fs-24 font-main text-uppercase">modelia</span>
                <h2 class="mt-0 mb-40 contact-title text-uppercase">Contact us</h2>
                <div class="media mb-20">
                    <h5 class="fs-20 mb-0 min-w-100">Phone:</h5>
                    <div class="media-body ml-0 d-flex flex-column">
                        <span>+44 7234 234 567</span>
                    </div>
                </div>
                <div class="media mb-20">
                    <h5 class="fs-20 mb-0 min-w-100">Email:</h5>
                    <div class="media-body ml-0 d-flex flex-column">
                        <span>info@oriartists.com</span>
                    </div>
                </div>
                <div class="media mb-20">
                    <h5 class="fs-20 mb-0 min-w-100">Address:</h5>
                    <div class="media-body pr-lg-4 ml-0 d-flex flex-column">
                        <span>London, England</span>
                    </div>
                </div>
            </div>
            <!--.col-* -->
            <div class="fw-divider-space hidden-above-lg mt-20"></div>
            <div class="col-lg-7 col-xl-8 animate" data-animation="scaleAppear">
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
    </div>

</footer>
