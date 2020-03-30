@extends('admin.templates.default')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Laporan User Teraktif</h3>
    </div>
    <div class="card-body"> 
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Peminjaman Buku</th>
                    <th>Bergabung</th>
                </tr>
            </thead>
            
            <tbody>
                @php
                    $page = 1;
                    if (request()->has('page')) {
                        $page = request('page');
                    }
                    $no = (10 * $page) - (10 - 1); 
                @endphp
                @foreach ($users as $users)
                <tr>
                    <td>{{$no++ }}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->borrow_count }}</td>
                    <td>{{$users->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection('content')



 