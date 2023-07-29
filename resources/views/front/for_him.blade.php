@extends('front.layouts.master')
@section('content')
<!-- Start of Breadcrumbs -->
<div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="breadcrumb-item active">Shop</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Products Wrapper -->
            <div class="products-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <main id="primary" class="site-main">
                                <div class="shop-wrapper">
                                   <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-toolbar">
                                                <div class="toolbar-inner">
                                                    <div class="toolbar-amount">
                                                        <span>Showing 10 to 18 of 27</span>
                                                    </div>
                                                </div>
                                                <div class="product-select-box">
                                                    <div class="product-sort">
                                                        <p>Sort By:</p>
                                                        <select class="nice-select" name="sortby">
                                                            <option value="trending">Relevance</option>
                                                            <option value="sales">Name (A - Z)</option>
                                                            <option value="sales">Name (Z - A)</option>
                                                            <option value="price-asc">Date (ASC)</option>
                                                            <option value="price-asc">Date (DESC)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-products-wrapper">
                                                <div class="tab-content">
                                                    <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                                                        <div class="row">
                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-1.jpg" alt="Compete Track Tote" title="Compete Track Tote">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Shoes</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-9.jpg" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Shoes</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-2.jpg" alt="Fusion Backpack" title="Fusion Backpack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Shoes</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-10.jpg" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Shoes</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-3.jpg" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Bags</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-11.jpg" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Sleeper</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-4.jpg" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Muffler</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product-12.jpg" alt="Crown Summit Backpack" title="Crown Summit Backpack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Shoes</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->

                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                           <a href="single-product.html">
                                                                                <img src="assets/images/product-5.jpg" alt="Crown Summit Backpack" title="Crown Summit Backpack">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">Sun Glasses</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
                                                                         </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of shop-products-wrapper -->

                                            <div class="pagination-area">
                                                <div class="row align-items-center">
                                                    <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                                        <div class="page-amount d-flex justify-content-center justify-content-md-start">
                                                            <p>Showing 10 to 18 of 27 (3 Pages)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-left"></i> <span>Previous</span></a></li>
                                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                            <li class="page-item active"><span class="page-link">2</span></li>
                                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                            <li class="page-item"><a href="#" class="page-link"><span>Next</span> <i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!-- end of pagination-area -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <aside id="secondary" class="widget-area">
                                <div class="sidebar-widget list-categories-widget">
                                    <h2 class="widgettitle">Our Products</h2>
                                    <div class="cat-accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">For Him</button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Belts</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">For Her</button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Belts</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Sandles</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Accessories</button>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                <div class="card-body">
                                                    <ul class="cat-sub-menu">
                                                        <li><a href="#">Coasters </a></li>
                                                        <li><a href="#">Bracelet</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside> <!-- end of #secondary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Products Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->
@endsection