<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Kategori</title>
    </head>
    <body> 
	   <p>Daftar Kategori:</p>
	   <table border="1" cellspacing="0" width="100%">
            <tr>
                <th>ID</th><th>Nama Kategori</th><th>Keterangan</th>
            </tr>

            @foreach($kategori as $data)
            <tr> 
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_kategori }}</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
