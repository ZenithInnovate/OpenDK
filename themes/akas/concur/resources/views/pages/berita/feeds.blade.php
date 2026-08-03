<div id="feeds">
    @forelse ($feeds as $item)
    <div class="item-arsip">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{ $item['link'] }}">
                    <img src="{{ $item['image'] }}" class="img-fluid img-article-list blog-images"
                        alt="{{ $item['title'] }}">
                </a>
            </div>
            <div class="col-sm-6">
                <div class="data-text">
                    <div class="meta">
                        <ul>
                            <li class="name">{{ $item['nama_desa'] }}</li>
                            <li class="date">{{ $item['date']->translatedFormat('d F Y') }}</li>
                        </ul>
                    </div>
                    <div class="title">
                        <a href="{{ $item['link'] }}">
                            {{ $item['title'] }} </a>
                    </div>
                    <div class="isi">
                        <p></p>
                        <p>{!! $item['description'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="callout callout-info">
        <p class="text-bold">Tidak ada berita kecamatan yang ditampilkan!</p>
    </div>
    @endforelse
    
    @if( $feeds->count() > 0 )
    <div style="text-align: center;">
        {{ $feeds->links('vendor.pagination.bootstrap-4') }}
    </div>
    @endif
</div>

@include('partials.asset_select2')

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var ajax_artikel = function() {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('filter-berita-desa') }}",
                    type: 'get',
                    dataType: 'json',
                    data: $("#form_filter").serialize(),
                    headers: {
                        'X-CSRF-TOKEN': csrf_token
                    },
                    success: function(data) {
                        $("#feeds").html(data.html);
                    },
                    error: function(jqXhr, textStatus, errorMessage) { // error callback 
                        $("#feeds").html('Error: ' + errorMessage);
                    }
                });
                event.preventDefault();
            }

            $('#list_desa').select2();
            $('#tanggal').select2();
            $("#list_desa").change(function() {
                $("#form_filter").submit();
            });
            $("#tanggal").change(function() {
                $("#form_filter").submit();
            });

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('input[name="page"]').val(page);
                ajax_artikel()
            });

            $(document).on('submit', '#form_filter', function(event) {
                ajax_artikel();
                event.preventDefault();
            })
        });
    </script>
@endpush
