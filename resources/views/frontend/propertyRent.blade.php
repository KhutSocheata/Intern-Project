@extends('layouts.layout')
@section('content')

    <body class="inner-pages homepage-4 agents hp-6 full hd-white">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
            ================================================== -->
            <div class="clearfix"></div>
            <!-- Header Container / End -->
            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                        <h1>Contact Us</h1>
                        <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION PROPERTIES LISTING -->
            <section class="properties-list featured portfolio blog">
                <div class="container">
                    <section class="headings-2 pt-0 pb-0">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                    </div>
                                    <h3>Grid View</h3>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <p class="font-weight-bold mb-0 mt-3">9 Search results</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                                <div class="input-group border rounded input-group-lg w-auto mr-4">
                                    <label
                                        class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                        for="inputGroupSelect01"><i
                                            class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                    <select
                                        class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                        data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                        id="inputGroupSelect01" name="sortby">
                                        <option selected>Top Selling</option>
                                        <option value="1">Most Viewed</option>
                                        <option value="2">Price(low to high)</option>
                                        <option value="3">Price(high to low)</option>
                                    </select>
                                </div>
                                <div class="sorting-options">
                                    <a href="/forrent/detail" class="change-view-btn lde"><i
                                            class="fa fa-th-list"></i></a>
                                    <a href="#" class="change-view-btn active-view-btn"><i
                                            class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa
                                            Jhonson
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-2.jpg" alt="" class="mr-2"> Karl
                                            Smith
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-3.jpg" alt="" class="mr-2"> katy
                                            Teddy
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-10.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-4.jpg" alt="" class="mr-2"> Jhon
                                            Malon
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people sale">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/feature-properties/fp-11.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-5.jpg" alt="" class="mr-2"> Susan
                                            Delman
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-12.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-6.jpg" alt="" class="mr-2"> Chan
                                            Lee
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-1.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Chan
                                            Lee
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-2.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-2.jpg" alt="" class="mr-2"> Chan
                                            Lee
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                            <div class="project-single no-mb" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-3.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="images/testimonials/ts-3.jpg" alt="" class="mr-2"> Chan
                                            Lee
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="..." class="pt-3">
                        <ul class="pagination mt-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
            <!-- END SECTION PROPERTIES LISTING -->
            <!--register form -->
            <div class="login-and-register-form modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>Login</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                                Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>Or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password * </label>
                                            <input name="password" type="password" onClick="this.select()"
                                                value="">
                                            <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-contents">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form"
                                                id="main-register-form2">
                                                <label>First Name * </label>
                                                <input name="name" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Second Name *</label>
                                                <input name="name2" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Password *</label>
                                                <input name="password" type="password" onClick="this.select()"
                                                    value="">
                                                <button type="submit"
                                                    class="log-submit-btn"><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->

            <!-- ARCHIVES JS -->
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/rangeSlider.js"></script>
            <script src="js/tether.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/mmenu.min.js"></script>
            <script src="js/mmenu.js"></script>
            <script src="js/aos.js"></script>
            <script src="js/aos2.js"></script>
            <script src="js/smooth-scroll.min.js"></script>
            <script src="js/lightcase.js"></script>
            <script src="js/search.js"></script>
            <script src="js/light.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/popup.js"></script>
            <script src="js/searched.js"></script>
            <script src="js/ajaxchimp.min.js"></script>
            <script src="js/newsletter.js"></script>
            <script src="js/inner.js"></script>
            <script src="js/color-switcher.js"></script>

            <script>
                $(".dropdown-filter").on('click', function() {

                    $(".explore__form-checkbox-list").toggleClass("filter-block");

                });
            </script>

        </div>
        <!-- Wrapper / End -->
    </body>


    <!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:54:58 GMT -->

    </html>
@endsection
