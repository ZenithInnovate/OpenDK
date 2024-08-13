@if($camat)

@push('styles')
<style type="text/css">
    .camat-container {
        text-align: center;
        padding: 20px;
    }

    .camat-image {
        max-height: 256px;
        object-fit: contain;
        width: 250px;
    }

    .camat-name {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
    }

    .camat-title {
        font-size: 14px;
        color: #ecf0f5;
    }
</style>
@endpush

<div class="widget bg-white p-a20 recent-posts-entry">
    <div class="title style-1">{{ $sebutan_kepala_wilayah }} {{ $profil->nama_kecamatan }}</div>
    <div class="camat-container">
        <img src="@if (isset($camat->foto)) {{ asset($camat->foto) }} @else {{ asset('img/no-profile.png') }} @endif"
            class="img-fluid camat-image" data-aos="flip-right">
        <div class="camat-name">{{ $camat->namaGelar }}</div>
    </div>
</div>
@endif