<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    protected $table="mahasiswa";
    protected $primarykey="id";
    protected $fillable=[
      "id",
      "nama",
      "jurusan"
    ];

    public $timestamps=false;
}
