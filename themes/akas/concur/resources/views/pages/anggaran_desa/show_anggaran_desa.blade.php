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
                                            <label for="list_desa" class="col-sm-4 control-label">Desa</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" id="profil_id" value="{{ $profil->id }}">
                                                <select class="form-control" id="list_desa">
                                                    <option value="Semua">Semua Desa</option>
                                                    @foreach ($list_desa as $desa)
                                                    <option value="{{ $desa->desa_id }}">{{ $desa->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
            $('.select2').select2();
        });

        $(function() {
            // Select 2 Kecamatan
            $('#list_desa').select2();
            $('#list_months').select2();
            $('#list_year').select2();


            var did = $('#list_desa').find(":selected").val();
            var mid = $('#list_months').find(":selected").val();
            var year = $('#list_year').find(":selected").val();

            /*
             * Initial Chart Dashboard Pendidikan
             */
            das_chart_anggaran(mid, did, year);
            /*
             * End Initial
             */


            $('#list_desa').on('select2:select', function(e) {
                var did = $('#list_desa').find(":selected").val();
                var mid = $('#list_months').find(":selected").val();
                var year = $('#list_year').find(":selected").val();
                das_chart_anggaran(mid, did, year);
            });

            $('#list_months').on('select2:select', function(e) {
                var did = $('#list_desa').find(":selected").val();
                var mid = $('#list_months').find(":selected").val();
                var year = $('#list_year').find(":selected").val();
                das_chart_anggaran(mid, did, year);
            });

            $('#list_year').on('select2:select', function(e) {
                var did = $('#list_desa').find(":selected").val();
                var mid = $('#list_months').find(":selected").val();
                var year = $('#list_year').find(":selected").val();
                das_chart_anggaran(mid, did, year);
            });
        });

        function das_chart_anggaran(mid, did, year) {

            $.ajax({
                url: '{!! route('statistik.chart-anggaran-desa') !!}',
                method: 'GET', // Atau 'POST' tergantung kebutuhan
                data: {
                    mid: mid,
                    did: did,
                    y: year
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika menggunakan POST dan Laravel
                }
            }).done(function(data) {
                create_chart_anggaran(data.grafik);
                $('#detail_anggaran').html(data.detail);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error('Request failed: ' + textStatus);
            });
        }


        function create_chart_anggaran(data) {
            var chart = AmCharts.makeChart("chartdiv", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": data,
                "valueField": "jumlah",
                "titleField": "anggaran",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Persentase Anggaran Desa (APBDes)",
                },
                "allLabels": [{
                    "text": "Persentase Anggaran Desa (APBDes)",
                    "align": "center",
                    "bold": true,
                    "size": 20,
                    "y": 10
                }],
                /*"legend": {
                    "generateFromData": true //custom property for the plugin
                },*/
                "legend": {
                    "position": "bottom",
                    "marginRight": 20,
                    "marginLeft": 100,
                    "autoMargins": true,
                    "valueWidth": 90
                },
                "marginTop": 50,
                "numberFormatter": {
                    "precision": -1,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });

            chart.addListener("init", handleInit);

            chart.addListener("rollOverSlice", function(e) {
                handleRollOver(e);
            });

            function handleInit() {
                chart.legend.addListener("rollOverItem", handleRollOver);
            }

            function handleRollOver(e) {
                var wedge = e.dataItem.wedge.node;
                wedge.parentNode.appendChild(wedge);
            }
        }
    </script>
@endpush