@php $link_share = url('detail/' . $artikel->slug) @endphp
<div class="social-shared">
    <a name="fb_share" href="http://www.facebook.com/sharer.php?u={{ $link_share }}" target="_blank" class="facebook btn-share"><i class="icofont-facebook"></i>Share</a>
    <a href="http://twitter.com/share?url={{ $link_share }}" target="_blank" class="twitter"><i class="icofont-twitter"></i> Tweet</a>
    <a href="https://api.whatsapp.com/send?text={{ $link_share }}" target="_blank" class="whatsapp"><i class="icofont-whatsapp"></i> Share</a>
    <a href="https://t.me/share/url?url={{ $link_share }}" target="_blank" class="telegram"><i class="icofont-telegram"></i> Share</a>
</div>