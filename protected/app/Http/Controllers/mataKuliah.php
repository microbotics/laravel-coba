<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mataKuliahModel;

class mataKuliah extends Controller
{
  function index(){
    $mk = mataKuliahModel::get()->toArray();
    foreach ($mk as $key) {
      echo $key['mataKuliah'];
      echo "<br>";
    }
  }

  function tampil($id){
    $tampil = mataKuliahModel::where('id', $id)->get()->toArray();
    echo json_encode($tampil);
  }

  function insert(Request $request){
    $data = [
      'mataKuliah'=>$request->input('mataKuliah'),
      'dosen'=>$request->input('dosen')
    ];
    if ($request->input('id')) {
      $save = mataKuliahModel::where('id', $request->input('id'))->update($data);
    }
    else{
      $save = mataKuliahModel::insert($data);
    }

    if($save){
      echo "y";
    }else{
      echo "t";
    }

  }

  function delete($id){
    $tampil = mataKuliahModel::where('id', $id)->delete();
    if($tampil){
      echo "y";
    }else{
      echo "t";
    }
  }

}
