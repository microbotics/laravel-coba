<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswaModel;

class homeController extends Controller
{
  function __construct(){
      $this->model = new mahasiswaModel();
  }
    //
    function index(){
      //echo 'hallo';
      // $mhs = mahasiswaModel::get()->toArray();
      $mhs = $this->model->get()->toArray();
      foreach ($mhs as $key) {
        echo $key["nama"];
        echo "<br>";
      }
      print_r($mhs);
    }

    // function detail($param) {
    //   if($param) {
    //     echo $param;
    //   } else {
    //
    //   }
    // }

    function insert(Request $request){
      $data = [
        'nama'=>$request->input('nama'),
        'jurusan'=>$request->input('jurusan')
      ];
      if($request->input('id')){
        $save = mahasiswaModel::where('id', $request->input('id'))
                ->update($data);
      } else {
        $save = mahasiswaModel::insert($data);
      }


      if($save){
        echo "success";
      }else{
        echo "gagal";
      }

    }


}
