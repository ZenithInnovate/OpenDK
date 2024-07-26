<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxsKE9ArOZcaNtsfXIMFqr4N-UCsmp-Ng&callback=initMap"
    defer></script>

<script>
    var map
var kantorDesa
function initMap() {
            var center = {
            lat: -6.0831850127350195,
            lng: 106.65356212829532        }
            
    var zoom = 18
    //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
    map = new google.maps.Map(document.getElementById("map"), { center, zoom });

    kantorDesa = new google.maps.Marker({
        position: center,
        map: map,
        title: 'Kantor Desa Smart Digital'
    });
}
</script>
<!-- widget Peta Wilayah Desa -->
<div id="wilayah-desa" class="wilayah-desa">
    <div id="map" class="map"></div>
</div>