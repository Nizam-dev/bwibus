@extends('template.master')

@section('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<style>
    .card .col-auto i{
        font-size : 30px;
    }

/* Add WA floating button CSS */
.floating {
 position: fixed;
 width: 60px;
 height: 60px;
 bottom: 40px;
 right: 40px;
 background-color: #25d366;
 color: #fff;
 border-radius: 50px;
 text-align: center;
 font-size: 30px;
 box-shadow: 2px 2px 3px #999;
 z-index: 100;
}

.fab-icon {
 margin-top: 16px;
}
</style>
@endsection

@section('content')

<a href="https://wa.me/6285335853671?text=start" class="floating" target="_blank">
<i class="fab fa-whatsapp fab-icon"></i>
</a>

<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-start border-primary shadow h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total BUS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data["bus"]}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="tf-icons  bx bx-bus text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-6 mb-4">
                            <div class="card border-start border-primary shadow h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Kernet</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data["kernet"]}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="tf-icons  bx bx-user text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                    </div>

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
var trayek= [];

function initialize() {
  var propertiPeta = {
    center: new google.maps.LatLng(-8.222135981047273, 114.35222273652148),
	zoom: 8,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  function marker(lat,lng,detail){
      return new google.maps.Marker({
      position: new google.maps.LatLng(lat, lng),
      map: peta,
      icon : "{{asset('public/image/iconbuss.png')}}",
      title: detail
  });
}


  axios.get("{{url('lokasibus')}}")
  .then(res=>{      
      let buses = res.data
      buses.forEach((bus,i)=>{
          var namabis = marker(bus.latitude,bus.longitude,bus.jalur);
            trayek[`biss${i}`] = namabis;
            new google.maps.InfoWindow({
                content: bus.jalur
                }).open(peta, namabis);
            })
  })


}


</script>

@endsection