@extends('layouts.app')
@section('title', $page_description)

@push('styles')
<style type="text/css">
    .box-header {
        padding: 10px;
        margin-bottom: -5px;
        border-radius: 5px;
    }

    .form-horizontal .form-group {
        margin-bottom: -5px;
    }

    .form-horizontal .form-group label {
        padding-top: 5px;
    }
</style>
@endpush

@section('content')
@include('layouts.breadcrumbs', ['title' => $page_description])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">{{ 'Presentase ' . $page_title }}</div>
                        <div class="box-header">
                            <form class="form-horizontal">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bulan" class="col-sm-4 control-label">Bulan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="list_months" name="m">
                                                <option value="Semua">Semua</option>
                                                @foreach (months_list() as $key => $month)
                                                <option value="{{ $key }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="list_year" class="col-sm-4 control-label">Tahun</label>
                            
                                        <div class="col-sm-8">
                                            <select class="form-control" id="list_year">
                                                <option value="Semua">Semua</option>
                                                @foreach ($year_list as $year)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div id="chartdiv" style="width: 100%; height: 400px; overflow: hidden; text-align: left;">
                        </div>
                    </div>
                </div>

                <div class="page-content" id="detail_anggaran">
                </div>
            </div>
            <!-- End page content -->

            {{-- Widget --}}
            @include('layouts.widget')
        </div>
    </div>
</div>
@endsection

@include('components.asset_amcharts')
@push('scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endpush