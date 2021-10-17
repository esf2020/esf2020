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
       $categ = Categorie::orderBy('categorie_id','asc')->paginate(5);
       return view('temptate.listescategorie',compact('categ'));
   }

   public function insertcateg(){
    return view('temptate.addcateg');
   }

   public function addcateg(Request $request){

    $data = new Categorie();
    $data->lib_categ = $request->input('categorie');
    $data->save();
    return redirect('home/listescateg')->with('message','Enregistrement modifie avec succes !!!!');
   }
   /*
    //public function editcatg($categorie_id){
        //$categ = Categorie::where('categorie_id',$categorie_id)->get();
       // $categ = Categorie::find($categorie_id);
       // return view('temptate.edit_categ',compact('categ'));

   }
   */

   public function updatecategorie(Request $request){
    $data = new Categorie();
    $data->lib_categ = $request->input('categorie');

    $data->save();
    return redirect('home/listescateg')->with('message','donnees ajouter avec succes !!!!');
   }


}
