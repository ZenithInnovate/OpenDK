@extends('layouts.app')
@section('title', $page_title)

@push('styles')
<style type="text/css">
    .halaman-arsip {
        margin: 0px 0;
    }
    .box-header {
        padding: 10px;
        margin-bottom: -5px;
        border-radius: 5px;
    }

    .form-horizontal .form-group {
        padding-top: 10px;
    }

    .form-horizontal .form-group label {
        padding-top: 5px;
    }
</style>
@endpush

@section('content')

@include('layouts.breadcrumbs', ['title' => $page_title])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="halaman-arsip">
                        <div class="box-header">
                            <form class="form-horizontal" id="form_filter" method="get" action="{{ route('filter-berita-desa') }}">
                                <input type="hidden" value="1" name="page">
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="list_desa" class="col-sm-4 control-label">Desa</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="list_desa" name="desa" style="width: 100%;">
                                                <option value="Semua">Semua Desa</option>
                                                @foreach ($list_desa as $desa)
                                                    <option value="{{ $desa->desa_id }}" <?php $cari_desa == $desa->desa_id && (print 'selected'); ?>>{{ $desa->nama }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="urutan" class="col-sm-4 control-label">Urutan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="tanggal" name="tanggal" style="display: inline-flex; width: 100%;">
                                                <option value="Terlama">Terbaru</option>
                                                <option value="Terbaru">Terlama</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="input-group input-group-sm" style="display: inline-flex; float: right; padding: 10px;">
                                        <input class="form-control" style="height: auto;" type="text" name="cari" placeholder="Cari berita"
                                            value="{{ $cari }}" />
                                        <button type="submit" class="btn btn-info btn-block" style="width: auto;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>

                        @include('pages.berita.feeds')
                    </div>
                </div>
            </div>

            {{-- Widget --}}
            @include('layouts.widget')
        </div>
    </div>
</div>
@endsection