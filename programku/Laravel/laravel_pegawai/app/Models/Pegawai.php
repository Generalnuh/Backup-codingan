<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai'; 

    public function jabatan(){
       return $this->belongsTo('App\Models\Jabatan', 'id_jabatan');
    }

}
