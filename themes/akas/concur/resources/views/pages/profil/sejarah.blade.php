@extends('layouts.app')
@section('title', 'Sejarah')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Sejarah'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">SEJARAH {{ strtoupper($sebutan_wilayah) }} {{
                            strtoupper($profil->nama_kecamatan) }}</div>
                        <div class="img-container text-center">
                            <img class="img-circle" style="display:block;margin:auto"
                                src="{{ is_logo($profil->file_logo) }}">
                        </div>
                        <p> {!! $profil->dataumum->sejarah !!}</p>
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