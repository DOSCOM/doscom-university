<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas'];

    public function pesertass()
    {
        return $this->belongsToMany('App\Pesertas')->withTimestamps();
    }
}
