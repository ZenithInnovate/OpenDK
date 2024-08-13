<div id="sinergi" class="sinergi">
    <div class="container">
        <div class="section-title">
            <h2>Sinergi Program</h2>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="owl-carousel sinergi-carousel" data-aos="fade-up" data-aos-delay="100">
            @foreach ($sinergi as $value)
                <div class="sinergi-logo">
                    <a href="{{ $value->url }}" target="_blank">
                        <img src="{{ asset($value->gambar) }}" class="img-fluid" alt="" data-aos="flip-right">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>