@push('styles')
<style>
    * {
        box-sizing: border-box;
    }

    /* Slideshow container */
    .slideshow-container {
        width: 100%;
        position: relative;
        margin: auto;
        display: flex;
        /* Menggunakan Flexbox untuk mengatur konten */
        align-items: center;
        /* Center konten secara vertikal */
        justify-content: center;
        /* Center konten secara horizontal */
        overflow: hidden;
        /* Menghindari gambar melebihi container */
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
        position: relative;
        width: 100%;
        /* Pastikan container menggunakan lebar penuh */
        height: auto;
        /* Atur tinggi otomatis untuk konten */
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        z-index: 1;
        /* Pastikan tombol berada di atas gambar */
    }

    /* Position the "prev button" to the left */
    .prev {
        left: 0;
        border-radius: 3px 0 0 3px;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Remove the dots/bullets/indicators */
    .dot {
        display: none;
        /* Hide dots */
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 10s;
        /* Set animation duration to 10 seconds */
        animation-timing-function: ease-in-out;
        /* Smooth transition */
        animation-iteration-count: infinite;
        /* Loop infinitely */
    }

    @keyframes fade {
        from {
            opacity: 0.7;
        }

        to {
            opacity: 1;
        }
    }

    /* Atur gambar di dalam slideshow */
    .mySlides img {
        max-height: 500px;
        /* Maksimum tinggi gambar */
        width: 100%;
        /* Ukuran lebar 100% */
        object-fit: cover;
        /* Crop gambar jika lebih tinggi dari max-height */
        display: block;
        /* Pastikan gambar memanfaatkan lebar container */
    }
</style>
@endpush

<!-- ======= Slider Section ======= -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    @foreach ($slides as $key => $slide)
    <div class="mySlides fade">
        <div class="numbertext">{{ $key + 1 }} / {{ count($slides) }}</div>
        <img src="{{ Str::contains($slide->gambar, 'storage') ? asset($slide->gambar) : $slide->gambar }}">
    </div>
    @endforeach

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

@push('scripts')
<script>
    let slideIndex = 1; // Mulai dengan slide pertama
    showSlides(slideIndex); // Tampilkan slide pertama

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) { slideIndex = 1 } // Kembali ke slide pertama jika melebihi jumlah slide
        if (n < 1) { slideIndex = slides.length } // Kembali ke slide terakhir jika kurang dari 1
        for (i = 0; i < slides.length; i++) { 
            slides[i].style.display = "none"; 
        }
        slides[slideIndex - 1].style.display = "block";
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Mengatur perubahan slide otomatis
    function autoSlide() {
        showSlides(slideIndex += 1);
        setTimeout(autoSlide, 10000); // Ubah slide setiap 10 detik
    }

    autoSlide(); // Memulai otomatis slideshow
</script>
@endpush