@extends('layouts.app')

@section('content')
@if(Auth::user()->id_level == 1 )
<div class="container">
    <div class="row mt-3">
        <div class="col-6 my-auto">
            <h5>Manajemen buku</h5>
        </div>
        <div class="col-6 text-right mx-auto">
            <a href="/buku" type="button" class="btn btn-success float-end">Tambah</a>
        </div>
    </div>
<div class="table-responsive">
<table class="table mt-3">
  <thead>
    <tr>
      <th class="bg-info" scope="col">No</th>
      <th class="bg-info" scope="col">Nama</th>
      <th class="bg-info" scope="col" width="50%">Gambar</th>
      <th class="bg-info" scope="col"><div class="text-center">Aksi</div></th>
    </tr>
  </thead>
  <tbody>
  @forelse ($buku as $data)

    <tr>
      <th class="bg-info" scope="row">{{$loop->iteration}}</th>
      <td class="bg-info"  style="color:white">{{$data->name}}</td>
      <td class="bg-info"  style="color:white"><img src="img/{{$data->gambar}}" class="" style="width:120px"></td>
      <td class="bg-info">
      <div>
        <a class="btn btn-warning text-white btn-sm float-end m-1" href="{{ route('buku.edit',$data->id) }}">Edit</a>
        <a class="btn btn-danger text-white btn-sm float-end m-1" href="{{ route('buku.hapus',$data->id) }}">Hapus</a>
     </div>

      </td>
    </tr>
    @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
  @endforelse
  </tbody>
  
</table>
<!-- {{$buku->links('pagination::bootstrap-4')}} -->

</div>
</div>
@else
<div class="text-center">
  <h5>Login Berhasil, silahkan menuju hhh <a href="/">beranda</a></h5>
</div>
@endif
@endsection
