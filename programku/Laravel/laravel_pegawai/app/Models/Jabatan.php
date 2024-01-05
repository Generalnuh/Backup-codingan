<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';

    public function pegawai(){
       return $this->hasMany('App\Models\Pegawai', 'id_jabatan');
    }
}
