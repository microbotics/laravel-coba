<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class mataKuliahModel extends Model
{
  protected $table="mataKuliah";
  protected $primarykey="id";
  protected $fillable=[
    "id",
    "mataKuliah",
    "dosen"
  ];

  public $timestamps=false;
}
