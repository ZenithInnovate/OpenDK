<section id="short-stat" class="short-stat">
    <div class="container align-items-center" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="count-box">
                    <i class="bi bi-signpost-split" style="color: #bb0852;"></i>
                    <div>
                        <span data-toggle="counter-up">{{ \App\Models\DataDesa::count() }}</span>
                        <p>Desa/Keluarahan </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="count-box">
                    <i class="bi bi-person"></i>
                    <div>
                        <span data-toggle="counter-up">{{ \App\Models\Penduduk::count() }}</span>
                        <p>Penduduk</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="count-box">
                    <i class="bi bi-people" style="color: #ee6c20;"></i>
                    <div>
                        <span data-toggle="counter-up">{{ \App\Models\Keluarga::count() }}</span>
                        <p>Keluarga</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="count-box">
                    <i class="bi bi-house-fill" style="color: #15be56;"></i>
                    <div>
                        <span data-toggle="counter-up">{{ \App\Models\Suplemen::count() }}</span>
                        <p>Suplemen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>