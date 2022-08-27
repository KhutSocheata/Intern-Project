@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper" style="height: 1005px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="pd-wrap">
            <div class="container">
                <div class="heading-section">
                    <h2>Product Details</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                                <img
                                    src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                        </div>
                        <div id="thumb" class="owl-carousel product-thumb">
                            <div class="item">
                                <img
                                    src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-dtl">
                            <div class="product-info">
                                <div class="product-name">Variable Product</div>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        Address
                                    </div>
                                </div>
                                <div class="product-price-discount"><span>$39.00</span><span
                                        class="line-through">$29.00</span></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                                
                            <div class="row mb-4">
                                <div class="col-md-12 mb-3">
                                    <strong for="size">PROPERTY</strong>
                                </div>
                                <div class="col-md-4">
                                    <span for="size">Bedroom</span>
                                    <div class="reviews-counter">
                                        <strong class="rate">3</strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span for="color">Bathroom</span>
                                    <div class="reviews-counter">
                                        <strong class="rate">2</strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span for="color">Size</span>
                                    <div class="reviews-counter">
                                        <strong class="rate">200 Square</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12 mb-3">
                                    <strong for="size">AMENITY</strong>
                                </div>
                                <div class="col-md-4">
                                    <span for="size">Pool</span>
                                    <div class="reviews-counter">
                                        <strong class="rate">Yes</strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span for="color">Parking</span>
                                    <div class="reviews-counter">
                                        <strong class="rate">Yes</strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span for="color">Internet</span>
                                    <div class="reviews-counter">
                                        <strong class="rate">Yes</strong>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="product-count">
                                <label for="size">Quantity</label>
                                <form action="#" class="display-flex">
                                    <div class="qtyminus">-</div>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <div class="qtyplus">+</div>
                                </form>
                                <a href="#" class="round-black-btn">Add to Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="product-info-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
