<?php

namespace App\Http\Controllers;

use App\Models\Arrivee;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware\checkCategory;
use Illuminate\Support\Facades\DB;
//use Yajra\DataTables\DataTables;

class ArriveeController extends Controller
{
    //
    public function listesArrivee(){
        $courrier = Arrivee::all();
        return view('temptate.courrierA',compact('courrier'));
    }
    public function insertcour(){
        return view('temptate.ajoutercourrier');
    }
    public function storecour(Request $request){

            $this->validate($request,[

            'nordre' => 'required|integer|min:1',
            'datea' => 'required|date',
            'reference' => 'required',
            'source' => 'required',
            'type' =>'required',
            'datemsg' => 'required|date',
            'objet' => 'required'

            ]);
            $data = new Arrivee;
            $data->nordre = $request->input('nordre');
            $data->datea = $request->input('datea');
            $data->textmsg = $request->input('reference');
            $data->source = $request->input('source');
            $data->typemsg = $request->input('type');
            $data->datemsg = $request->input('datemsg');
            $data->objet = $request->input('objet');
            $data->save();
            return redirect('home/Arrivee')->with('message',' Données inserer avec succes !!!!');
       }

       public function editcour($id){
          $arr =Arrivee::find($id);
         return view('temptate.editcour')->with('arr',$arr);
       }

       public function updatecour(Request $request,$id){
        $this->validate($request,[

            'nordre' => 'required|integer',
            'datea' => 'required|date',
            'reference' => 'required',
            'source' => 'required',
            'type' =>'required',
            'datemsg' => 'required|date',
            'objet' => 'required'
            ]);
            $arr =Arrivee::find($id);
            $arr->nordre = $request->input('nordre');
            $arr->datea = $request->input('datea');
            $arr->textmsg = $request->input('reference');
            $arr->source = $request->input('source');
            $arr->typemsg = $request->input('type');
            $arr->datemsg = $request->input('datemsg');
            $arr->objet = $request->input('objet');
            $arr->save();

            return redirect('home/Arrivee')->with('message',' Données modifier avec succes !!!!');

       }
       


}
