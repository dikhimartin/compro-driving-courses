@extends('layouts.app')
@section('web_title', $page)
@section('navActive', "about-us")

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(assets/images/background/bg1.jpg );">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{ $page }}</h1>
                </div>
            </div>
        </div>

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>{{ $page }}</li>
                </ul>
            </div>
        </div>
        <!-- content area -->
        <div class="content">
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Bertemu <span class="text-primary">Dengan Team Kami</span></h2>
                        <p>Berikut Nama Trainer Dan Team Pengurus BINA <strong>Drive</strong></p>
                    </div>
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 dlab-team-1 left">
                                <div class="dlab-box m-b30 team-skew ">
                                    <div class="dlab-media"> <img src="assets/images/company-profile/dikhi-martin.png" alt="" width="358" height="460">
                                    <div class="dlab-info-has">
                                        <ul class="dlab-social-icon bg-primary">
                                                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                                <li><a class="fab fa-twitter" href="https://twitter.com/" target="blank"></a></li>
                                                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank" ></a></li>
                                                <li><a class="fab fa-google-plus-g" href="https://mail.google.com/" target="blank" ></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a20 bg-secondry text-center text-white team-info ">
                                        <h4 class="dlab-title text-uppercase m-t0 m-b5">Dikhi Martin</h4>
                                        <span class="dlab-member-position">Founder</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 dlab-team-1">
                                <div class="dlab-box m-b30 team-skew ">
                                    <div class="dlab-media"> <img src="assets/images/company-profile/driver-1.png" alt="" width="358" height="460">
                                        <div class="dlab-info-has">
                                            <ul class="dlab-social-icon bg-primary">
                                                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                                <li><a class="fab fa-twitter" href="https://twitter.com/" target="blank"></a></li>
                                                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank" ></a></li>
                                                <li><a class="fab fa-google-plus-g" href="https://mail.google.com/" target="blank" ></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a20 bg-secondry text-center text-white team-info ">
                                        <h4 class="dlab-title text-uppercase m-t0 m-b5">Kurnia Wahyudin</h4>
                                        <span class="dlab-member-position">Trainer</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 dlab-team-1 right">
                                <div class="dlab-box m-b30 team-skew ">
                                    <div class="dlab-media"> <img src="assets/images/company-profile/driver-2.png" alt="" width="358" height="460">
                                        <div class="dlab-info-has">
                                            <ul class="dlab-social-icon bg-primary">
                                                <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                                <li><a class="fab fa-twitter" href="https://twitter.com/" target="blank"></a></li>
                                                <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank" ></a></li>
                                                <li><a class="fab fa-google-plus-g" href="https://mail.google.com/" target="blank" ></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a20 bg-secondry text-center text-white team-info ">
                                        <h4 class="dlab-title text-uppercase m-t0 m-b5">Tiara Aryani </h4>
                                        <span class="dlab-member-position">Trainer</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
