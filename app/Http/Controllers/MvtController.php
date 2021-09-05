<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Categorie;
use App\Models\Mvt;
use App\Models\Detail;

class MvtController extends Controller
{
 /*
    public function mvt(){
        $listmvt = Mvt::all();
        return view('listmvt',['mvt_v' => $listmvt]);
    }
    public function insertmvt(){
        return view('mouvement');
    }

    public function storemvt(Request $request){
        $data = new Mvt;
        $data->date_mvt = $request->input('date_mvt');
        $data->type_mvt = $request->input('type_mvt');
        $data->organe = $request->input('organe');
        $data->libresp = $request->input('libresp');
        $data->save();
        return redirect('mvt_det');

    }
    public function mvt_det(){
     return view('mvt_det');
    }

      public function editmvt($mvt_id){
          $mvt = Mvt::find($mvt_id);
          return view('editmvt')->with('mvt',$mvt);
         // dd($mvt);
      }

*/



}
