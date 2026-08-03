<div class="blog-comments">


    <div class="alert-section">
        <div class="alert alert-info">
            <div style="font-size:12px">
                Silakan tulis komentar dalam formulir berikut ini (Gunakan bahasa yang santun).
                Komentar akan
                ditampilkan setelah disetujui oleh Admin
            </div>
        </div>
    </div>


    <div class="reply-form">
        <h4>Berikan komentar</h4>
        <p>Alamat Email anda tidak akan ditampilkan. Wajib diisi untuk kolom * </p>
        <form action="#" method="POST"
            onsubmit="return validasi(this);">
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="owner" value="" placeholder="Nama Lengkap*"
                        required="">
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="no_hp" maxlength="30" value=""
                        placeholder="Nomor Handphone*" required="">
                </div>
                <div class="col-md-4 form-group">
                    <input type="email" class="form-control" name="email" value="" placeholder="Alamat Email*"
                        required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <textarea rows="4" name="komentar" class="form-control" placeholder="Tulis komentar disini*"
                        required=""></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-9 col-xs-7">
                    <img id="captcha" src="#"
                        alt="CAPTCHA Image"
                        style="max-width: 200px; max-height: 80px; border: 1px solid #ccc; border-radius: 3px;">
                    <a href="#"
                        onclick="document.getElementById('captcha').src = '#'"><i
                            class="icofont-refresh" style="font-size: 24px; padding: 10px; color: #0b7d33"></i></a>
                </div>
                <div class="form-group captcha_code col-md-3 col-xs-5">
                    <input autocomplete="off" type="text" class="form-control" name="captcha_code" maxlength="6"
                        value="" placeholder="Tulis kode yg ada digambar*" required="">
                    <button type="submit" class="btn btn-primary btn-sm pull-right">Kirim
                        Komentar</button>
                </div>

            </div>
        </form>

    </div>


</div><!-- End blog comments -->