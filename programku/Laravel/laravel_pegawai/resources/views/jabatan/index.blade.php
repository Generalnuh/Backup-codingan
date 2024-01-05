@extends('layouts.app')

@section('content')
<h3 class="border-bottom pb-3 mb-3">Data Jabatan</h3>
<a class="btn btn-success" href="{{ route('jabatan.create') }}"><i class="bi bi-plus"></i> Tambah</a>

<div class="table-responsive mt-3 row">
<table class="table table-striped table-hover table-bordered">
   <thead class="bg-info">
      <tr>
         <th>No</th>
         <th>Nama Jabatan</th>         
         <th width="120">Aksi</th>
      </tr>
   </thead>
   <tbody>

@foreach($jabatan as $data)
      <tr>
         <td>{{ $loop->iteration }}</td>
         <td>{{ $data->nama_jabatan }}</td>
         <td>
            <a class="btn btn-sm btn-info" href="{{ route('jabatan.edit', $data->id) }}"> <i class="bi bi-pencil"></i> Edit </a>
            <form class="d-inline" 
            method="post" action="{{ route('jabatan.destroy', $data->id) }}">
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
