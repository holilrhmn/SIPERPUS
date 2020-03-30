@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Penulis</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.author.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for=""@error('name') class="text-danger" @enderror >Nama</label>
                    <input type="text " name="name" class="form-control @error('name') form-control is-invalid @enderror"
                    placeholder="Masukkan Nama Penulis" value="{{ old('name') }}">
                    @error('name')
                        <span  class="text-danger"> {{ $message }} </span>
                    @enderror
                    <!--@if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif -->
                </div>
                <div class="form-group">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection