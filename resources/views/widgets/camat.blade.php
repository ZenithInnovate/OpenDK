
   <div class="pad text-bold bg-white" style="text-align:center;">
       <img src="@if(isset($profil->foto_kepala_wilayah)) {{ asset($profil->foto_kepala_wilayah) }} @else {{ asset('img/no-profile.png') }} @endif" width="200px" class="img-user" style="max-height: 256px; object-fit: contain;  width: 250px;">

    </div>
    <div class="box-header text-center  with-border bg-blue">
        <h2 class="box-title text-bold" data-toggle="tooltip" data-placement="top" >
          {{ $profil->nama_camat }} <br />  <span style="font-size: 14px;color: #ecf0f5;"> {{ $sebutan_kepala_wilayah }} {{ $profil->nama_kecamatan }} </span></h6>
        </h2>
    </div>
<!-- /.col -->
