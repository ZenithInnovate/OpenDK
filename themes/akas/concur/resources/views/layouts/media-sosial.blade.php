<div class="desa-sosmed ml-auto">
    <div class="header-social-links">
        @foreach($medsos as $value)
        <a href="{{ $value->link }}" target="_blank" style="border-radius: 5px;">
            <img src="{{ is_img($value->logo) }}" alt="{{ $value->nama }}" class="img-fluid img-responsive img-sosmed" width="30px" height="30px">
        </a>
        @endforeach
    </div>
</div>