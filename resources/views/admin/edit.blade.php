@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-title">
                <h5>Edit buku</h5>
            </div>
            <form action="{{ route('buku.update', ['buku' => $buku->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" name="nama" class="form-control" value="{{$buku->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar Produk</label>
                    <input type="file" class="form-control-file" id="berkas" name="berkas">
                    @error('berkas')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection