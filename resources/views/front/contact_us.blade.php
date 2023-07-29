@extends('front.layouts.master')
@section('content')
 <!-- Start of Breadcrumbs -->
 <div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{url('/home')}}">Home</a>
                            <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper page-about">
            
            <!-- Start of Contact Section -->
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div id="map_location" class="map-location">
                                <div id="map">
                                    <div id="gmap-wrap">
                                        <div id="gmap">
                                        </div>
                                    </div>
                                </div> <!-- end of #map -->
                            </div> <!-- end of #map_location -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contact-form-wrapper">
                                <div class="section-title left-aligned">
                                    <h2>get In Touch</h2>
                                </div>
                                <form id="contact-form" action="sendemail.php" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <input type="text" name="name" class="form-control" id="com-name" placeholder="Your Name *" required>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <input type="email" name="email" class="form-control" id="com-email" placeholder="Your Email *" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                            <textarea id="comment" placeholder="Type Your Message....." name="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <button name="send_message" type="submit" class="btn btn-secondary">Send Your Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end of contact-form-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Contact Section -->

            <!-- Start of Info Section -->
            <section class="info-section pt-full pb-half bgc-offset">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-md-locate"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Our Location</h4>
                                    <p>S-11, Super Market, Kisan Bazar,</p>
                                    <p>Vibhuti Khand, Gomti Nagar,</p>
                                    <p>Lucknow, Uttar Pradesh 226010, India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-ios-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Contact Us Anytime</h4>
                                    <p>Mobile: <a href="{{url('/contact-us')}}">(+91) 82995 93485</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-md-mail-open"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Write Some Words</h4>
                                    <p><a href="#">support@peltleather.com</a></p>
                                    <p><a href="mailto:peltstore@gmail.com">peltstore@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Info Section -->
        </main>
        <!-- End of Main Content Wrapper -->
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
<script src="{{asset('assets/js/gmaps.min.js')}}"></script>
<script src="{{asset('assets/js/custom-map.js')}}"></script>
@endsection

