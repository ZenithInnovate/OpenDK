@if (Route::currentRouteName() === 'beranda' && $slides->count() > 0)
    <!-- Slider -->
    <div id="swiper-slider" class="swiper">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div class="swiper-slide">
                    <div class="slider-class">
                        <div class="legend"></div>
                        <div class="content-slide">
                            <div class="content-txt">
                                <h1>{{ $slide->judul }}</h1>
                                <h2>{{ $slide->deskripsi }}</h2>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ Str::contains($slide->gambar, 'storage') ? asset($slide->gambar) : $slide->gambar }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="dk-line"></div>
@endif

@push('scripts')
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.my-swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.my-swiper-pagination',
            },
            navigation: {
                nextEl: '.my-swiper-button-next',
                prevEl: '.my-swiper-button-prev',
            },
        });
    </script>
@endpush
