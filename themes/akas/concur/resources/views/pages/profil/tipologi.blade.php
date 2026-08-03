@extends('layouts.app')
@section('title', 'Tipologi')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Tipologi'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">TIPOLOGI {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</div>
                        <div class="img-container text-center">
                            <img class="img-circle" src="{{ is_logo($profil->file_logo) }}" alt="Logo">
                        </div>
                        <p> {!! $profil->dataumum->tipologi !!}</p>
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