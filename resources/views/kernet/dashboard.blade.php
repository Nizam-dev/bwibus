@extends('template.master')

@section('content')

<div class="row">
<div class="col-md-12 mb-3 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Selamat Datang {{auth()->user()->name}}</h5>
            @if($bus)
            <p class="mb-0 mt-0">Nomor Plat <span class="fw-bold">{{$bus->plat_nomor}}</span></p>
            <p class="mb-0 mt-0">Jalur <span class="fw-bold">{{$bus->jalur}}</span></p>
            <p class="mb-2 mt-0">Lokasi Terakhir : <span class="fw-bold lokasiterakhir"></span></p>
            <a href="javascript:;" id="updatelokasibus" class="btn btn-sm btn-outline-primary">Update Lokasi</a>
            @else
            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Silahkan Konfirmasi Ke Admin Untuk BUS Anda</a>
            @endif
            
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('public/image/icon.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
    <div class="card-body">
<div id="googleMap" style="height:450px;"></div>

    </div>
</div>

@endsection
@section('js')

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkdyai5-p_kXTroX-gSz_mz-xeQ8Ht1iY&callback=initialize"
        type="text/javascript"></script>
<script type="text/javascript">
function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(-8.222135981047273, 114.35222273652148),
	zoom: 15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker = new google.maps.Marker({
            map: peta,
            icon : "{{asset('public/image/iconbuss.png')}}",
            title: "Bus BWI-SURABAYA 001"
        });
      
  @if($bus)
  
  axios.get("{{url('lokasibus/'.$bus->id)}}")
  .then(res=>{
    if(res.data.status == "belum ada"){

    }else{
        let latlng = new google.maps.LatLng(res.data.lokasi.latitude,res.data.lokasi.longitude)
        marker.setPosition(latlng);
        peta.setCenter(latlng);
        codeLatLng(latlng)
    }
  })
  @endif

  $("#updatelokasibus").on('click',()=>{
        navigator.geolocation.getCurrentPosition(showPosition);
  })

  function showPosition(position) {
    lat = position.coords.latitude;
    lng = position.coords.longitude;
    let latlng = new google.maps.LatLng(lat, lng);
    marker.setPosition(latlng);
    peta.setCenter(latlng);
    codeLatLng(latlng)
    @if($bus)
    axios.post("{{url('lokasibus/'.$bus->id)}}",{latitude:lat,longitude:lng})
    .then(res=>{
      alertToast({
    judul: "Sukses",
    deskripsi: "Lokasi Berhasil diupdate",
})
    })
    @endif
}

  function codeLatLng(latlng) {
    const geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    'latLng': latlng
  }, function (results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        $(".lokasiterakhir").html(results[1].formatted_address)
        console.log(results[1].formatted_address)
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  });
}

}


</script>

@endsection