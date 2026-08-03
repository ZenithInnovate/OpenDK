<div id="perangkat" class="perangkat bg-darkblue">
    <div class="container align-items-center" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2>Perangkat Kecamatan</h2>
            </div>
        </div>

        <div class="owl-carousel perangkat-content-carousel">

            @foreach($perangkat_kecamatan as $perangkat)
            <div class="perangkat-box">
                <div class="perangkat-list">
                    <img src="{{ is_user($perangkat->foto, $perangkat->sex, true) }}" alt="{{ $perangkat->namaGelar }}" class="img-fluid gambar-perangkat" />

                    <div class="perangkat-info">
                        <div class="perangkat-badge"><i class="bi bi-award"></i></div>
                        <div class="nama"><b>{{ $perangkat->namaGelar }}</b></div>
                        <div class="jabatan">{{ $perangkat->jabatan->nama }}</div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>