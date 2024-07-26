@extends('layouts.app')
@section('title', $potensi->nama_potensi)

@section('content')

@include('layouts.breadcrumbs', ['title' => $potensi->nama_potensi])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">{{ $potensi->nama_potensi }}</div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <img src="{{ asset($potensi->file_gambar) }}" width="100%">
                            </div>
                            <div class="col-md-12" style="margin-top: 20px;">
                                <h3>{{ $potensi->nama_potensi }}</h3>
                                <p>{{ $potensi->deskripsi }}</p>
                            </div>
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