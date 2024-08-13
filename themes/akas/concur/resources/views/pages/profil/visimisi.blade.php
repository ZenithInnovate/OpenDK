@extends('layouts.app')
@section('title', 'Visi dan Misi')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Visi dan Misi'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">VISI DAN MISI {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</div>
                        <div class="box-body">
                            <h3 class="box-title text-bold text-center">VISI</h3>
                            <p> {!! $profil->visi !!}</p>
                            <hr>
                            <h3 class="box-title text-bold text-center">MISI</h3>
                            <p> {!! $profil->misi !!}</p>
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