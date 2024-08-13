@extends('layouts.app')
@section('title', 'Artikel')

@section('content')

@include('layouts.breadcrumbs', ['title' => ucwords($desa->sebutan_desa) . ' ' . $desa->nama])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <!-- Post Content -->
                        <div class="title">{{ ucwords($desa->sebutan_desa) . ' ' . $desa->nama }}</div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover dataTable" id="datadesa-table">
                                <thead>
                                    <tr>
                                        <th>Kode Desa</th>
                                        <th>Nama Desa</th>
                                        <th>Website</th>
                                        <th>Luas Wilayah (km<sup>2</sup>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $desa->desa_id }}</td>
                                        <td>{{ $desa->nama }}</td>
                                        <td><a href="{{ $desa->website }}" target="_blank">{{ $desa->website }}</a></td>
                                        <td>
                                            @if ($desa->luas_wilayah)
                                            {{ $desa->luas_wilayah }} Km<sup>2</sup>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
