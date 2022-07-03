@extends('template.master')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span></h4> -->


<div class="card">
    <div class="card-header">
        <button class="btn btn-primary float-end" id="tambahuserbutton">Tambah</button>
        <div class="modal fade show" id="tambahusermodal" tabindex="-1" aria-modal="true" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('user')}}" method="post" id="tambahuserform">
                      @csrf
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">Nama</label>
                      <input type="text" name="name" id="nameBasic" class="form-control" placeholder="Enter Name" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-0">
                        <label for="penumpang" class="form-label">No Hp</label>
                        <input type="text" name="no_hp" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-0">
                        <label for="penumpang" class="form-label">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="kernet">Kernet</option>
                            <option value="kenumpang">Penumpang</option>
                        </select>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBasic" class="form-label" required>Email</label>
                      <input type="text" id="emailBasic" name="email" class="form-control" placeholder="xxxx@xxx.xx" required>
                    </div>
                    <div class="col mb-0">
                      <label for="dobBasic" class="form-label">Password</label>
                      <input type="password" name="password" id="dobBasic" class="form-control" required>
                    </div>

                  </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" onclick="tambahuser()" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Role</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->no_hp}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <span class="btn btn-warning"><i class='bx bxs-edit-alt'></i></span>
                   
                        <span class="btn btn-danger"><i class='bx bxs-trash'></i></span>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



@endsection
@section('js')


<script type="text/javascript">

    @if(session()->has("sukses"))
        alertToast({
            judul : "Sukses",
            deskripsi : "{{session()->get('sukses')}}",
        })
    @elseif(session()->has("gagal"))
        alertToast({
            type : "bg-danger",
            judul : "Gagal",
            deskripsi : "{{session()->get('gagal')}}",
        })
    @endif


$("#tambahuserbutton").on("click",()=>{
    $("#tambahusermodal").modal("show")
})

function tambahuser(){
    validateForm("#tambahuserform")
}



</script>

@endsection