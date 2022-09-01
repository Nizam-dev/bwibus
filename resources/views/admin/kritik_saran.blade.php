@extends('template.master')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span></h4> -->


<div class="card">
    <div class="card-header">
        <h4>KRITIK DAN SARAN</h4>       
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Kritik dan Saran</th>
                    <th>Nama User</th>
                </tr>
            </thead>
            <tbody>

              @foreach($kritiksarans as $ks)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ks->kritiksaran}}</td>
                  <td>{{$ks->name}}</td>
              </tr>

              @endforeach

            </tbody>
        </table>
    </div>
</div>




@endsection
@section('js')


<script type="text/javascript">
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