@extends('layouts.app')

@section('content')
<h3 class="border-bottom pb-3 mb-3">Data Pegawai</h3>
<a class="btn btn-success" href="{{ route('pegawai.create') }}"><i class="bi bi-plus"></i> Tambah</a>

<div class="table-responsive mt-3 row">
<table class="table table-striped table-hover table-bordered">
   <thead class="bg-info">
      <tr>         
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Jabatan</th>     
        <th width="120">Aksi</th>
      </tr>
   </thead>
   <tbody>

@foreach($pegawai as $data)
      <tr>
         <td>{{ $loop->iteration }}</td>
         <td><img src="images/{{ $data->foto }}" width="100"></td>
         <td>{{ $data->nama_pegawai }}</td>
         <td>{{ $data->jenis_kelamin=="L" ? "Laki-laki" : "Perempuan" }}</td>
         <td>{{ date('d-m-Y', strtotime($data->tgl_lahir)) }}</td>
         <td>{{ $data->jabatan->nama_jabatan }}</td>
         <td>
            <a class="btn btn-sm btn-info" href="{{ route('pegawai.edit', $data->id) }}"> <i class="bi bi-pencil"></i> Edit </a>
            <form class="d-inline" 
            method="post" action="{{ route('pegawai.destroy', $data->id) }}">
               @method('delete') @csrf
               <button type="submit" class="btn btn-sm btn-danger" > <i class="bi bi-trash"></i> Hapus </button>
            </form>
         </td>
     </tr>
@endforeach

   </tbody>
</table>
</div>

@endsection
