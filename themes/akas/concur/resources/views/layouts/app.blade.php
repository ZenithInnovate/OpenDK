@php

$theme_config = [
'tentang_kecamatan' => "Kecamatan " . $profil->nama_kecamatan . " merupakan kecamatan yang memberi pelayanan publik
secara cepat dan efisien. Dengan mengedepankan pelayanan dan pengolahan data berbasis IT, diharapkan dapat berkembang
menjadi yang lebih maju dalam berbagai aspek, baik itu SDM, Kesehatan, Kesejahteraan, dan Ekonomi. Dengan Portal
Kecamatan Digital, semua pelayanan menjadi lebih baik.",
];

@endphp

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" class="notranslate" translate="no">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google" content="notranslate">
    <title>{{ $page_title ?? config('app.name', 'Laravel') }} | {{ $browser_title }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="description" content="{{ $page_description ?? '' }}.">
    <link rel="canonical" href="{{ Request::url() }}">
    <meta itemprop="name" content="{{ $page_title ?? '' }}">
    <meta itemprop="description" content="{{ $page_description ?? '' }}.">
    <meta itemprop="image" content="{{ is_img($page_image ?? '') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="{{ \URL::to('') }}">
    <meta property="og:title" content="{{ $page_title ?? '' }}">
    <meta property="og:description" content="{{ $page_description ?? '' }}. ">
    <meta property="og:image" content="{{ is_img($page_image ?? '') }}?auto=format&amp;fit=max&amp;w=1200">
    <meta property="og:image:alt" content="{{ is_img($page_image ?? '') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page_title ?? '' }}">
    <meta name="twitter:description" content="{{ $page_description ?? '' }}. ">
    <meta name="twitter:image" content="{{ is_img($page_image ?? '') }}?auto=format&amp;fit=max&amp;w=1200">
    <link rel="alternate" href="/feed.xml" type="application/atom+xml" data-title="{{ Request::url() }}">
    
    <link rel="shortcut icon" type="image/png" href="{{ is_logo($profil->file_logo) }}" />
    <link rel="mask-icon" href="{{ is_logo($profil->file_logo) }}" color="#5bbad5">
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Quicksand:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Social Media Button -->
    <link rel="stylesheet" href="{{ theme_asset('bootstrap/css/bootstrap-social.css') }}" />

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ theme_asset('bootstrap/css/select2.min.css') }}" />

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{ theme_asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ theme_asset('bootstrap/css/ionicons.min.css') }}" />

    <!-- Quicksand Google Fonts -->
    <link rel="stylesheet" href="{{ theme_asset('css/font.css') }}" />

    <!-- Bootstrap Date time Picker -->
    <link rel="stylesheet" href="{{ theme_asset('bootstrap/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Bootstrap Date Picker -->
    <link rel="stylesheet" href="{{ theme_asset('bootstrap/css/bootstrap-datepicker.min.css') }}">

    <link rel="stylesheet" href="{{ theme_asset('lib/css/surat.css') }}">

    <!-- Vendor CSS Files -->
    <link href="{{ theme_asset('lib/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/bootstrap/css/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ theme_asset('lib/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/boxicons/css/boxicons.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/fontawesome/css/regular.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('lib/vendor/fontawesome/css/solid.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ theme_asset('css/leaflet.css') }}" />
    <link rel="stylesheet" href="{{ theme_asset('css/leaflet.pm.css') }}" />

    <!-- Template Main CSS File -->
    <link href="{{ theme_asset('lib/css/style.css') }}" rel="stylesheet">

    <script src="{{ theme_asset('lib/vendor/jquery/jquery.min.js') }}"></script>

    <!-- CSS -->
    <style type="text/css">
        img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px; /* Sesuaikan padding sesuai kebutuhan */
        }
        
        .img-circle {
        max-width: 100%;
        height: auto;
        border-radius: 50%; /* Untuk membuat gambar menjadi lingkaran */
        }
    </style>

    @stack('styles')
    @stack('css')
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="d-flex align-items-center top-menu">

            <!-- <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


            @include('layouts.menu')

            @include('layouts.pintasan')
        </div>
    </header><!-- End Header -->

    <div class="d-flex align-items-center logo-header">
        <div class="desa-logo mr-auto">
            <a href="{{ route('beranda') }}">
                <img class="img-fluid" src="{{ is_logo($profil->file_logo) }}" alt="Logo Kecamatan" width="100">
                <span class="text-logo"><span class="desa">{!! strtoupper($sebutan_wilayah . ' </span>' . $profil->nama_kecamatan . '</span>') !!}</span>
            </a>
        </div>

        @include('layouts.media-sosial')
    </div>

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Hubungi Kami</h4>
                        <p>
                            {{ $profil->nama_kecamatan }}<br>
                            {{ $profil->alamat }}<br>
                            {{ $profil->kabupaten }}<br>
                            {{ $profil->provinsi }}<br>
                            <br>
                            <strong>Telepon :</strong> {{ $profil->telepon }}<br>
                            <strong>Email :</strong> {{ $profil->email }}<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4><a href="{{ url('berita-kecamatan') }}">Berita Terbaru</a></h4>
                        <ul>
                            @foreach(\App\Models\Artikel::latest()->limit(5)->get() as $berita)
                            <li>
                                <i class="bi bi-check"></i>
                                <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}">{{ $berita->judul }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4><a href="{{ url('unduhan/form-dokumen') }}">Dokumen Publik</a></h4>
                        <ul>
                            @foreach(\App\Models\FormDokumen::latest()->limit(5)->get() as $dokumen)
                            <li><i class="bi bi-arrow-down-short"></i> <a href="{{ asset($dokumen->file_dokumen) }}" target="_blank" rel="noopener noreferrer">{{ $dokumen->nama_dokumen }}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Tentang {{ $profil->nama_kecamatan }}</h4>
                        <div class="about-desa">{{ $theme_config['tentang_kecamatan'] }}</div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Untuk menampilkan modal -->
        <div class="modal fade" id="modalBox" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <div class="row">
                            <div class="col-md-11">
                                <div class='modal-title' id='myModalLabel'> Pengaturan Pengguna</div>
                            </div>
                            <div class="col-md-1">
                                <button type='button' class='close' data-dismiss='modal'
                                    aria-hidden='true'>&times;</button>
                            </div>
                        </div>
                    </div>
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    <strong>Hak Cipta &copy; 2017 <a href="http://www.kompak.or.id" target="_blank">KOMPAK</a>, 2018-{{ date('Y') }} <a
                            href="http://opendesa.id" target="_blank">OpenDesa</a></strong> Hak cipta dilindungi.
                </div>
            </div>
            <div class="text-center text-md-right pt-3 pt-md-0">
                @foreach($medsos as $value)
                <a href="{{ $value->link }}" target="_blank">
                    <img src="{{ is_img($value->logo) }}" alt="{{ $value->nama }}" class="img-fluid img-responsive img-sosmed"
                        width="30px" height="30px" style="border-radius: 5px;">
                </a>
                @endforeach
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- OpenStreetMap Js-->
    <script src="{{ theme_asset('js/leaflet.js') }}"></script>
    <script src="{{ theme_asset('js/turf.min.js') }}"></script>
    <script src="{{ theme_asset('js/leaflet.pm.min.js') }}"></script>

    <!-- Axios -->
    <script src="{{ theme_asset('js/axios.min.js') }}"></script>

    <!-- Moment -->
    <script src="{{ theme_asset('bootstrap/js/moment.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ theme_asset('bootstrap/js/select2.full.min.js') }}"></script>

    <!-- Bootstrap Date time picker -->
    <script src="{{ theme_asset('bootstrap/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ theme_asset('bootstrap/js/id.js') }}"></script>

    <!-- Bootstrap Date picker -->
    <script src="{{ theme_asset('bootstrap/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ theme_asset('bootstrap/js/bootstrap-datepicker.id.min.js') }}"></script>

    <!-- Validasi Js -->
    <script src="{{ theme_asset('js/validasi.js') }}"></script>
    <script src="{{ theme_asset('js/jquery.validate.min.js') }}"></script>

    <script src="{{ theme_asset('lib/js/script.js') }}"></script>


    <!-- Vendor JS Files -->
    <script src="{{ theme_asset('lib/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ theme_asset('lib/vendor/jquery.easing/jquery.easing.min.js') }}">
    </script>
    <script src="{{ theme_asset('lib/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ theme_asset('lib/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ theme_asset('lib/vendor/isotope-layout/isotope.pkgd.min.js') }}">
    </script>
    <script src="{{ theme_asset('lib/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ theme_asset('lib/vendor/waypoints/jquery.waypoints.min.js') }}">
    </script>
    <script src="{{ theme_asset('lib/vendor/owl.carousel/owl.carousel.min.js') }}">
    </script>
    <script src="{{ theme_asset('lib/vendor/aos/aos.js') }}"></script>
    <script src="{{ theme_asset('lib/vendor/fontawesome//js/all.js') }}"></script>

    <!-- OpenStreetMap Js-->
    <script src="{{ theme_asset('js/leaflet.js') }}"></script>
    <script src="{{ theme_asset('js/turf.min.js') }}"></script>
    <script src="{{ theme_asset('js/leaflet.pm.min.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ theme_asset('lib/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>