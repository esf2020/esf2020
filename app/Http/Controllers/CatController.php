<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Categorie;
use App\Models\Mvt;
use App\Models\Detail;
use App\Http\Requests\CattRequest;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{


   public function listescateg(){
       $categorie = Categorie::orderBy('categorie_id','asc')->paginate(5);
       return view('temptate.listescategorie',compact('categorie'));
   }
   
   public function insertcateg(){
    return view('temptate.addcateg');
   }

   public function addcateg(CattRequest $request){

    $data = new Categorie();
    $data->lib_categ = $request->input('categorie');
    $data->save();
    return redirect('home/listescateg')->with('message','data ajouter avec succes !!!!');
   }

}
