@extends('layouts.app')
@section('title', 'Detail Data Regulasi')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Detail Data Regulasi'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">Data Regulasi</div>
                        @if (isset($regulasi->file_regulasi) && $regulasi->mime_type != 'pdf')
                        <img id="fileUnduhan" src="{{ asset($regulasi->file_regulasi) }}" width="100%">
                        @endif
                        @if (isset($regulasi->file_regulasi) && $regulasi->mime_type == 'pdf')
                        <object data="@if (isset($regulasi->file_regulasi)) {{ asset($regulasi->file_regulasi) }} @endif" type="application/pdf"
                            width="100%" height="600" class="" id="showpdf"> </object>
                        @endif
                        <div class="text-center" style="margin-top: 10px;">
                            <a href="{{ route('unduhan.regulasi.download', ['file' => str_slug($regulasi->judul_prosedur)]) }}">
                                <button type="button" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Unduh
                                </button>
                            </a>
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