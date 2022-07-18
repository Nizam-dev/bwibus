@extends('template.master')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span></h4> -->


<div class="card">
    <div class="card-header">
        @if(auth()->user()->role == "admin")
        <button class="btn btn-primary float-end" id="tambahbusbutton">Tambah</button>
        @endif
        <div class="modal fade show" id="tambahbusmodal" tabindex="-1" aria-modal="true" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlemodal">Tambah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('bus')}}" method="post" id="tambahbusform">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">PT/PO</label>
                                    <input type="text" name="pt_po" id="nameBasic" class="form-control"
                                         required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Plat Nomor</label>
                                    <input type="text" name="plat_nomor"  class="form-control"
                                         required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-0">
                                    <label for="penumpang" class="form-label">Masa Berlaku KIR</label>
                                    <input type="date" name="masa_berlaku_kir" id="" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-0">
                                    <label for="penumpang" class="form-label">Masa Berlaku Trayek</label>
                                    <input type="date" name="masa_berlaku_trayek" id="" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-0">
                                    <label for="penumpang" class="form-label">Kernet</label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach($kernets as $kernet)
                                        <option value="{{$kernet->id}}">{{$kernet->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-0">
                                    <label for="penumpang" class="form-label">Jalur</label>
                                    <input type="text" name="jalur" id="" class="form-control" required>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="tambahbus()" class="btn btn-primary">Simpan</button>
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
                    <th>Masa Berlaku Kir</th>
                    <th>Masa Berlaku Trayek</th>
                    <th>Kernet</th>
                    <th>Jalur</th>
                    @if(auth()->user()->role == "admin")
                    <th>Option</th>
                    @endif
                </tr>
            </thead>
            <tbody>

                @foreach($buses as $bus)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$bus->pt_po}}</td>
                    <td>{{$bus->plat_nomor}}</td>
                    <td>{{$bus->masa_berlaku_kir}}</td>
                    <td>{{$bus->masa_berlaku_trayek}}</td>
                    <td>{{$bus->name}}</td>
                    <td>{{$bus->jalur}}</td>
                    @if(auth()->user()->role == "admin")
                    <td>
                        <span class="btn btn-warning" onclick="edit({{$bus}})"><i class='bx bxs-edit-alt'></i></span>

                        <span class="btn btn-danger" onclick="hapus({{$bus->id}})"><i class='bx bxs-trash'></i></span>
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
                <h5 class="modal-title text-center" id="exampleModalLabel2">Apakah Anda Yakin Mau menghapus user?</h5>
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


$("#tambahbusbutton").on("click", () => {
    resetvalidateForm("#tambahbusform")
    $("#titlemodal").html("Tambah")
    $("#tambahbusmodal form").attr("action", "{{url('bus')}}")
    $("#tambahbusmodal [name='pt_po']").val("")
    $("#tambahbusmodal [name='plat_nomor']").val("")
    $("#tambahbusmodal [name='masa_berlaku_kir']").val("")
    $("#tambahbusmodal [name='masa_berlaku_trayek']").val("")
    $("#tambahbusmodal [name='jalur']").val("")
    $("#tambahbusmodal").modal("show")
})

function tambahbus() {
    validateForm("#tambahbusform")
}

function edit(bus) {
    resetvalidateForm("#tambahbusform")
    $("#titlemodal").html("Edit")
    $("#tambahbusmodal form").attr("action", `{{url('bus')}}/${bus.id}`)
    $("#tambahbusmodal [name='pt_po']").val(bus.pt_po)
    $("#tambahbusmodal [name='plat_nomor']").val(bus.plat_nomor)
    $("#tambahbusmodal [name='masa_berlaku_kir']").val(bus.masa_berlaku_kir)
    $("#tambahbusmodal [name='masa_berlaku_trayek']").val(bus.masa_berlaku_trayek)
    $("#tambahbusmodal [name='user_id']").val(bus.kernet)
    $("#tambahbusmodal [name='jalur']").val(bus.jalur)
    $("#tambahbusmodal").modal("show")
}

function hapus(id) {
  $("#hapusmodal form").attr("action",`{{url('bus/hapus')}}/${id}`)
  $("#hapusmodal").modal('show')
}

</script>

@endsection