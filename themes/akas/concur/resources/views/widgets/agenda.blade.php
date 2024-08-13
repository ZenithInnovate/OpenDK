@push('styles')
<style type="text/css">
    .custom-timeline {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .custom-timeline li {
        position: relative;
        padding: 10px 20px;
        border-bottom: 1px solid #ddd;
        display: flex;
        align-items: center;
    }

    .custom-timeline li:last-child {
        border-bottom: none;
    }

    .custom-timeline-item {
        margin-left: 80px;
        /* Menambah margin untuk ruang lebih luas di kiri */
        padding-left: 15px;
        border-left: 2px solid #ddd;
        position: relative;
    }

    .custom-timeline-header {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
    }

    .custom-timeline-item i {
        position: absolute;
        left: -80px;
        /* Menyesuaikan posisi agar ikon tidak tumpang tindih */
        top: 50%;
        transform: translateY(-50%);
        font-size: 48px;
        /* Ukuran ikon yang lebih besar */
        width: 60px;
        /* Lebar ikon */
        height: 60px;
        /* Tinggi ikon */
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000000;
        /* Warna latar belakang */
        border-radius: 50%;
        padding: 15px;
        /* Padding untuk memperbesar ikon lebih lanjut */
    }

    .custom-bg-maroon {
        background-color: #800000;
        /* Menggunakan warna maroon asli */
    }

    .custom-bg-gray {
        background-color: #6c757d;
    }

    .custom-text-dark {
        color: #141413;
    }

    .time-label {
        text-align: center;
        padding: 10px;
        border-radius: 5px;
    }
</style>
@endpush

<div class="widget bg-white p-a20 recent-posts-entry">
    <div class="title style-1">Agenda</div>
    <div class="widget-post-bx">
        <div id="container" class="widget-statistik_pengunjung">
            <ul class="custom-timeline">
                @if (count($events) > 0)
                @foreach ($events as $key => $event)
                @foreach ($event as $value)
                <li>
                    <div class="custom-timeline-item">
                        <h4 class="custom-timeline-header">
                            {{ link_to('event/' . $value->slug, strtoupper($value->event_name)) }}
                        </h4>
                        <small class="custom-text-dark">
                            <i class="bi bi-calendar-check"></i> {{ Carbon\Carbon::parse($value->start)->translatedFormat('d F
                            Y') }}
                        </small>
                    </div>
                </li>
                @endforeach
                @endforeach
                @else
                <li class="time-label">
                    <span class="custom-bg-gray">
                        Agenda tidak tersedia.
                    </span>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>