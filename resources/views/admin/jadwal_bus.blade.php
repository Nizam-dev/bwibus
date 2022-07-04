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
                        <h5 class="modal-title" id="titlemodal">Tambah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('jadwalbus')}}" method="post" id="tambahuserform">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Bus</label>
                                    <select name="bus_id" id="" class="form-control">
                                        @foreach($buses as $bus)
                                            <option value="{{$bus->id}}">{{$bus->pt_po .' - '.$bus->plat_nomor.' - '.$bus->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="penumpang" class="form-label">Deskripsi Jadwal</label>
                                    <textarea  name="deskripsi_jadwal" id="" class="form-control" required placeholder="BANYUWANGI 19.00"></textarea>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="tambahuser()" class="btn btn-primary">Simpan</button>
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
                    <th>PT/PO</th>
                    <th>Plat Nomor</th>
                    <th>Jurusan</th>
                    <th>Deskripsi Jadwal</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>

                @foreach($jadwal_buses as $jadwal_bus)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$jadwal_bus->pt_po}}</td>
                    <td>{{$jadwal_bus->plat_nomor}}</td>
                    <td>{{$jadwal_bus->jalur}}</td>
                    <td style="white-space: pre-line;">{{$jadwal_bus->deskripsi_jadwal}}</td>
                    <td>
                        <span class="btn btn-warning" onclick="edit({{$jadwal_bus}})"><i class='bx bxs-edit-alt'></i></span>

                        <span class="btn btn-danger" onclick="hapus({{$jadwal_bus->id}})"><i class='bx bxs-trash'></i></span>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<div class="modal fade show" id="hapusmodal" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel2">Apakah Anda Yakin Mau menghapus jadwal?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <form action="" method="post" class="mx-auto  ">
                  @csrf
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
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


$("#tambahuserbutton").on("click", () => {
    resetvalidateForm("#tambahuserform")
    $("#titlemodal").html("Tambah")
    $("#tambahusermodal form").attr("action", "{{url('jadwalbus')}}")
    $("#tambahusermodal [name='deskripsi_jadwal']").val("")
    $("#tambahusermodal").modal("show")
})

function tambahuser() {
    validateForm("#tambahuserform")
}

function edit(jadwal_bus) {
    resetvalidateForm("#tambahuserform")
    $("#titlemodal").html("Edit")
    $("#tambahusermodal form").attr("action", `{{url('jadwalbus')}}/${jadwal_bus.id}`)
    $("#tambahusermodal [name='bus_id']").val(jadwal_bus.idbus)
    $("#tambahusermodal [name='deskripsi_jadwal']").val(jadwal_bus.deskripsi_jadwal)
    $("#tambahusermodal").modal("show")
}

function hapus(id) {
  $("#hapusmodal form").attr("action",`{{url('jadwalbus/hapus')}}/${id}`)
  $("#hapusmodal").modal('show')
}

</script>

@endsection