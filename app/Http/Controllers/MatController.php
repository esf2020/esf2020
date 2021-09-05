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

class MatController extends Controller
{
        public function index(){
            /** Sum des qte de touts les articles existes  */
                $totalqte= DB::table('materiels')->sum('quantites');
                $count = DB::table('materiels')->count();
                $countdet = Detail::where('dtefin',null)->count();
            /** qte mat par categegorie */
                $ord = Materiel::where('categorie_id',1)->count();
                $pc = Materiel::where('categorie_id',2)->count();
                $serveur = Materiel::where('categorie_id',3)->count();
                $clavier = Materiel::where('categorie_id',4)->count();
            /** Quantites diponible du materiel */
                $qtedisponible = $totalqte - $countdet;
            /** nombre des mouvement existes */
                $countmvt = DB::table('mvts')->count();
            return view('temptate.home',compact('totalqte','count','countmvt','countdet','serveur','ord','pc',
                             'clavier','qtedisponible'));
        }
        public function advanced(){
            return view('temptate.show');
        }
        public function general(){
            return view('temptate.general');
        }
      //************************************************************
        public function listesmat(){

            $mats=Materiel::orderBy('materiel_id','asc')->paginate(5);
            return view('temptate.listesmat',compact('mats'));
        }
        public function insertion_mat(){

            $categ = Categorie::all();
            $mat =  Materiel::all();
            return view('temptate.insertion_mat')->with('categ',$categ);
        }

        public function store(GetRequest $request){

            $data = new Materiel;
            $data->designation = $request->input('designation');
            $data->marque = $request->input('marque');
            $data->quantites = $request->input('quantites');
            $data->observation = $request->input('observation');
            $data->categorie_id = $request->input('categorie_id');
            $data->save();
            return redirect('home/listesmat')->with('message','data inserer avec succes !!!!');
       }

       public function editmat($materiel_id){

        $categ = Categorie::all();
        $mat = Materiel::find($materiel_id);
        return view('temptate.edit_mats')->with('mat',$mat)->with('categ',$categ);

       }

       public function updatemat(GetRequest $request,$materiel_id){
        $data =Materiel::find($materiel_id);
        $data->designation = $request->input('designation');
        $data->marque = $request->input('marque');
        $data->quantites = $request->input('quantites');
        $data->observation = $request->input('observation');
        $data->categorie_id = $request->input('categorie_id');
        $data->save();
        session()->flash('msg','Data has updated successfully');
        return redirect('home/listesmat')->with('message','data modifier avec succes !!!!');

       }

	  //******************************************************************

        public function listemvt(){
            $mvts=Mvt::orderBy('mvt_id','asc')->paginate(5);
            return view('temptate.listemvt',compact('mvts'));
        }

        public function insertmvt(){
            $mvt = Mvt::all();
            return view('temptate.insertmvt')->with('mvts',$mvt);
        }

         public function storemvt(mvtRequest $request){
            $data = new Mvt;
            $data->date_mvt = $request->input('datemvt');
            $data->type_mvt = $request->input('typemvt');
            $data->organe = $request->input('organe');
            $data->libresp = $request->input('responsable');
            $data->save();
            return redirect('home/listesmvt')->with('message','mouvement inserer avec succes !!!!');
        }

         public function editmvt($mvt_id){
			$mvt = Mvt::find($mvt_id);
			return view('temptate.edit_mvts')->with('mvt',$mvt);

		}

         public function updatemvt(mvtRequest $request,$mvt_id){
            $data =Mvt::find($mvt_id);
            $data->date_mvt = $request->input('datemvt');
            $data->type_mvt = $request->input('typemvt');
            $data->organe = $request->input('organe');
            $data->libresp = $request->input('responsable');
            $data->save();
            return redirect('home/listesmvt')->with('message','mouvement modifier avec succes !!!!');

        }




         public function detlist(){
            $mat =  Materiel::all();
            $mvts = Mvt::all();
            $det = detail::all();
            return view('temptate.detlist')->with('dets',$det);
         }

         public function adddetails($mvt_id){
            $categ = Categorie::all();
            $mat =  Materiel::all();
            $mvts = Mvt::all();
            $det = Mvt::find($mvt_id);
            $mvtDetail = Mvt::where('mvt_id',$mvt_id)
                         ->select('mvts.libresp as libresp','mvts.mvt_id as mvt_id')
                         ->first();
            return view('temptate.adddetails')->with('mat_v',$mat)->with('categ',$categ)->with('mvt',$mvts)->with('mvtDetail',$mvtDetail);

         }


         public function storedetails(Request $request){
              $datadet = new Detail;
              $datadet->materiel_id = $request->input('materiel_id');
              $datadet->nserie = $request->input('nserie');
              $datadet->dtefin = $request->input('datefin');
              $datadet->mvt_id = $request->mvt_id;
              $datadet->save();
              return  redirect('home/glob');

         }

         public function glob(){
            $dets = Detail::orderBy('materiel_id','asc')->paginate(5);
            return view('temptate.listes_det_mvt',compact('dets'));
         }

         public function show(){
           return view('temptate.show');

         }
}
