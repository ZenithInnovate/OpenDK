<div class="widget bg-white p-a20 recent-posts-entry">
    <div class="title style-1">Media Sosial</div>
    <div class="widget-post-bx">
        <div class="text-center pb-3">
            @foreach($medsos as $value)
            <a href="{{ $value->link }}" target="_blank">
                <img src="{{ is_img($value->logo) }}" alt="{{ $value->nama }}" class="img-fluid img-responsive img-sosmed"
                    width="30px" height="30px" style="border-radius: 5px;">
            </a>
            @endforeach
        </div>
    </div>
</div>