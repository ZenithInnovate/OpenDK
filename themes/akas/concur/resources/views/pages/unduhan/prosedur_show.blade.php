@extends('layouts.app')
@section('title', 'Data Prosedur')

@include('components.datatable')

@section('content')
@include('layouts.breadcrumbs', ['title' => 'Data Prosedur'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">Data Prosedur</div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="prosedur-table">
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
        var tabelData = $('#prosedur-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{!! route('unduhan.prosedur.getdata') !!}",
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
                    data: 'judul_prosedur',
                    name: 'judul_prosedur'
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