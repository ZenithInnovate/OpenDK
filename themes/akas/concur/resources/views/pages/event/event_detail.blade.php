@extends('layouts.app   ')
@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-body">
                <h4> {{ $event->event_name }}</h4>
                <p> <i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d M Y H:i:s', strtotime($event->start)) }} - {{ date('d M Y H:i:s', strtotime($event->end)) }}</p>
                <p>{!! $event->description !!}</p>
                <p>Yang Akan Hadir : {{ $event->attendants }}</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Artikel')

@section('content')

@include('layouts.breadcrumbs', ['title' => $event->event_name])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">

                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <!-- Post Content -->
                        <div class="title">{{ $event->event_name }}</div>
                        <div class="meta">
                            <ul>
                                <li class="d-flex align-items-center author"><i class="bi bi-person"></i>{{
                                    $event->created_by->nama ?? 'Administrator' }}</li>
                                <li class="d-flex align-items-center date"><i class="bi bi-alarm"></i><time
                                        datetime="2020-01-01">{{ $event->created_at->format('d F Y') }}</time></li>
                                <li class="d-flex align-items-center"><i class="bi bi-folder"></i><a
                                        href="{{ url('berita') }}">Berita Kecamatan</a></li>
                                {{-- <li class="d-flex align-items-center hit"><i class="bi bi-award"></i>Dibaca 258
                                    Kali</li> --}}
                            </ul>
                        </div>

                        <div class="entry-img">
                            <a href="https://demo.smartdesadigital.id/desa/upload/event/sedang_"
                                data-gall="portfolioGallery" class="img-fluid venobox preview-link vbox-item"
                                title="Absensi Perangkat Desa Berbasis Android">
                            </a>
                        </div>

                        <!-- Data Agenda -->

                        <!-- Data Pembangunan -->

                        <!-- Data Potensi -->

                        <div class="entry-content">
                            <img src="{{ is_img($event->gambar) }}" alt="{{ $event->slug }}" class="img-fluid">
                            <p>{!! $event->isi !!}</p>
                        </div>

                    </div><!-- End blog entry -->


                    <!-- End blog author bio -->
                </div>
            </div>
            <!-- End page content -->

            {{-- Widget --}}
            @include('layouts.widget')
        </div>
    </div>
</div>
@endsection
