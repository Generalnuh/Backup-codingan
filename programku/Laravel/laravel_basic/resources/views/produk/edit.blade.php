@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

<form action="{{route('produk.update', $produk->id)}}" method="post">
@csrf @method('put')
<div class="card">
    <div class="card-header">
        <h4>Edit Produk</h4>
    </div>

    <div class="card-body">
            <div class="form-group row">
                <label for="nama_produk" class="control-label col-md-2">Nama Produk</label>
                <div class="col-md-6">
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{$produk->nama_produk}}">
                </div>
                @error('nama_produk')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group row">
                <label for="id_kategori" class="control-label col-md-2">Kategori</label>
                <div class="col-md-3">
                    <select type="text" name="id_kategori" id="id_kategori" class="form-control" value="{{$produk->id_kategori}}">
                        <option value="">-Pilih-</option>
                        @foreach($kategori as $kat)
                            <option value="{{$kat->id}}" @if($kat->id==$produk->id_kategori) selected @endif>{{$kat->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                @error('id_kategori')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group row">
                <label for="harga_jual" class="control-label col-md-2">Harga Jual</label>
                <div class="col-md-2">
                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="{{$produk->harga_jual}}">
                </div>
                @error('harga_jual')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
</form>

        </div>
    </div>
</div>
@endsection