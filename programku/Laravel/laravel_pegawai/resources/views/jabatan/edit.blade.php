@extends('layouts.app')

@section('content')
<h3 class="border-bottom pb-3 mb-3">Edit Jabatan</h3>

<form method="post" action="{{ route('jabatan.update', $jabatan->id) }}">
   @csrf @method('put')
   
   <div class="row mt-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">
		   <input  type="text" id="nama" name="nama" value="{{ $jabatan->nama_jabatan }}"
             class="form-control @error('nama') is-invalid @enderror"
           >
           @error('nama')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
	   </div> 
   </div>

   <div class="mt-3">
      <button type="submit" class="btn btn-info"><i class="bi bi-save-fill"></i> Simpan</button>
      <button type="reset" class="btn btn-warning"><i class="bi bi-x-circle-fill"></i> Batal</button>
   </div>
</form>
@endsection
