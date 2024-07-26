@extends('layouts.app')
@section('title', 'Data Regulasi')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Data Regulasi'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">Data Regulasi</div>
                        @if (isset($regulasi))
                            <table class="table table-bordered table-hover dataTable" id="datadesa-table">
                                <thead>
                                    <tr>
                                        <th style="width: 30px" class="text-center">No</th>
                                        <th>Judul Regulasi</th>
                                        <th style="width: 120px;" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regulasi as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('unduhan.regulasi.show', ['nama_regulasi' => str_slug($item->judul)]) }}" title="Lihat">
                                                    <button type="button" class="btn btn-warning btn-sm" style="width: 40px;"><i class="fa fa-eye fa-fw"></i></button>
                                                </a>
                                                <a href="{{ route('unduhan.regulasi.download', ['file' => str_slug($item->judul)]) }}" title="Unduh">
                                                    <button type="button" class="btn btn-info btn-sm" style="width: 40px;"><i class="fa fa-download"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data belum tersedia.
                        </div>

                        @endif
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