@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
@include('layouts.slider')

<main id="main">
    <div class="desa-aka">
        <div class="aka-header">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="aka-title">{{ $sebutan_wilayah . ' ' . $profil->nama_kecamatan }}
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        <div class="container align-items-center">
            <div class="aka-box">
                <div class="row">
                    <div class="col-12">
                        <div class="aka-cont">
                            <div class="row">
                                <div class="col-3">
                                    <div class="get-photo">
                                        <img class="img-fluid"
                                            src="@if (isset($camat->foto)) {{ asset($camat->foto) }} @else {{ asset('img/no-profile.png') }} @endif">
                                        <div class="get-name">
                                            <div class="job-title">{{ $sebutan_kepala_wilayah }} {{ $profil->nama_kecamatan }}</div>
                                            <div class="name">{{ $camat->namaGelar }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="aka-sambutan">
                                        <div class="header hidden-xs">
                                            <a href="{{ route('profil.sambutan') }}">{{ strtoupper('SAMBUTAN ' . $sebutan_kepala_wilayah . ' ' . $profil->nama_kecamatan) }}</a>
                                        </div>
                                        {!! __html(Str::limit($profil->sambutan, 150)) !!} <a href="{{ route('profil.sambutan') }}">Selengkapnya</a>
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