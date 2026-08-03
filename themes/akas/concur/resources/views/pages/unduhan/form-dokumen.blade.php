@extends('layouts.app')
@section('title', 'Data Dokumen')

@include('components.datatable')

@push('styles')
    {{-- button yang ada dalam tabel berikan margin antar button --}}
    <style>
        .btn-group > a {
            margin: 5px;
        }
    </style>
@endpush

@section('content')
@include('layouts.breadcrumbs', ['title' => 'Data Dokumen'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">Data Dokumen</div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dokumen-table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%" class="text-center">No</th>
                                        <th>Judul Prosedur</th>
                                        <th style="width: 1%" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
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

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var tabelData = $('#dokumen-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{!! route('unduhan.form-dokumen.getdata') !!}",
            columns: [
                {
                    data: null,
                    name: 'no',
                    className: 'text-center',
                    searchable: false,
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama_dokumen',
                    name: 'nama_dokumen'
                },
                {
                    data: 'aksi',
                    name: 'aksi',
                    className: 'text-center',
                    searchable: false,
                    orderable: false
                }
            ],
            order: [
                [1, 'asc']
            ]
        });
    });
</script>
@endpush