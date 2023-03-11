@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(assets/images/background/bg1.jpg );">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Galeri</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Galeri</li>
                </ul>
            </div>
        </div>
        <!-- content area -->
        <div class="content">
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <!-- Gallery -->
                    <div class="site-filters clearfix center  m-b40">
                        <ul class="filters" data-bs-toggle="buttons">
                            <li data-filter="" class="btn active">
                                <input type="radio">
                                <a href="javascript:void(0)" class="site-button-secondry"><span>Tampilkan semua</span></a> </li>
                            <li data-filter="vehicle" class="btn">
                                <input type="radio" >
                                <a href="javascript:void(0)" class="site-button-secondry"><span>Armada</span></a> </li>
                            <li data-filter="training" class="btn">
                                <input type="radio">
                                <a href="javascript:void(0)" class="site-button-secondry"><span>Pelatihan</span></a> </li>
                        </div>
                        <div class="clearfix">
                            <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 mfp-gallery">
                                <!-- vehicle items -->
                                <li class="vehicle card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-car.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-car.png" class="mfp-link"  title="Honda Jazz"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="vehicle card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-car-2.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-car-2.png" class="mfp-link"  title="Honda Brio"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="vehicle card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-car-3.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-car-3.png" class="mfp-link"  title="Ford Fiesta"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="vehicle card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-car-4.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-car-4.png" class="mfp-link"  title="Volkswagen Jetta (a6)"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Traning items -->
                                <li class="training card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-training.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-training.png" class="mfp-link"  title="Pelatihan 1"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="training card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-training-2.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-training-2.png" class="mfp-link"  title="Pelatihan 2"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="training card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="dlab-box dlab-gallery-box">
                                        <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0)"> <img src="assets/images/company-profile/gallery/gallery-training-3.png"  alt=""> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"> 
                                                    <a  href="assets/images/company-profile/gallery/gallery-training-3.png" class="mfp-link"  title="Pelatihan 3"> 
                                                        <i class="far fa-image icon-bx-xs"></i> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection
