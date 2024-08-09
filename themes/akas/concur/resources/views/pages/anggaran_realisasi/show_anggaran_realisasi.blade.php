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
                                <div class="col-md-4 col-lg-4 col-sm-12">
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
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="tahun" class="col-sm-4 control-label">Tahun</label>
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

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon" id="total_belanja_persen" style="font-size: 30px;">0%</span>
                        
                                    <div class="info-box-content">
                        
                                        <span class="info-box-number" id="total_belanja">Rp 0</span>
                        
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 0%" id="total_belanja_persen_bar"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>TOTAL BELANJA</b>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box bg-purple">
                                    <span class="info-box-icon" id="selisih_anggaran_realisasi_persen" style="font-size: 30px;">0%</span>
                        
                                    <div class="info-box-content">
                        
                                        <span class="info-box-number" id="selisih_anggaran_realisasi">Rp 0</span>
                        
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 0%" id="selisih_anggaran_realisasi_persen_bar"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>
                                                <font size="3">SELISIH ANGGARAN DAN REALISASI</font>
                                            </b>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box bg-aqua">
                                    <span class="info-box-icon" id="belanja_pegawai_persen" style="font-size: 30px;">0%</span>
                
                                    <div class="info-box-content">
                
                                        <span class="info-box-number" id="belanja_pegawai">Rp 0</span>
                
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 0%" id="belanja_pegawai_persen_bar"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>
                                                <font size="2">BELANJA PEGAWAI</font>
                                            </b>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box bg-green">
                                    <span class="info-box-icon" id="belanja_barang_jasa_persen" style="font-size: 30px;">0%</span>
                
                                    <div class="info-box-content">
                                        <span class="info-box-number" id="belanja_barang_jasa">Rp 0</span>
                
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 0%" id="belanja_barang_jasa_persen_bar"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>
                                                <font size="1">BELANJA BARANG DAN JASA</font>
                                            </b>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box bg-yellow">
                                    <span class="info-box-icon" id="belanja_modal_persen" style="font-size: 30px;">0%</span>
                
                                    <div class="info-box-content">
                                        <span class="info-box-number" id="belanja_modal">Rp. 0</span>
                
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 0%" id="belanja_modal_persen_bar"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>
                                                <font size="2">BELANJA MODAL</font>
                                            </b>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box bg-red">
                                    <span class="info-box-icon" id="belanja_tidak_langsung_persen" style="font-size: 30px;">0%</span>
                
                                    <div class="info-box-content">
                                        <span class="info-box-number" id="belanja_tidak_langsung">Rp. 0</span>
                
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 0%" id="belanja_tidak_langsung_persen_bar"></div>
                                        </div>
                                        <span class="progress-description">
                                            <b>
                                                <font size="2">BELANJA TIDAK LANGSUNG</font>
                                            </b>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>

                    <div class="dinamic-single">
                        <div id="chartdiv" style="width: 100%; height: 500px; overflow: hidden; text-align: left;"></div>
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

@include('components.asset_amcharts')
@include('partials.asset_numeraljs')
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

        $(function() {
    
                // Select 2 Kecamatan
                $('#list_months').select2();
                $('#list_year').select2();
    
                var mid = $('#list_months').find(":selected").val();
                var year = $('#list_year').find(":selected").val();
    
                /*
                 Initial Chart Dashboard Pendidikan
                 */
                change_das_anggaran(mid, year);
                /*
                 End Initial
                 */
    
    
                // Change div das_kependudukan when Kecamatan changed
                $('#list_months').on('select2:select', function(e) {
                    var mid = $('#list_months').find(":selected").val();
                    var year = $('#list_year').find(":selected").val();
                    change_das_anggaran(mid, year);
    
                });
    
                $('#list_year').on('select2:select', function(e) {
                    var mid = $('#list_months').find(":selected").val();
                    var year = $('#list_year').find(":selected").val();
    
                    change_das_anggaran(mid, year);
                });
            });
    
            function change_das_anggaran(mid, year) {
                $.ajax({
                    url: '{!! route('statistik.chart-anggaran-realisasi') !!}',
                    method: 'GET', // Atau 'POST' tergantung kebutuhan
                    data: {
                        mid: mid,
                        y: year
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika menggunakan POST dan Laravel
                    }
                }).done(function(data) {                    
                    $('#total_belanja').html('Rp ' + numeral(data.sum.total_belanja).format());
                    $('#total_belanja_persen').html(numeral(data.sum.total_belanja_persen).format() + '%');
                    $('#total_belanja_persen_bar').css('width', data.sum.total_belanja_persen + '%');
                    
                    $('#selisih_anggaran_realisasi').html('Rp ' + numeral(data.sum.selisih_anggaran_realisasi).format());
                    $('#selisih_anggaran_realisasiPersen').html(numeral(data.sum.selisih_anggaran_realisasi_persen).format() + '%');
                    $('#selisih_anggaran_realisasiPersen_bar').css('width', data.sum.selisih_anggaran_realisasi_persen + '%');
                    
                    $('#belanja_pegawai').html('Rp ' + numeral(data.sum.belanja_pegawai).format());
                    $('#belanja_pegawai_persen').html(numeral(data.sum.belanja_pegawai_persen).format() + '%');
                    $('#belanja_pegawai_persen_bar').css('width', data.sum.belanja_pegawai_persen + '%');
                    
                    $('#belanja_barang_jasa').html('Rp ' + numeral(data.sum.belanja_barang_jasa).format());
                    $('#belanja_barang_jasa_persen').html(numeral(data.sum.belanja_barang_jasa_persen).format() + '%');
                    $('#belanja_barang_jasa_persen_bar').css('width', data.sum.belanja_barang_jasa_persen_bar + '%');
                    
                    $('#belanja_modal').html('Rp ' + numeral(data.sum.belanja_modal).format());
                    $('#belanja_modal_persen').html(numeral(data.sum.belanja_modal_persen).format() + '%');
                    $('#belanja_modal_persen_bar').css('width', data.sum.belanja_modal_persen_bar + '%');
                    
                    $('#belanja_tidak_langsung').html('Rp ' + numeral(data.sum.belanja_tidak_langsung).format());
                    $('#belanja_tidak_langsung_persen').html(numeral(data.sum.belanja_tidak_langsung_persen).format() + '%');
                    $('#belanja_tidak_langsung_persen_bar').css('width', data.sum.belanja_tidak_langsung_persen_bar + '%');
                    
                    
                    create_chart_anggaran(data.chart);
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    console.error('Request failed: ' + textStatus);
                });    
            }
    
    
            function create_chart_anggaran(data) {
                /**
                 * Define data for each year
                 */
                var chartData = data;
    
                /**
                 * Create the chart
                 */
                var chart = AmCharts.makeChart("chartdiv", {
                    "hideCredits": true,
                    "type": "pie",
                    "theme": "light",
                    "dataProvider": chartData,
                    "valueField": "value",
                    "titleField": "anggaran",
                    "outlineAlpha": 0.4,
                    "depth3D": 15,
                    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "angle": 30,
                    "export": {
                        "enabled": true,
                        "pageOrigin": false,
                        "fileName": "Persentase Anggaran Kecamatan",
                    },
                    "allLabels": [{
                        "text": "Persentase Anggaran Kecamatan",
                        "align": "center",
                        "bold": true,
                        "size": 20,
                        "y": -4
                    }],
                    "legend": {
                        "position": "bottom",
                        "marginRight": 20,
                        "autoMargins": false,
                        "valueWidth": 120
                    },
                    "marginTop": 50,
                    "numberFormatter": {
                        "precision": 2,
                        "decimalSeparator": ",",
                        "thousandsSeparator": "."
                    }
                });
            }
    </script>
@endpush