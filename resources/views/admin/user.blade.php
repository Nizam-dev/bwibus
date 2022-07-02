@extends('template.master')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users</span></h4>

<div class="card">
    <div class="card-header">
        <button class="btn btn-primary float-end">Tambah</button>
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
                <tr>
                    <th scope="row">1</th>
                    <td>User</td>
                    <td>User@gmail.com</td>
                    <td>084131313</td>
                    <td>kernet</td>
                    <td>
                        <span class="btn btn-warning"><i class='bx bxs-edit-alt'></i></span>
                   
                        <span class="btn btn-danger"><i class='bx bxs-trash'></i></span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection
@section('js')


<script type="text/javascript">

</script>

@endsection