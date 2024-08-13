@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style type="text/css">
        .swiper-container {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .sinergi-logo img {
            max-width: auto;
            max-height: 100px;
            width: auto;
            height: auto;
        }
        
        .widget.bg-white.p-a20.recent-posts-entry {
            max-width: 100%; /* Adjust as needed */
            overflow: hidden;
        }
    </style>
@endpush
<div class="widget bg-white p-a20 recent-posts-entry">
    <div class="title style-1">Sinergi Program</div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($sinergi as $value)
            <div class="swiper-slide">
                <div class="sinergi-logo text-center pb-3">
                    <a href="{{ $value->url }}" target="_blank">
                        <img src="{{ asset($value->gambar) }}" class="img-fluid" data-aos="flip-right">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
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