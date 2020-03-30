@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.book.update', $book)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")

                <div class="form-group">
                    <label for=""@error('title') class="text-danger" @enderror >Judul</label>
                    <input type="text" name="title" class="form-control @error('name') form-control is-invalid @enderror"
                    placeholder="Masukkan Judul Buku" value="{{ $book->title ?? old('title') }}">
                    @error('title')
                        <span  class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""@error('description') class="text-danger" @enderror >Deskripsi</label>
                    <textarea name="description" id="" rows="3" class="form-control @error('description') form-control is-invalid @enderror" 
                    placeholder="Tuliskan Deskripsi Buku"> {{$book->description ?? old ('description') }} </textarea>
                    @error('description')
                        <span  class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group @error('author_id') has-error @enderror">
                    <label for="">Penulis</label>
                    <select name="author_id" id="" class="form-control select2">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" 
                                @if ($author->id == $book->author_id)    
                                    selected
                                @endif
                            > 
                                {{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span  class="help-block"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group @error('cover') has-error @enderror">
                    <label for="" >Sampul Buku</label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
                        <span  class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""@error('qty') class="text-danger" @enderror >Jumlah</label>
                    <input type="text" name="qty" class="form-control @error('qty') form-control is-invalid @enderror"
                    placeholder="Masukkan Jumlah Buku" value="{{ $book->qty ?? old('qty') }}">
                    @error('qty')
                        <span  class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('select2css')
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush