<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function produk(){
       return $this->hasMany('App\Models\Produk', 'id_kategori');
    }

}
