@extends('admin.templates.default')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Laporan Buku Terlaris</h3>
    </div>
    <div class="card-body"> 
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Deskripsi Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Total Dipinjam</th>
                    <th>Penulis</th>
                    <th>Sampul</th>
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
                @foreach ($books as $book)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->qty}}</td>
                    <td>{{$book->borrowed_count }}</td>
                    <td>{{$book->author->name}}</td>
                    <td>
                        <img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title }}"> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    </div>
</div>


@endsection('content')



 