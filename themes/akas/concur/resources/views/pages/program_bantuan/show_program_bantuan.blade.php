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
                                        <label for="bulan" class="col-sm-4 control-label">Desa</label>
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
                    </div>

                    <div class="dinamic-single">
                        <div id="chart_bantuan_penduduk" style="width: 100%; height: 500px; overflow: hidden; text-align: left;"></div>
                    </div>

                    <div class="dinamic-single">
                        <div id="chart_bantuan_keluarga" style="width: 100%; height: 500px; overflow: hidden; text-align: left;"></div>
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
@push('scripts')
<script>
    $(document).ready(function() {
            $('.select2').select2();
        });

        $(function() {
            $('#list_desa').select2();
            $('#list_year').select2();
    
                // Change Dashboard when Lsit Desa changed
            $('#list_desa').on('select2:select', function(e) {
                var did = e.params.data;
                var year = $('#list_year').find(":selected").text();

                change_das_bantuan(did.id, year);
            });

            // Change Dashboard when List Year changed
            $('#list_year').on('select2:select', function(e) {
                var did = $('#list_desa').find(":selected").val();
                var year = this.value;
                change_das_bantuan(did, year);
            });


            /*
             * Initial Dashboard
             */
            var did = $('#list_desa').find(":selected").val();
            var year = $('#list_year').find(":selected").text();

            change_das_bantuan(did, year);
            /*
             * End Initial Dashboard
             */
        });

        function change_das_bantuan(did, year) {
            $.ajax({
                url: '{!! route('statistik.program-bantuan.chart-penduduk') !!}',
                method: 'GET', // Atau 'POST' tergantung kebutuhan
                data: {
                    did: did,
                    y: year
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika menggunakan POST dan Laravel
                }
            }).done(function(data) {
                create_chart_bantuan_penduduk(data);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log('Error: ' + errorThrown);
            });

            $.ajax({
                url: '{!! route('statistik.program-bantuan.chart-keluarga') !!}',
                method: 'GET', // Atau 'POST' tergantung kebutuhan
                data: {
                    did: did,
                    y: year
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika menggunakan POST dan Laravel
                }
            }).done(function(data) {
                create_chart_bantuan_keluarga(data);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log('Error: ' + errorThrown);
            });
        }

        function create_chart_bantuan_penduduk(data) {
            var chart_bantuan_penduduk = AmCharts.makeChart("chart_bantuan_penduduk", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": data,
                "valueField": "value",
                "titleField": "program",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Peserta Program Bantuan Penduduk/Perorangan",
                },
                "allLabels": [{
                    "text": "Peserta Program Bantuan Penduduk/Perorangan",
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
                    "precision": -1,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });
        }

        function create_chart_bantuan_keluarga(data) {
            var chart_bantuan_keluarga = AmCharts.makeChart("chart_bantuan_keluarga", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": data,
                "valueField": "value",
                "titleField": "program",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Peserta Program Bantuan Keluarga/KK",
                },
                "allLabels": [{
                    "text": "Peserta Program Bantuan Keluarga/KK",
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
                    "precision": -1,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });
        }
    </script>
@endpush
