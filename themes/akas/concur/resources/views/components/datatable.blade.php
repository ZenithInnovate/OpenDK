@push('styles')
    {{-- CSS DataTable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.min.css">
@endpush

@push('scripts')
    {{-- JS DataTable --}}
    <script src="https://cdn.datatables.net/2.1.0/js/dataTables.min.js"></script>
    <script>
        $.extend($.fn.dataTable.defaults, {
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "Semua"]
                ],
                pageLength: 10,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/2.1.0/i18n/id.json",
                }
            });
    </script>
@endpush