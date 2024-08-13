@push('styles')
<style type="text/css">
    .pengurus-logo img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
    }

    .pengurus-name {
        margin-top: 10px;
        font-weight: bold;
        font-size: 16px;
        color: #333;
    }

    .pengurus-title {
        display: inline-block;
        background-color: #5cb85c;
        /* Label success color */
        color: white;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
@endpush

<div class="widget bg-white p-a20 recent-posts-entry">
    <div class="title style-1">Pengurus</div>
    <div class="swiper-container pengurus-swiper">
        <div class="swiper-wrapper">
            @foreach ($pengurus as $item)
            <div class="swiper-slide">
                <div class="text-center pb-3">
                    <a href="{{ $item->url }}" target="_blank">
                        <img src="{{ is_user($item->foto, $item->sex, true) }}" class="img-fluid" data-aos="flip-right"
                            style="max-height: 500px;">
                    </a>
                    <div class="pengurus-name">
                        <h6>{{ $item->namaGelar }}</h6>
                        <div class="pengurus-title">{{ $item->jabatan->nama }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var pengurusSwiper = new Swiper('.pengurus-swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    });
</script>
@endpush