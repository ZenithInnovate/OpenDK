@php $getFeeds = getFeeds(); @endphp

@if (count($getFeeds ?? []) > 0)
<div id="potensi" class="potensi bg-darkblue">
    <div class="container align-items-center" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <a href="{{ url('berita-desa') }}" style="color: white;">
                    <h2>Artikel Desa/kelurahan</h2>
                </a>
            </div>
        </div>

        <div class="owl-carousel potensi-content-carousel">
            @foreach(getFeeds() as $value)
                <div class="product-box">
                    <div class="product-list">
                        <a href="{{ $value->slug }}">
                            <img src="{{ is_img($value->image) }}"
                                class="img-fluid img-responsive img-article-list gambar-potensi"
                                alt="{{ $value->judul }}" style="max-height: 200px;">
                        </a>
                
                        <div class="product-info">
                            <div class="judul">
                                <a href="">{{ $value->title }}</a>
                            </div>
                            <div class="desc">{{ $value->nama_desa }},- {{ $value->description }}</div>
                            <div class="text-center">
                                <a href="{{ $value->link }}">
                                    <button class="btn btn-primary btn-rounded btn-product btn-block uppercase"
                                        type="button">Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif