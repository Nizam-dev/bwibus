@extends('template.master')

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">

            </div>
             <div class="card-body">

                <form action="{{url('profile')}}" method="post">
                    @csrf
                <h6>Ubah Data Diri</h6>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input  name="name" type="text" value="{{auth()->user()->name}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input  name="email" type="email" value="{{auth()->user()->email}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input name="no_hp" type="text" value="{{auth()->user()->no_hp}}" class="form-control" required>
                    </div>

                    <button class="btn btn-sm btn-primary float-end mt-3">Simpan</button>

                </form>

                <form action="{{url('profile/'.auth()->user()->id)}}" class="mt-5 profilepassword" method="post">
                    @csrf
                    @method('patch')
                    <h6>Ubah Password</h6>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="" required>
                    </div>

                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="">
                    </div>

                    <button  type="button" class="btn btn-sm btn-primary float-end mt-3 ubahpw">Simpan</button>

                </form>
            </div>


        </div>
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

$(".ubahpw").on('click',()=>{
    let password = $("input[name='password']")
    let confirmpassword = $("input[name='confirm_password']")
    password.removeClass("is-invalid")
    confirmpassword.removeClass("is-invalid")

    if(password.val() == ""){
        password.focus()
        password.addClass("is-invalid")
    }
    if(password.val() != confirmpassword.val()){
        confirmpassword.focus()
        confirmpassword.addClass("is-invalid")
    }else{
        $(".profilepassword").submit()
    }
})


</script>

@endsection