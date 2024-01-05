<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Produk</title>
    </head>
    <body> 
	   <p>Daftar Produk:</p>
	   <ul>
	   @foreach($produk as $data)
	      <li> {{ $data->nama_produk }} -> 
             Rp. {{$data->harga_jual}} </li>
	   @endforeach
	   </ul>
    </body>
</html>
