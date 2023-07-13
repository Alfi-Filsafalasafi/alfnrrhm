@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-title">
                <h5>Tambah Buku</h5>
            </div>
            <form action="{{ route('buku.tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar Produk</label>
                    <input type="file" class="form-control-file" id="berkas" name="berkas" required>
                    @error('berkas')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection