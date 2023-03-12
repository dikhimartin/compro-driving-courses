@extends('layouts.app')
@section('web_title', $page)
@section('navActive', "package")

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
                        <h2 class="text-uppercase">Paket Kursus <span class="text-primary">BINA Drive</span></h2>
                        <p>Kami menawarkan Paket Latihan Manual dan Matic yang tentu saja dengan harga bersaing dan pelayanan yang maksimal. Kita akan diajarkan mulai dari dasar seperti pengenalan bagian-bagian mobil, pedal gas, kopling, rem, tanjakan atau turunan, dan juga parkir.</p>
                    </div>
                    <div class="section-content ">
                        <div class="row">
                            <!-- Paket Manual -->
                            <div class="p-a30 bg-white m-b30">
                                <div class="section-head">
                                    <h2 class="text-uppercase">Paket Manual</h2>
                                </div>
                                <div class="section-content">
                                    <div class="pricingtable-row m-b30">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 480rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>Private</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Administrasi 20rb </li>
                                                            <li><i class="fas fa-check"></i> 10 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> max 1 jam / ±20km</li>
                                                            <li><i class="fas fa-check"></i> <del>Antar-Jemput</del></li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner pricingtable-highlight">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 630rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>VIP Class</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Administrasi 20rb </li>
                                                            <li><i class="fas fa-check"></i> 5 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> max 2 jam / ±40km</li>
                                                            <li><i class="fas fa-check"></i> <del>Antar-Jemput</del></li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 780rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>VVIP Class</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Administrasi 20rb </li>
                                                            <li><i class="fas fa-check"></i> 5 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> max 2 jam / ±40km</li>
                                                            <li><i class="fas fa-check"></i> Antar-Jemput (Max 10km PP)</li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 70rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>Suka - Suka</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Biaya perjam </li>
                                                            <li><i class="fas fa-check"></i> Cash sesuai pengambilan</li>
                                                            <li><i class="fas fa-check"></i> 2 - 12 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> <del>Administrasi 20rb</del> </li>
                                                            <li><i class="fas fa-check"></i> <del>Antar-Jemput (Max 10km PP)</del></li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Paket Matic -->
                            <div class="p-a30 bg-white m-b30">
                                <div class="section-head">
                                    <h2 class="text-uppercase">Paket Matic</h2>
                                </div>
                                <div class="section-content">
                                    <div class="pricingtable-row m-b30">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 730rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>Private</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Administrasi 20rb </li>
                                                            <li><i class="fas fa-check"></i> 10 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> max 1 jam / ±20km</li>
                                                            <li><i class="fas fa-check"></i> <del>Antar-Jemput</del></li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner pricingtable-highlight">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 830rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>VIP Class</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Administrasi 20rb </li>
                                                            <li><i class="fas fa-check"></i> 5 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> max 2 jam / ±40km</li>
                                                            <li><i class="fas fa-check"></i> <del>Antar-Jemput</del></li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 980rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>VVIP Class</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Administrasi 20rb </li>
                                                            <li><i class="fas fa-check"></i> 5 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> max 2 jam / ±40km</li>
                                                            <li><i class="fas fa-check"></i> Antar-Jemput (Max 10km PP)</li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-3 col-lg-3">
                                                <div class="pricingtable-wrapper">
                                                    <div class="pricingtable-inner">
                                                        <div class="pricingtable-price"> <span class="pricingtable-bs">Rp 95rb</span></div>
                                                        <div class="pricingtable-title">
                                                            <h3>Suka - Suka</h3>
                                                        </div>
                                                        <ul class="pricingtable-features">
                                                            <li><i class="fas fa-check"></i> Biaya perjam </li>
                                                            <li><i class="fas fa-check"></i> Cash sesuai pengambilan</li>
                                                            <li><i class="fas fa-check"></i> 2 - 12 x Pertemuan</li>
                                                            <li><i class="fas fa-check"></i> <del>Administrasi 20rb</del> </li>
                                                            <li><i class="fas fa-check"></i> <del>Antar-Jemput (Max 10km PP)</del></li>
                                                        </ul>
                                                        <div class="pricingtable-footer"> <a href="javascript:void(0)" class="site-button">Ambil Kursus</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
