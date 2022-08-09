<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'tgl_lahir', 'Pendidikan', 'email', 'no_hp', 'umur'];
    public $timestamps = true;

    public function loker()
    {

        return $this->belongsTo('App\Models\Loker', 'id_Loker');
    }

}
