<section id="featured-services" class="featured-services section-bg">
    <div class="container">
        <div class="section-title">
            <a href="{{ url('berita') }}" style="color: black;">
                <h2>Artikel Kecamatan</h2>
            </a>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="owl-carousel index-content-carousel">
            @foreach(\App\Models\Artikel::where('status', 1)->latest()->limit(5)->get() as $value)
            <div class="icon-box">
                <div class="gambar-index">
                    <a href="{{ url('berita/'.$value->slug) }}">
                        <img src="{{ is_img($value->gambar) }}" class="img-fluid img-responsive img-article-list" alt="{{ $value->judul }}" style="width: 100%; height: 200px;">
                    </a>
                </div>
                <div class="meta-info">
                    <div class="row">
                        <div class="col-6 align-items-stretch bg-success">
                            <div class="date-info">{{ $value->created_at->format('d M Y') }}</div>
                        </div>
                        <div class="col-6 align-items-stretch bg-warning">
                            <div class="cat-info">Administrator</div>
                        </div>
                    </div>
                </div>
                <h4 class="title">
                    <b><a href="{{ url('berita/'.$value->slug) }}">{{ $value->judul }}</a></b>
                </h4>
                <p class="description">{!! __html(Str::limit($value->isi, 150)) !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>