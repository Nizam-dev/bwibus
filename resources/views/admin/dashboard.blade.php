@extends('template.master')

@section('content')

<div class="card">
    <div class="card-body">
<div id="googleMap" style="height:500px;"></div>

    </div>
</div>

@endsection
@section('js')

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initialize"
        type="text/javascript"></script>
<script type="text/javascript">
function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(-8.222135981047273, 114.35222273652148),
	zoom: 5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-8.222135981047273, 114.35222273652148),
      map: peta,
      icon : "{{asset('public/image/iconbuss.png')}}",
      title: "Bus BWI-SURABAYA 001"
  });

  var marker2=new google.maps.Marker({
      position: new google.maps.LatLng(-7.922135981047273, 113.15222273652148),
      map: peta,
      icon : "{{asset('public/image/iconbuss.png')}}",
      title: "Bus BWI-SURABAYA 002"
  });
}


</script>

@endsection