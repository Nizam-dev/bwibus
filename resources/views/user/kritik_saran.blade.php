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

<div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 mb-5 mt-5">
                        <div class="section-tittle text-center mb-55">
                            <h2>Masukan Kritik dan Saran</h2>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="services-area">
                            <div class="container">
                                <div class="card">

                                    <div class="card-body bg-primary py-5 px-5">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="text-white">Kirim Kritik dan Saran</h4>
                                                <form action="{{url('kritiksaran')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <textarea name="kritiksaran" required class="form-control" style="font-size:14px;"></textarea>
                                                    </div>


                                                    <button 
                                                        class="btn btn-warning mt-3" data-animation="fadeInLeft" data-delay="0.7s">
                                                        <i class="fa fa-paper-plane"></i>
                                                        Kirim</button>

                                                </form>
                                            </div>

                                            <div class="col-md-6">
                                                <img style="width:150px;" class="mx-auto d-block" src="{{asset('public/image/kritiksaran.png')}}" alt="" srcset="">
                                            </div>
                                        </div>

                                    </div>                           

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


@endsection
@section('js')

<script>
    @if(session()-> has("sukses"))
alertToast({
    judul: "Sukses",
    deskripsi: "{{session()->get('sukses')}}",
})
@elseif(session()-> has("gagal"))
alertToast({
    type: "bg-danger",
    judul: "Gagal",
    deskripsi: "{{session()->get('gagal')}}",
})
@endif

</script>


@endsection