<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

use App\Models\Kategori;
use App\Models\Produk;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['nama'=>'']);
    
});

//Materi Route
Route::get('kategori/{id}', function($id){ 
    echo $id;
 });
 
/*
Route::get('kategori/{id?}', function($id=1){ 
    echo $id;
});
*/
 
Route::get('kategori/{nama}', function($nama){ 
    echo $nama;
 })->where('nama', '[A-Za-z]+');

Route::get('kategori/{id}/{nama}', function($id, $nama){ 
    echo $id."-".$nama;
})->where(array('id'=>'[0-9]+', 'nama'=>'[A-Za-z]+'));
 
Route::get('selamat', function(){
    echo 'Halo, Selamat Datang!';
});

Route::get('produk/tambah', function(){ 
    echo "Data produk berhasil ditambah";
 })->name('produk.tambah');
 


//Materi Eloquent
Route::get('kategori/semua', function(){
   $kategori = Kategori::all();
   foreach($kategori as $data){
      echo $data->id_kategori.". ".
           $data->nama_kategori."<br>";
   }
});

//tambah data
Route::get('kategori/tambah', function(){
    $kategori = new Kategori;
    $kategori->nama_kategori = "Pakaian";
    $kategori->deskripsi = "Semua jenis pakaian";
    $kategori->save();
});

//update data
Route::get('kategori/update/{id}', function($id){
    $kategori = Kategori::find($id);
    $kategori->nama_kategori = "Pakaian Anak";
    $kategori->update();
 });

 //hapus data
 Route::get('kategori/hapus/{id}', function($id){
    $kategori = Kategori::find($id);
    $kategori->delete();
 });
  


//Materi Relationship
 Route::get('kategori/detail/{id}', function($id){
    $kategori = Kategori::where('id', '=', $id)
     ->first();
    echo "Produk untuk kategori ".$kategori->nama_kategori.":";
    foreach($kategori->produk as $data){
       echo "<li>".$data->nama_produk."</li>";
    }
 });
 
//Materi View dan Blade
Route::get('welcome', function(){
    return view('welcome', ['nama'=>'Daffa\' Shidqi']);
 });

Route::get('produk/all', function(){
    $produk = Produk::all();
    return view('produk', ['produk'=>$produk]);
});
 
Route::get('halaman', function(){
    $title  = 'Contoh Halaman';
    $content = 'Anda sedang berada di sebuah halaman website kami';
     
    return view('konten.halaman', compact('title', 'content'));
});

//Materi Controller
Route::resource('kategori', KategoriController::class);
 
 
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Materi Middleware
Route::get('admin', function(){
    echo "Selamat datang admin!";
 })->middleware('auth');
 
 Route::group(['middleware' => 'auth'], function(){
    Route::resource('kategori', KategoriController::class);
 
    Route::get('admin', function(){
       echo "Selamat datang admin!";
    });
 });
 
 
 //Materi CRUD
Route::resource('produk', ProdukController::class);