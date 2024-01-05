@extends('layouts.app')

@section('content')
<h3 class="border-bottom pb-3 mb-3">Tambah Pegawai</h3>

<form method="post" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
   @csrf

   <div class="row mt-3">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
        <input type="file" id="foto" name="foto" value="{{ old('foto') }}"
             class="form-control @error('foto') is-invalid @enderror"
         >
            @error('foto')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
      </div>
   </div>

   <div class="row mt-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">
		   <input  type="text" id="nama" name="nama" value="{{ old('nama') }}"
             class="form-control @error('nama') is-invalid @enderror"
         >
            @error('nama')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
	   </div> 
   </div>

   <div class="row mt-3">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
     <div class="col-sm-4">   
        <div class="form-check form-check-inline">
          <input type="radio" id="jenis_kelaminl" name="jenis_kelamin" value="L" 
             class="form-check-input  @error('jenis_kelamin') is-invalid @enderror" 
          > 
          <label class="form-check-label" for="jenis_kelaminl">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" id="jenis_kelaminp" name="jenis_kelamin" value="P"
             class="form-check-input  @error('jenis_kelamin') is-invalid @enderror"
          > 
          <label class="form-check-label" for="jenis_kelaminp">Perempuan</label>
        </div> 
         @error('jenis_kelamin')
               <div class="invalid-feedback">{{$message}}</div>
         @enderror
     </div>
   </div>

   <div class="row mt-3">
      <label for="tanggal" class="col-sm-2 col-form-label">Tgl_lahir</label>   
      <div class="col-sm-2">   
        <input type="text" id="tanggal" name="tgl_lahir" value="{{ old('tgl_lahir') }}"
             class="form-control @error('tgl_lahir') is-invalid @enderror"
         >
            @error('tgl_lahir')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
     </div>
   </div>

   <div class="row mt-3">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-4">
        <select id="jabatan" name="jabatan" value="{{ old('jabatan') }}"
           class="form-select @error('jabatan') is-invalid @enderror"
        >
          <option value=""> -Pilih Jabatan-</option>
          @foreach($jabatan as $j)
            <option value='{{ $j->id }}'>{{ $j->nama_jabatan }}</option>
          @endforeach
        </select>
         @error('jabatan')
               <div class="invalid-feedback">{{$message}}</div>
         @enderror
      </div>
   </div>

   <div class="row mt-3">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
        <textarea  id="keterangan" name="keterangan" 
             class="form-control @error('keterangan') is-invalid @enderror"
         > {{ old('keterangan') }} </textarea> 
            @error('keterangan')
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
