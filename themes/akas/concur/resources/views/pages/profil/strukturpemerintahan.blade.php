@extends('layouts.app')
@section('title', 'Sejarah')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'Sejarah'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">STRUKTUR PEMERINTAHAN {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</div>
                        <!-- The Modal -->
                        <div class="row">
                            <div class="img-container text-center">
                                <img id="myImg" style="width:100%;" src="{{ is_img($profil->file_struktur_organisasi) }}">
                            </div>
                            <!-- The Modal -->
                            @foreach ($pengurus as $item)
                            <div class="col-md-3 col-sm-6">
                                <div class="pad text-bold bg-white" style="text-align:center;">
                                    <img id="myImg" src="{{ is_user($item->foto, $item->sex, true) }}" width="auto" height="120px" class="img-user"
                                        style="object-fit: contain;">
                                </div>
                                <div class="box-header text-center  with-border bg-blue">
                                    <p class="box-title text-bold text-small" data-toggle="tooltip" data-placement="top" style="font-size: 12px;">
                                        {{ $item->namaGelar }} <br /> <span style="font-size: 10px;color: #ecf0f5;"> {{ $item->jabatan->nama }}
                                        </span></h6>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page content -->

            {{-- Widget --}}
            @include('layouts.widget')
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @include('forms.image-modal')
@endpush