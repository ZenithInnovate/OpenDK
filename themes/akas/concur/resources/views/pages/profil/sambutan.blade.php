@extends('layouts.app')
@section('title', 'Sambutan')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Sambutan'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">{{ strtoupper('SAMBUTAN ' . $sebutan_kepala_wilayah . ' ' . $profil->nama_kecamatan) }}</div>
                        <div class="box-body">
                            <div class="text-center">
                                <img src="@if (isset($camat->foto)) {{ asset($camat->foto) }} @else {{ asset('img/no-profile.png') }} @endif"
                                    class="img-fluid" style="max-height: 256px; object-fit: contain; width: 250px;">
                                <div class="camat-name">{{ $camat->namaGelar }}</div>
                            </div>
                            <p> {!! $profil->sambutan !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page content -->

            {{-- Widget --}}
            @include('layouts.widget')
        </div>
    </div>
</div>
@endsection