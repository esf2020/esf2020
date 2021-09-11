<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
use App\Models\Categorie;
use App\Models\Mvt;
use App\Models\Detail;
use App\Http\Requests\matRequest;
use App\Http\Requests\mvtRequest;
use App\Http\Requests\GetRequest;
use Illuminate\Support\Facades\DB;
class DetController extends Controller
{
    public function show(){

        $data = DB::table('categories')
        ->Leftjoin('materiels', 'categories.categorie_id', '=', 'materiels.categorie_id')
        ->orderBy('materiel_id','asc')
        ->paginate(6);
        return view('temptate.show',compact('data'));
    }


}
