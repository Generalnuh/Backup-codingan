<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_produk', 'id_kategori', 'harga_jual'];

    public function kategori(){
       return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    } 
}
