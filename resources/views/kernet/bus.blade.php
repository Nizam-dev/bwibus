@extends('template.master')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span></h4> -->


<div class="card">
    <div class="card-header">
    
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
                   
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>




@endsection
@section('js')


@endsection