@extends('front.layouts.master')
@section('content')
<!-- Start of Breadcrumbs -->
<div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{url('/home')}}">Home</a>
                            <span class="breadcrumb-item active">About Us</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper page-about">
            
            <!-- Start of About US Section -->
            <section class="about-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-6">
                            <div class="content-wrapper">
                                <div class="section-title left-aligned">
                                    <h2>Welcome To Pelt Leather!</h2>
                                </div>
                                <p class="lead">PELT Leather develops highly progressive leather qualities for some of the industry’s most iconic contemporary designers and brands. We are dealing in all kinds of Leather Products. We are exporting our Leather Product in countries of Gulf, Europe, U.S.A, Russia. We are the producer of 100% Genuine Leather Product, we never compromise on the quality of our product.</p>
                                <p>Pelt Leather offers a unique mix of design and craftsmanship as it celebrates an era when every journey was glamorous and travels ventured to unfamiliar frontiers to discover both themselves, as well as new places. Every handcrafted piece of Pelt Leather Products is an expression of fine individuality. Embellishments adorn materials in subtle sophistication, carefully balanced to make a distinct statement that whispers elegance.</p>
                                <a class="default-btn" href="{{url('/')}}">Explore now!</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-6">
                            <div class="overview-img text-center">
                                <img src="{{ asset('assets/images/about.jpg')}}" alt="About Us">
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of About US Section -->

            <!-- Start of Team Section -->
            <section class="team-section pt-full pb-half bgc-offset">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>Our Team</h2>
                            </div>
                        </div>
                    </div> end of row -->

                    <!-- <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="team-wrapper">
                                <div class="team-media">
                                    <a href="#">
                                        <img src="assets/images/about/team-1.jpg" alt="Team Image">
                                    </a>
                                    <div class="team-socials">
                                        <div class="chain-animation">
                                            <a class="bg-facebook" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-twitter" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-gplus" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4>Mike Banding</h4>
                                    <span>Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="team-wrapper">
                                <div class="team-media">
                                    <a href="#">
                                        <img src="assets/images/about/team-4.jpg" alt="Team Image">
                                    </a>
                                    <div class="team-socials">
                                        <div class="chain-animation">
                                            <a class="bg-facebook" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-twitter" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-gplus" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4>Peter Johnson</h4>
                                    <span>Team Leader</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="team-wrapper">
                                <div class="team-media">
                                    <a href="#">
                                        <img src="assets/images/about/team-2.jpg" alt="Team Image">
                                    </a>
                                    <div class="team-socials">
                                        <div class="chain-animation">
                                            <a class="bg-facebook" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-twitter" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-gplus" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4>Jane Loren</h4>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="team-wrapper">
                                <div class="team-media">
                                    <a href="#">
                                        <img src="assets/images/about/team-3.jpg" alt="Team Image">
                                    </a>
                                    <div class="team-socials">
                                        <div class="chain-animation">
                                            <a class="bg-facebook" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-twitter" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="chain-animation">
                                            <a class="bg-gplus" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h4>Jack Logan</h4>
                                    <span>Chairman</span>
                                </div>
                            </div>
                        </div>

                    </div> end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Team Section -->
    </main>
        <!-- End of Main Content Wrapper -->
@endsection