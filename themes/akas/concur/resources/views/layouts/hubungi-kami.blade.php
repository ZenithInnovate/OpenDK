<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Hubungi Kami</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Alamat:</h4>
                        <p>{{ $profil->alamat }}</p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{ $profil->email }}</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Telepon:</h4>
                        <p>{{ $profil->telepon }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-3 mt-lg-0">


                <form action="https://demo.smartdesadigital.id/template_api/kontak_store?t=modern" method="post"
                    role="form" class="php-email-form">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap"
                            required oninvalid="this.setCustomValidity('Masukan nama lengkap anda')"
                            oninput="setCustomValidity('')" />
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 form-group">
                            <select name="hal" class="form-control select-perihal" id="hal" required
                                oninvalid="this.setCustomValidity('Pilih perihal pesan')"
                                oninput="setCustomValidity('')">
                                <option value=""> -- Pilih Perihal Pesan -- </option>
                                <option value="1">Keluhan</option>
                                <option value="2">Saran & Kritik</option>
                                <option value="3">Gangguna Keamanan</option>
                                <option value="4">Permohonan Informasi</option>
                            </select>
                        </div>

                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email"
                                required oninvalid="this.setCustomValidity('Masukan alamat email dengan benar')"
                                oninput="setCustomValidity('')" />
                        </div>

                        <div class="col-md-4 form-group">
                            <input type="number" class="form-control" name="no_hp" id="no_hp"
                                placeholder="Nomor Telepon" required
                                oninvalid="this.setCustomValidity('Masukan nomor telepon')"
                                oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Pesan"
                            required oninvalid="this.setCustomValidity('Masukan judul pesan')"
                            oninput="setCustomValidity('')" />
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="isi" rows="5" placeholder="Pesan" required
                            oninvalid="this.setCustomValidity('Masukan pesan anda')"
                            oninput="setCustomValidity('')"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9">
                            <img id="captcha" src="https://demo.smartdesadigital.id/securimage/securimage_show.php"
                                alt="CAPTCHA Image"
                                style="border: 1px solid #ccc; border-radius: 3px;margin-bottom:10px" />
                            <a href="#"
                                onclick="document.getElementById('captcha').src = 'https://demo.smartdesadigital.id/securimage/securimage_show.php?' + Math.random(); return false"><i
                                    class="bi bi-arrow-repeat"
                                    style="font-size:20px;padding: 10px; color: #0b7d33"></i></a>
                        </div>
                        <div class="col-md-3">
                            <input autocomplete="off" type="text" class="form-control" name="captcha_code" maxlength="6"
                                value="" placeholder="Tulis kode yg ada digambar" required />
                            <div class="text-right"><button type="submit" class="btn btn-primary btn-block">Kirim
                                    Pesan</button></div>
                        </div>
                    </div>

                    <div class="loading">Loading</div>
                    <div class="error-message"></div>

                </form>
            </div>
        </div>
    </div>
</section>