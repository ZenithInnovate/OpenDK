@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
@include('layouts.slider')

<main id="main">
    <div class="desa-aka">
        <div class="aka-header">
            <span class="aka-title">{{ config('setting.judul_aplikasi') . ' - ' . $sebutan_wilayah . ' ' . $profil->nama_kecamatan }}</span>
        </div>
        <div class="container align-items-center">
            <div class="aka-box">
                <div class="row">
                    <div class="col-7">
                        <div class="aka-cont">
                            <div class="row">
                                <div class="col-4">
                                    <div class="get-photo">
                                        <img class="img-fluid"
                                            src="@if (isset($camat->foto)) {{ asset($camat->foto) }} @else {{ asset('img/no-profile.png') }} @endif">
                                        <div class="get-name">
                                            <div class="job-title">{{ $sebutan_kepala_wilayah }} {{ $profil->nama_kecamatan }}</div>
                                            <div class="name">{{ $camat->namaGelar }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="aka-sambutan" style="margin-left: 30px; width: 100%;">
                                        <div class="header hidden-xs">
                                            <a
                                                href="https://demo.smartdesadigital.id/berita/kategori/sambutan-dan-himbauan">Sambutan
                                                & Himbauan</a>
                                        </div>
                                        <strong>30 September 2021</strong> - Demi terciptanya kualitas pelayanan
                                        publik yang cepat, dan efektif Desa kini menghadirkan aplikasi Smart&#8230;
                                        <a
                                            href="https://demo.smartdesadigital.id/berita/detail/sambutan-dan-himbauan/smart-desa-digital-demi-kemajuan-desa">
                                            selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Short Statistic ======= -->

    <!-- ======= Counts Section ======= -->
    @include('layouts.shortcut')
    <!-- End Counts Section -->
    <!-- End Statistik Section -->

    <!-- ======= Featured Services Section ======= -->
    @include('layouts.artikel-kecamatan')
    <!-- End Featured Services Section -->

    <!-- ======= Perangkat ======= -->
    @include('layouts.perangkat-kecamatan')
    <!-- End Perangkat Section -->

    {{-- @include('layouts.hubungi-kami') --}}

    {{-- @include('layouts.anggaran') --}}

    <!-- ======= Sinergi Program Section ======= -->

    @include('layouts.sinergi-program')
    <!-- End Our Clients Section -->
    <!-- End Sinergi Program Section -->

</main>
<!-- End #main -->
@endsection