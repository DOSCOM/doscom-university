<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesertas extends Model
{
    protected $fillable = [];

    public function kelass()
    {
        return $this->belongsToMany('App\Kelas')->withTimestamps();
    }
    public function hello() {
       echo 'hello worl';
    }
    public function totalbayar(){
        return $this->total_bayar;
    }
}
