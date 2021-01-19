@extends('client.index')
@section('content')
<div class="tab-content">
    <div id="li-new-product" class="tab-pane active show" role="tabpanel">
        <div class="row">
            <div class="product-active owl-carousel">
                <div class="col-lg-12">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="{{url('detail')}}">
                                <img src="{{url('public')}}/limupa/images/product/large-size/1.jpg" alt="Li's Product Image">
                            </a>
                            <span class="sticker">NEW</span>
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
                                <h4><a class="product_name" href="{{url('detail')}}">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">Rp.7.046.800</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="{{url('detail')}}">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/2.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">Rp.1.046.800</span>
                                    <span class="old-price">Rp.2.000.800</span>
                                    <span class="discount-percentage">-48%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/3.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">Rp.746.800</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/4.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">Rp1.746.800</span>
                                    <span class="old-price">Rp.2.746.800</span>
                                    <span class="discount-percentage">-46%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/5.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">Rp.546.800</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/6.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                </div>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/12.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">$46.80</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/11.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/10.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">$46.80</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/9.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/8.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">$46.80</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/7.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/3.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">$46.80</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/5.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/7.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">$46.80</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/9.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/11.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                <div class="price-box">
                                    <span class="new-price">$46.80</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
                            <a href="single-product.html">
                                <img src="{{url('public')}}/limupa/images/product/large-size/12.jpg" alt="Li's Product Image">
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
                                <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                <div class="price-box">
                                    <span class="new-price new-price-2">$71.80</span>
                                    <span class="old-price">$77.22</span>
                                    <span class="discount-percentage">-7%</span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
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
@endsection