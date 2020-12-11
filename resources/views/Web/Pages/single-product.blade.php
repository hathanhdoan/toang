@extends('Web.Layout.app')
@section('content')
    <div id="detail-page">
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Li's Breadcrumb Area End Here -->
        <!-- content-wraper start -->
        <div class="content-wraper my-card">
            <div class="container">
                <div class="row single-product-area">
                    <div class="col-lg-5 col-md-6">
                        <div class="lg-image">
                            <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg"
                               data-gall="myGallery">
                                <img id="detail-product-img" src="images/slider/foody-slider1.jpg" alt="product image">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="product-details-view-content pt-20">
                            <div class="product-info">
                                <span class="product-details-ref">Nhà hàng</span>
                                <h2 class="pl-15" style="font-size: 25px !important; margin: 7px 0px 0px -17px;">Ahihi -
                                    Fruit & Yogurt - Shop Online</h2>
                                <div class="price-box pt-20">
                                    <div class="row">
                                        <div class="col-sm-1 haha-custom">
                                            <span class="rating-point-main">5</span>
                                        </div>
                                        <div class="col-sm-11 form-inline">
                                            <div class="mr-20">
                                                <p class="point-rating-header">8.6</p>
                                                <p style="margin-top: -14px; color: #898989">Chất lượng</p>
                                            </div>
                                            <div class="mr-20" style="width: 58px">
                                                <p class="point-rating-header">8.6</p>
                                                <p style="margin-top: -14px; color: #898989">Dịch vụ</p>
                                            </div>
                                            <div class="mr-20" style="width: 58px">
                                                <p class="point-rating-header">8.6</p>
                                                <p style="margin-top: -14px; color: #898989">Giá cả</p>
                                            </div>
                                            <div class="mr-20" style="width: 58px">
                                                <p class="point-rating-header">8.6</p>
                                                <p style="margin-top: -14px; color: #898989">Vị trí</p>
                                            </div>
                                            <div class="mr-20" style="width: 72px">
                                                <p class="point-rating-header">8.6</p>
                                                <p style="margin-top: -14px; color: #898989">Không gian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                   <div class="mb-5">
                                       <i class="mr-10 fas fa-location-arrow"></i>55 Đặng Thùy Trầm, P.13, Q.Bình Thạnh
                                   </div>
                                   <div class="mb-5">
                                       <i class="mr-10 fas fa-clock"></i>7:00 - 20:00
                                   </div>
                                    <div class="mb-5">
                                        <i class=" mr-10 fas fa-tags"></i>20.000 - 100.000
                                    </div>
                                </div>
                                <div class="product-additional-info mb-20">
                                    <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to
                                        wishlist</a>
                                    <div class="product-social-sharing pt-15">
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google
                                                    +</a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wraper end -->
        <!-- Begin Product Area -->
        <div class="product-area pt-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="li-product-tab">
                            <ul class="nav li-product-menu">
                                <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                </li>
                                <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                                <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                            </ul>
                        </div>
                        <!-- Begin Li's Tab Menu Content Area -->
                    </div>
                </div>
                <div class="tab-content row">
                    <div class="col-lg-9">
                        <div id="description" class="tab-pane" role="tabpanel">
                            <div class="product-description">
                                <span>The best is yet to come! Give your walls a voice with a framed poster. This aesthethic, optimistic poster will look great in your desk or in an open-space office. Painted wooden frame with passe-partout for more depth.</span>
                            </div>
                        </div>
                        <div id="product-details" class="tab-pane" role="tabpanel">
                            <div class="product-details-manufacturer">
                                <a href="#">
                                    <img src="images/product-details/1.jpg" alt="Product Manufacturer Image">
                                </a>
                                <p><span>Reference</span> demo_7</p>
                                <p><span>Reference</span> demo_7</p>
                            </div>
                        </div>
                        <div id="reviews" class="tab-pane active show" role="tabpanel">
                            <div class="product-reviews">
                                <div class="my-card comment-panel">
                                    <div class="comment-header">
                                        <div class="row">
                                            <div class="mt-10 mb-10 ml-20 mr-10">
                                                <img class="avatar" src="images/Screenshot_50.png">
                                            </div>
                                            <div class="mt-10">
                                                <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh
                                                    Đoàn</p>
                                                <p class="comment-time">12/01/2021 10:20:21</p>
                                            </div>
                                            <p class="rating-point">5</p>
                                        </div>
                                    </div>
                                    <div class="my-comment-body">
                                        <div class="comment-content">
                                            <p style="color: black; margin-bottom: 0px !important;">sjflksd lkdsjfkl
                                                jflksdkf jfklsdjf lsfjkdjl sjdflk
                                                sjflksd lkdsjfkl jflksdkf jfklsdjf lsfjkdjl sjdflk
                                            </p>
                                            <a href="#">See more</a>
                                        </div>
                                        <div class="comment-picture">
                                            <div class="row" style="padding: 20px">
                                                <div class="col-sm-4" style="text-align: center; padding: 2px !important; ">
                                                    <img class="comment-image" style="text-align: center"
                                                         src="images/slider/foody-slider1.jpg">
                                                </div>
                                                <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                                    <img class="comment-image" src="images/slider/foody-slider1.jpg">
                                                </div>
                                                <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                                    <img class="comment-image" src="images/slider/foody-slider1.jpg">
                                                </div>
                                                {{--                                            <div class="col-md-4" style="text-align: center; padding: 2px !important;">--}}
                                                {{--                                                <img class="comment-image" src="images/slider/foody-slider1.jpg">--}}
                                                {{--                                            </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-footer">
                                        <div class="row mb-5">
                                            <div class="mr-20">
                                                <i style="color: blue" class="fa fa-heart mr-5"></i><span>van A và 10 người khác</span>
                                            </div>
                                        </div>
                                        <hr class="my-hr">
                                        <div class="row mb-5 action">
                                            <div class="mr-20">
                                                <i class="fa fa-heart mr-5"></i><span>Like</span>
                                            </div>
                                            <div class="mr-20">
                                                <i class="fa fa-comment mr-5"></i><span>Comment</span>
                                            </div>
                                            <div class="mr-20">
                                                <i class="fa fa-exclamation-triangle report-btn mr-5"></i><span>Rort</span>
                                            </div>
                                        </div>
                                        <hr class="my-hr">
                                        <div class="pb-5 sub-comment">
                                            <div class="row">
                                                <div class="mt-10 mb-10 ml-20 mr-10">
                                                    <img class="avatar" src="images/Screenshot_50.png">
                                                </div>
                                                <div class="mt-10">
                                                    <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh
                                                        Đoàn</p>
                                                    <p class="comment-time">12/01/2021 10:20:21</p>
                                                </div>
                                            </div>
                                            <div class="comment-content" style="margin: -7px 10px 0px 52px">
                                                <p>Quán phục vụ tốt Quán phục vụ tốt Quán phục vụ tốt Quán phục vụ tốt</p>
                                            </div>
                                        </div>
                                        <hr class="my-hr">
                                        <div class="pb-5 sub-comment">
                                            <div class="row">
                                                <div class="mt-10 mb-10 ml-20 mr-10">
                                                    <img class="avatar" src="images/Screenshot_50.png">
                                                </div>
                                                <div class="mt-10">
                                                    <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh
                                                        Đoàn</p>
                                                    <p class="comment-time">12/01/2021 10:20:21</p>
                                                </div>
                                            </div>
                                            <div class="comment-content" style="margin: -7px 10px 0px 52px">
                                                <p>Quán phục vụ tốt <a href="#">...See more</a></p>
                                            </div>
                                        </div>
                                        <div class="see-more"><a href="#">Xem thêm<i style="margin-left: 3px" class="fas fa-angle-down"></i></a></div>
                                        <div class="form-inline form-inline-custom">
                                            <img class="avatar" src="images/Screenshot_50.png">
                                            <input type="text" placeholder="Viết bình luận..." class="ml-10 my-comment"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-card comment-panel">
                                    <div class="comment-header">
                                        <div class="row">
                                            <div class="mt-10 mb-10 ml-20 mr-10">
                                                <img class="avatar" src="images/Screenshot_50.png">
                                            </div>
                                            <div class="mt-10">
                                                <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh
                                                    Đoàn</p>
                                                <p class="comment-time">12/01/2021 10:20:21</p>
                                            </div>
                                            <p class="rating-point">5</p>
                                        </div>
                                    </div>
                                    <div class="my-comment-body">
                                        <div class="comment-content">
                                            <p style="color: black; margin-bottom: 0px !important;">Quán phục vụ tốt Quán
                                                phục vụ tốt </p>
                                            <a href="#">See more</a>
                                        </div>
                                        <div class="comment-picture">
                                            <div class="row" style="padding: 20px">
                                                <div class="col-sm-4" style="text-align: center; padding: 2px !important; ">
                                                    <img class="comment-image" style="text-align: center"
                                                         src="images/slider/foody-slider1.jpg">
                                                </div>
                                                <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                                    <img class="comment-image" src="images/slider/foody-slider1.jpg">
                                                </div>
                                                <div class="col-sm-4" style="text-align: center; padding: 2px !important;">
                                                    <img class="comment-image" src="images/slider/foody-slider1.jpg">
                                                </div>
                                                {{--                                            <div class="col-md-4" style="text-align: center; padding: 2px !important;">--}}
                                                {{--                                                <img class="comment-image" src="images/slider/foody-slider1.jpg">--}}
                                                {{--                                            </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-footer">
                                        <div class="row mb-5">
                                            <div class="mr-20">
                                                <i style="color: blue" class="fa fa-heart mr-5"></i><span>van A và 10 người khác</span>
                                            </div>
                                        </div>
                                        <hr class="my-hr">
                                        <div class="row mb-5 action">
                                            <div class="mr-20">
                                                <i class="fa fa-heart mr-5"></i><span>Like</span>
                                            </div>
                                            <div class="mr-20">
                                                <i class="fa fa-comment mr-5"></i><span>Comment</span>
                                            </div>
                                            <div class="mr-20">
                                                <i class="fa fa-exclamation-triangle report-btn mr-5"></i><span>Rort</span>
                                            </div>
                                        </div>
                                        <hr class="my-hr">
                                        <div class="pb-5 sub-comment">
                                            <div class="row">
                                                <div class="mt-10 mb-10 ml-20 mr-10">
                                                    <img class="avatar" src="images/Screenshot_50.png">
                                                </div>
                                                <div class="mt-10">
                                                    <p class="comment-user" style="margin-bottom: -5px !important;">Hà Thanh
                                                        Đoàn</p>
                                                    <p class="comment-time">12/01/2021 10:20:21</p>
                                                </div>
                                            </div>
                                            <div class="comment-content" style="margin: -7px 10px 0px 52px">
                                                <p>dasdsa</p>
                                            </div>
                                        </div>
                                        <div class="see-more"><a href="#">Xem thêm<i style="margin-left: 3px" class="fas fa-angle-down"></i></a></div>
                                        <div class="form-inline form-inline-custom">
                                            <img class="avatar" src="images/Screenshot_50.png">
                                            <input type="text" placeholder="Viết bình luận..." class="ml-10 my-comment"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="see-more"><a  href="#">Tải nhiều hơn<i
                                            class="ml-5 fas fa-angle-double-down"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="my-card mt-25 rating-card">
                            <div>
                                <p style="color: black!important; text-align: center; font-size: initial"><b>45 </b>người
                                    dùng đã chia sẻ</p>
                            </div>
                            <hr style="margin: 10px 0px">
                            <div class="row">
                                <div class="col-6" style="padding-right: 5px !important; text-align: right">
                                    <p class="point_rating_detail">25</p>
                                    <p class="point_rating_detail">7</p>
                                    <p class="point_rating_detail">7</p>
                                    <p class="point_rating_detail">2</p>
                                </div>
                                <div class="col-6" style=" padding-left: 5px !important; text-align: left">
                                    <p style="color: black!important;">Tuyệt vời</p>
                                    <p style="color: black!important;">Khá tốt</p>
                                    <p style="color: black!important;">Trung bình</p>
                                    <p style="color: black!important;">Kém</p>
                                </div>
                            </div>
                            <hr style="margin: 10px 0px">
                            <div>
                                <div class="row">
                                    <div class="col-4" style="padding-right: 5px !important; text-align: right">
                                        <p class="mbI-0" style="color: black!important;">Vị trí</p>
                                    </div>
                                    <div class="col-7" style=" padding-left: 5px !important; text-align: left">
                                        <div class="progress" style="border-radius: 0; height: 15px; margin-top: 3px">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 plI-0 prI-0">7</div>
                                </div>
                                <div class="row">
                                    <div class="col-4" style="padding-right: 5px !important; text-align: right">
                                        <p class="mbI-0" style="color: black!important;">Giá cả</p>
                                    </div>
                                    <div class="col-7" style=" padding-left: 5px !important; text-align: left">
                                        <div class="progress" style="border-radius: 0; height: 15px; margin-top: 3px">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 plI-0 prI-0">7</div>
                                </div>
                                <div class="row">
                                    <div class="col-4" style="padding-right: 5px !important; text-align: right">
                                        <p class="mbI-0" style="color: black!important;">Chất lượng</p>
                                    </div>
                                    <div class="col-7" style=" padding-left: 5px !important; text-align: left">
                                        <div class="progress" style="border-radius: 0; height: 15px; margin-top: 3px">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 plI-0 prI-0">7</div>
                                </div>
                                <div class="row">
                                    <div class="col-4" style="padding-right: 5px !important; text-align: right">
                                        <p class="mbI-0" style="color: black!important;">Phục vụ</p>
                                    </div>
                                    <div class="col-7" style=" padding-left: 5px !important; text-align: left">
                                        <div class="progress" style="border-radius: 0; height: 15px; margin-top: 3px">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 plI-0 prI-0">7</div>
                                </div>
                                <div class="row">
                                    <div class="col-4" style="padding-right: 5px !important; text-align: right">
                                        <p class="mbI-0" style="color: black!important;">Không gian</p>
                                    </div>
                                    <div class="col-7" style=" padding-left: 5px !important; text-align: left">
                                        <div class="progress" style="border-radius: 0; height: 15px; margin-top: 3px">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 plI-0 prI-0">7</div>
                                </div>
                            </div>
                            <hr style="margin: 10px 0px">
                            <div style="text-align: center">
                                <b style="font-size: x-large; color: #03ae03">8.6</b> điểm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
        <!-- Begin suggested Product Area -->
        <div class="product-area pt-60 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="li-product-tab">
                            <ul class="nav li-product-menu">
                                <li><a class="active" data-toggle="tab"
                                       href="#li-new-product"><span>Gợi ý dành cho bạn</span></a></li>
                                {{--                            <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a></li>--}}
                                {{--                            <li><a data-toggle="tab" href="#li-featured-product"><span>Featured Products</span></a></li>--}}
                            </ul>
                        </div>
                        <!-- Begin Li's Tab Menu Content Area -->
                    </div>
                </div>
                <div class="tab-content">
                    <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="recommend-product-active product-active owl-carousel">
                                <section>

                                    <!-- Card -->
                                    <div class="card booking-card" style="max-width: 22rem;">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top"
                                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                 alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                            <!-- Data -->
                                            <ul class="list-unstyled list-inline rating mb-0">
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                                quận....</a>
                                            <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                            <!-- Text -->
                                            <p class="card-text"></p>
                                            <hr class="my-1">
                                            <ul class="add-actions-link">
                                                <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                       class="links-details" href="">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                       class="links-details" href="">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="modal" data-target="#commentPictureModel"
                                                       data-placement="top" title="Xem nhanh"
                                                       class="links-details">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Card -->

                                </section>
                                <section>

                                    <!-- Card -->
                                    <div class="card booking-card" style="max-width: 22rem;">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top"
                                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                 alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                            <!-- Data -->
                                            <ul class="list-unstyled list-inline rating mb-0">
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                                quận....</a>
                                            <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                            <!-- Text -->
                                            <p class="card-text"></p>
                                            <hr class="my-1">
                                            <ul class="add-actions-link">
                                                <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="modal" data-target="#comment"
                                                       data-placement="top" title="Xem nhanh"
                                                       class="links-details">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Card -->

                                </section>
                                <section>

                                    <!-- Card -->
                                    <div class="card booking-card" style="max-width: 22rem;">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top"
                                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                 alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                            <!-- Data -->
                                            <ul class="list-unstyled list-inline rating mb-0">
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                                quận....</a>
                                            <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                            <!-- Text -->
                                            <p class="card-text"></p>
                                            <hr class="my-1">
                                            <ul class="add-actions-link">
                                                <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Card -->

                                </section>
                                <section>

                                    <!-- Card -->
                                    <div class="card booking-card" style="max-width: 22rem;">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top"
                                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                 alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                            <!-- Data -->
                                            <ul class="list-unstyled list-inline rating mb-0">
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                                quận....</a>
                                            <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                            <!-- Text -->
                                            <p class="card-text"></p>
                                            <hr class="my-1">
                                            <ul class="add-actions-link">
                                                <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Card -->

                                </section>
                                <section>

                                    <!-- Card -->
                                    <div class="card booking-card" style="max-width: 22rem;">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top"
                                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                 alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                            <!-- Data -->
                                            <ul class="list-unstyled list-inline rating mb-0">
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                                quận....</a>
                                            <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                            <!-- Text -->
                                            <p class="card-text"></p>
                                            <hr class="my-1">
                                            <ul class="add-actions-link">
                                                <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Card -->

                                </section>
                                <section>

                                    <!-- Card -->
                                    <div class="card booking-card" style="max-width: 22rem;">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <img class="card-img-top"
                                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg"
                                                 alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><a>Texas Chicken</a></h4>
                                            <!-- Data -->
                                            <ul class="list-unstyled list-inline rating mb-0">
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i>
                                                </li>
                                                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                                            </ul>
                                            <a class="mb-2"><i class="fas fa-map-marker-alt"></i>&nbsp; 55 Đặng Thùy Trâm,
                                                quận....</a>
                                            <p class="card-text">Đoàn: Đồ ăn rất ngon, nên thử</p>
                                            <!-- Text -->
                                            <p class="card-text"></p>
                                            <hr class="my-1">
                                            <ul class="add-actions-link">
                                                <li><a data-toggle="tooltip" data-placement="top" title="Lưu"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-bookmark"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Thích"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                </li>
                                                <li><a data-toggle="tooltip" data-placement="top" title="Xem nhanh"
                                                       class="links-details" href="wishlist.html">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Card -->

                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Mug Today is a good
                                                        day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/10.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Mug Today is a good
                                                        day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/8.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Mug Today is a good
                                                        day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="li-featured-product" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Mug Today is a good
                                                        day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Mug Today is a good
                                                        day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Accusantium dolorem1</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="single-product">
                                                <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="shop-left-sidebar.html">Studio Design</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product">Mug Today is a good
                                                        day</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">$71.80</span>
                                                    <span class="old-price">$77.22</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                           data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Model comment -->
        <div class="modal fade modal-wrapper" id="comment" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area row">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <!-- Product Details Left -->
                                <div class="product-details-left">
                                    <div class="product-details-images slider-navigation-1">
                                        <div class="lg-image">
                                            <img src="images/product/large-size/1.jpg" alt="product image">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4" style="padding-right: 5px !important; text-align: right">
                                            <p>Vị trí</p>
                                            <p>Giá cả</p>
                                            <p>Chất lượng</p>
                                            <p>Dịch vụ</p>
                                            <p>Không gian</p>
                                        </div>
                                        <div class="col-6" style=" padding-left: 5px !important; text-align: left">
                                            <input class="custom-range" type="range" min="0" max="10">
                                            <input class="custom-range" type="range" min="0" max="10">
                                            <input class="custom-range" type="range" min="0" max="10">
                                            <input class="custom-range" type="range" min="0" max="10">
                                            <input class="custom-range" type="range" min="0" max="10">
                                        </div>
                                        <div class="col-2" style="padding-left: 5px !important; text-align: left">
                                            <p style="color: #9c25b9!important;">25</p>
                                            <p style="color: #00c851 !important;">7</p>
                                            <p style="color: black!important;">7</p>
                                            <p style="color: red!important;">2</p>
                                            <p style="color: red!important;">2</p>
                                        </div>
                                    </div>
                                </div>
                                <!--// Product Details Left -->
                            </div>

                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="product-details-view-content pt-60">
                                    <div class="product-info">
                                        <h2>Ahihi - Fruit & Yogurt - Shop Online</h2>
                                        <span class="product-details-ref">55 Đặng Thùy Trâm, BÌnh Thạnh</span>
                                        <div class="product-desc">
                                        <textarea>
                                                    100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                        </textarea>
                                        </div>
                                        <p>Chọn hình</p>
                                        <div class="row">
                                            <div  @click="cancelImage()" class="select-img-comment"><img class="img-comment" src="images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>
                                            <div class="select-img-comment"><img class="img-comment" src="images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>
                                            <div class="select-img-comment"><img class="img-comment" src="images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>
                                            <div class="select-img-comment"><img class="img-comment" src="images/slider/foody-slider1.jpg"><i class="cancel far fa-times-circle"></i></div>
                                            <div class="select-img-comment"> <input style="margin-top: -5px; opacity: 0; height: 140px" type="file"><i id="add-img-comment" class="fas fa-plus"></i></div>
                                        </div>
                                        <div><button @click.stop.prevent="cancelImage"></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View | Modal Area End Here -->
    </div>
@endsection
@section('script')
<script>
    // $.holdReady(true);
    axios.defaults.timeout = 1200000;
    var navbarNav = new objectDetail('#detail-page');

    function objectDetail(element) {
        if (!$(element).length) {
            return;
        }
        var timeout = null;
        // Vue.config.devtools = true;
        this.vm = new Vue({
            el: element,
            data: {
                hehe : 'a'
                // loading: false,
                // api_logout: $(element).attr('api-logout'),
                // token: '',
                // count_cart: 0,
                // user: JSON.parse(localStorage.getItem('user'))
            },
            methods: {
                // var vm = this;
                cancelImage: function (){
                    this.hehe = 'b';
                    console.log('cancleeee');
                }
                // getLocal:function(){
                //     $.get("https://ipinfo.io/json", function (response) {
                //         if(response.hasOwnProperty('country')){
                //             localStorage.setItem('location',JSON.stringify(response))
                //         }
                //     }, "jsonp");
                // },
                // logout: function () {
                //     var vm = this;
                //     vm.loading = true;
                //     if (!localStorage.getItem("token") || !localStorage.getItem("user")) {
                //         window.location = '/login';
                //     }
                //     var token = 'Bearer ' + localStorage.getItem('token').replace(/['"]+/g, '');
                //     this.token = token;
                //     var config = {
                //         headers: {
                //             Authorization: this.token,
                //             'Content-Type': 'application/json;charset=UTF-8',
                //         }
                //     };
                //     axios.get(vm.api_logout, config).then(function (response) {
                //         vm.loading = false;
                //         var data = response.data;
                //         localStorage.removeItem('user');
                //         localStorage.removeItem('token');
                //         if (localStorage.getItem('expiresIn')) {
                //             localStorage.removeItem('expiresIn');
                //             localStorage.removeItem('login_time');
                //         }
                //         window.location = '/login';
                //     })
                //
                // }
            },
            created: function () {
                this.cancelImage();
                console.log("oh noo");
            },
            mounted: function () {
                // $(document).trigger('vue-loaded');
            }
        });
    }
</script>
@endsection
