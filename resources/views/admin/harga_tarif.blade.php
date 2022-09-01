@extends('template.master')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span></h4> -->


<div class="card">
    <div class="card-header">
        @if(auth()->user()->role != "penumpang")
        <button class="btn btn-primary float-end" id="tambahuserbutton">Tambah</button>
        @endif  

        <div class="modal fade show" id="tambahusermodal" tabindex="-1" aria-modal="true" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodal">Tambah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('tarifbus')}}" method="post" id="tambahuserform">
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
                                    <label for="penumpang" class="form-label">Deskripsi Tarif</label>
                                    <textarea  name="deskripsi_harga" id="" class="form-control" required placeholder="BWI-JEMBER 31.000"></textarea>
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
                    <th>Deskripsi Tarif</th>
                    @if(auth()->user()->role != "penumpang")
                    <th>Option</th>
                    @endif
                </tr>
            </thead>
            <tbody>

                @foreach($tarif_buses as $tarif_bus)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$tarif_bus->pt_po}}</td>
                    <td>{{$tarif_bus->plat_nomor}}</td>
                    <td>{{$tarif_bus->jalur}}</td>
                    <td style="white-space: pre-line;">{{$tarif_bus->deskripsi_harga}}</td>
                    @if(auth()->user()->role != "penumpang")
                    <td>
                        <span class="btn btn-warning" onclick="edit({{$tarif_bus}})"><i class='bx bxs-edit-alt'></i></span>

                        <span class="btn btn-danger" onclick="hapus({{$tarif_bus->id}})"><i class='bx bxs-trash'></i></span>
                    </td>
                    @endif
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
                <h5 class="modal-title text-center" id="exampleModalLabel2">Apakah Anda Yakin Mau menghapus tarif?</h5>
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
    $("#tambahusermodal form").attr("action", "{{url('tarifbus')}}")
    $("#tambahusermodal [name='deskripsi_harga']").val("")
    $("#tambahusermodal").modal("show")
})

function tambahuser() {
    validateForm("#tambahuserform")
}

function edit(tarif_bus) {
    console.log(tarif_bus)
    resetvalidateForm("#tambahuserform")
    $("#titlemodal").html("Edit")
    $("#tambahusermodal form").attr("action", `{{url('tarifbus')}}/${tarif_bus.id}`)
    $("#tambahusermodal [name='bus_id']").val(tarif_bus.idbus)
    $("#tambahusermodal [name='deskripsi_harga']").val(tarif_bus.deskripsi_harga)
    $("#tambahusermodal").modal("show")
}

function hapus(id) {
  $("#hapusmodal form").attr("action",`{{url('tarifbus/hapus')}}/${id}`)
  $("#hapusmodal").modal('show')
}

</script>

@endsection