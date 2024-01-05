@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
    
<div class="card">
    <div class="card-header">
        <h4 class="float-left">Data Produk</h4>
        <a href="{{route('produk.create')}}" class="btn btn-success float-right">
            Tambah
        </a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $p)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->nama_produk}}</td>
                    <td>{{$p->kategori->nama_kategori}}</td>
                    <td>{{$p->harga_jual}}</td>
                    <td>
                        <a href="{{route('produk.edit', $p->id)}}" class="btn btn-primary">
                            Edit
                        </a>
                        <form class="d-inline" action="{{route('produk.destroy', $p->id)}}" method="post">
                            @csrf @method('delete')
                            <button class="btn btn-danger"> Hapus </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

        </div>
    </div>
</div>
@endsection