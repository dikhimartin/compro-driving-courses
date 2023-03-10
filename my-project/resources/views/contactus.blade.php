@extends('layouts.app')
@section('web_title', $page)
@section('navActive', "contact-us")

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
            <div class="section-full content-inner bg-white contact-style-1">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8">
                            <div class="p-a30 bg-gray clearfix m-b30 ">
                                <p><strong>Silahkan lengkapi form dibawah ini. Dan kami akan segera menanggapi pesan Anda.</strong></p>
                                <div class="dzFormMsg"></div>
                                <form method="post" class="dzForm" action="script/contact.php">
                                <input type="hidden" value="Contact" name="dzToDo" >
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzName" type="text" required class="form-control" placeholder="Nama Anda">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="No Kontak / Whatsapp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Komentar Anda..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                    <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button "> <span>Kirim Pesan</span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Left part END -->
                        <!-- right part start -->
                        <div class="col-lg-4 d-lg-flex">
                            <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                                <h2 class="m-b10">Detail Kontak</h2>
                                <p>Jika Anda memiliki pertanyaan, gunakan detail kontak berikut.</p>
                                <ul class="no-margin">
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0)" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Alamat:</h6>
                                            <p>demo address #8901 Lorem ipsum, Surakarta</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left  m-b30">
                                        <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0)" class="icon-cell"><i class="ti-email"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                            <p>info@binadrivingcourses.com</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left">
                                        <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0)" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                            <p>0800-123456 (24/7 Support Line)</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="m-t20">
                                    <ul class="dlab-social-icon dez-border dlab-social-icon-lg">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f bg-primary" target="blank"></a></li>
                                        <li><a href="https://www.twitter.com/" class="fab fa-twitter bg-primary" target="blank"></a></li>
                                        <li><a href="https://www.linkedin.com/"class="fab fa-linkedin-in bg-primary" target="blank"></a></li>
                                        <li><a href="https://www.instagram.com/" class="fab fa-instagram bg-primary" target="blank"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- right part END -->
                    </div>
                    <div class="row m-b30">
                        <div class="col-lg-12">
                        <h2>Lokasi Kami</h2>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63282.31436199311!2d110.74705291743433!3d-7.559203139905645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Surakarta%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1678518917161!5m2!1sen!2sid" style="border:0; width:100%; height:400px;" allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection