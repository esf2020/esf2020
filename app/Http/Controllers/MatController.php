<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware\checkCategory;
use App\Models\Materiel;
use App\Models\Categorie;
use App\Models\Mvt;
use App\Models\Detail;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class MatController extends Controller
{
        public function  __construct(){

            $this->middleware('checkCategory')->only('insertion_mat');
        }

        public function index(){
                $countdet = DB::table('mvts')
                ->join('details', 'mvts.mvt_id', '=', 'details.mvt_id')
                ->select('*')
                ->where('mvts.datefin',null)
                ->count();
                 //dd($countdet);
            /** Sum des qte de touts les articles existes  */
                $totalqte= DB::table('materiels')->sum('quantites');

                $count = DB::table('materiels')->count();
            /** qte mat par categegorie */
                $UNITE_CENTRALE = Materiel::where('categorie_id',1)->sum('quantites');
                $PC_PORTABLE = Materiel::where('categorie_id',2)->sum('quantites');
                $SERVEUR = Materiel::where('categorie_id',3)->sum('quantites');
                $CLAVIERS = Materiel::where('categorie_id',4)->sum('quantites');
                $ECRAN  = Materiel::where('categorie_id',5)->sum('quantites');
                $SWITCH = Materiel::where('categorie_id',6)->sum('quantites');
                $FIREWALL = Materiel::where('categorie_id',7)->sum('quantites');
                $DSLAM = Materiel::where('categorie_id',8)->sum('quantites');
                $GATWAYGSM = Materiel::where('categorie_id',9)->sum('quantites');
                $MODEMADSL = Materiel::where('categorie_id',10)->sum('quantites');
                $MATERIELRESEAU = Materiel::where('categorie_id',11)->sum('quantites');
                $RALLONGE = Materiel::where('categorie_id',12)->sum('quantites');
                $Webcam  = Materiel::where('categorie_id',13)->sum('quantites');
                $Video_CONFERENCE = Materiel::where('categorie_id',14)->sum('quantites');
                $Scanner = Materiel::where('categorie_id',15)->sum('quantites');
                $APPAREIL_TELEPHONIQUE = Materiel::where('categorie_id',16)->sum('quantites');
                $CLIMATISEUR= Materiel::where('categorie_id',17)->sum('quantites');
                $TABLETTE= Materiel::where('categorie_id',18)->sum('quantites');
                $Divers= Materiel::where('categorie_id',19)->sum('quantites');
                $Materiel_VSAT= Materiel::where('categorie_id',20)->sum('quantites');
                $ONDULEUR= Materiel::where('categorie_id',21)->sum('quantites');
                $RADIO= Materiel::where('categorie_id',22)->sum('quantites');
                $Video_Projecteur= Materiel::where('categorie_id',23)->sum('quantites');
                $Materiels_juges= Materiel::where('categorie_id',24)->sum('quantites');
                $Sourie= Materiel::where('categorie_id',25)->sum('quantites');

            /** Quantites diponible du materiel */
                $qtedisponible = $totalqte - $countdet;
                /** nombre des mouvement existes */
                $finmvt = DB::table('mvts')->whereNotNull('datefin')->count();
                $countmvt = Mvt::where('datefin',null)->count();

            return view('temptate.home',compact('totalqte','count','countmvt','countdet','SERVEUR','UNITE_CENTRALE','PC_PORTABLE','SWITCH',
                             'CLAVIERS','ECRAN','qtedisponible','Sourie','Materiels_juges','Video_Projecteur','RADIO','ONDULEUR',
                             'Materiel_VSAT','Divers','TABLETTE','CLIMATISEUR','APPAREIL_TELEPHONIQUE','Scanner','Video_CONFERENCE',
                             'Webcam','RALLONGE','MATERIELRESEAU','MODEMADSL','GATWAYGSM','DSLAM','FIREWALL','finmvt'

                            ));
        }

//************************************************************
        public function listesmat(){

             $showdata = DB::table('categories')
            ->join('materiels', 'categories.categorie_id', '=', 'materiels.categorie_id')
            ->get();
            return view('temptate.listesmat',compact('showdata'));
        }

        public function insertion_mat(){

            $categ = Categorie::all();
            $mat =  Materiel::all();
            return view('temptate.insertion_mat')->with('categ',$categ);
        }

        public function store(Request $request){

            $this->validate($request,[
            'designation' => 'required|min:2',
            'marque' => 'required|min:2|alpha',
            'quantites' => 'required',
            'observation' => 'required',
            'categorie_id' =>'required'
            ]);
            $data = new Materiel;
            $data->designation = $request->input('designation');
            $data->marque = $request->input('marque');
            $data->quantites = $request->input('quantites');
            $data->observation = $request->input('observation');
            $data->categorie_id = $request->input('categorie_id');
            $data->save();
            return redirect('home/listesmat')->with('message',' Données inserer avec succes !!!!');
       }

       public function editmat($materiel_id){

        $categ = Categorie::all();
        $mat = Materiel::find($materiel_id);
        return view('temptate.edit_mats')->with('mat',$mat)->with('categ',$categ);

       }

       public function updatemat(Request $request,$materiel_id){
        $this->validate($request,[
            'designation' => 'required|min:2',
            'marque' => 'required|min:2|alpha',
            'quantites' => 'required',
            'observation' => 'required',
            'categorie_id' =>'required'
            ]);
        $data =Materiel::find($materiel_id);
        $data->designation = $request->input('designation');
        $data->marque = $request->input('marque');
        $data->quantites = $request->input('quantites');
        $data->observation = $request->input('observation');
        $data->categorie_id = $request->input('categorie_id');
        $data->save();
        //session()->flash('msg','Data has updated successfully');
        return redirect('home/listesmat')->with('message',' Données modifier avec succes !!!!');

       }


        public function listemvt(){

            $mvts=Mvt::all();
            return view('temptate.listemvt',compact('mvts'));
        }

        public function insertmvt(){
            $mvt = Mvt::all();
            return view('temptate.insertmvt')->with('mvts',$mvt);
        }

         public function storemvt(Request $request){
            $this->validate($request,[
                'datemvt' => 'required|date',
                'typemvt' => 'required|min:2|alpha',
                'organe' => 'required|min:2',
                'responsable' => 'required|min:2',

                ]);
            $data = new Mvt;
            $data->date_mvt = $request->input('datemvt');
            $data->type_mvt = $request->input('typemvt');
            $data->organe = $request->input('organe');
            $data->libresp = $request->input('responsable');
            $data->datefin = $request->input('datefin');
            $data->save();
            return redirect('home/listesmvt')->with('message',' Mouvement inserer avec succes !!!!');
        }

         public function editmvt($mvt_id){
			$mvt = Mvt::find($mvt_id);
			return view('temptate.edit_mvts')->with('mvt',$mvt);

		}

         public function updatemvt(Request $request,$mvt_id){

            $this->validate($request,[
                'datemvt' => 'required|date',
                'typemvt' => 'required|min:2|alpha',
                'organe' => 'required|min:2|alpha',
                'responsable' => 'required|min:2',


                ]);
            $data =Mvt::find($mvt_id);
            $data->date_mvt = $request->input('datemvt');
            $data->type_mvt = $request->input('typemvt');
            $data->organe = $request->input('organe');
            $data->libresp = $request->input('responsable');
            $data->datefin = $request->input('datefin');
            $data->save();
            return redirect('home/listesmvt')->with('message',' Mouvement modifier avec succes !!!!');

        }
        /* public function detlist(){
            $mat =  Materiel::all();
            $mvts = Mvt::all();
            $det = detail::all();
            return view('temptate.detlist')->with('dets',$det);
         }*/

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
              $datadet->mvt_id = $request->mvt_id;
              $datadet->save();
              return  redirect('home/glob');
         }

         public function glob(){
            $dets = DB::table('materiels')
            ->join('details', 'materiels.materiel_id', '=', 'details.materiel_id')
            ->orderBy('mvt_id','asc')
            ->paginate(6);
           // $dets = Detail::orderBy('materiel_id','asc')->paginate(5);
            return view('temptate.listes_det_mvt',compact('dets'));
         }

         public function show($materiel_id){

            $mat = Materiel::find($materiel_id);
			return view('temptate.show',compact('mat'));

         }
//******************************************************************

         public function home_v(){
             $showdata = DB::table('categories')
             ->join('materiels', 'categories.categorie_id', '=', 'materiels.categorie_id')
             ->get();

             $countdet = DB::table('mvts')
             ->join('details', 'mvts.mvt_id', '=', 'details.mvt_id')
             ->select('*')
             ->where('mvts.datefin',null)
             ->count();
              //dd($countdet);
         /** Sum des qte de touts les articles existes  */
             $totalqte= DB::table('materiels')->sum('quantites');
             $count = DB::table('materiels')->count();
         /** qte mat par categegorie */
             $UNITE_CENTRALE = Materiel::where('categorie_id',1)->sum('quantites');
             $PC_PORTABLE = Materiel::where('categorie_id',2)->sum('quantites');
             $SERVEUR = Materiel::where('categorie_id',3)->sum('quantites');
             $CLAVIERS = Materiel::where('categorie_id',4)->sum('quantites');
             $ECRAN  = Materiel::where('categorie_id',5)->sum('quantites');
             $SWITCH = Materiel::where('categorie_id',6)->sum('quantites');
             $FIREWALL = Materiel::where('categorie_id',7)->sum('quantites');
             $DSLAM = Materiel::where('categorie_id',8)->sum('quantites');
             $GATWAYGSM = Materiel::where('categorie_id',9)->sum('quantites');
             $MODEMADSL = Materiel::where('categorie_id',10)->sum('quantites');
             $MATERIELRESEAU = Materiel::where('categorie_id',11)->sum('quantites');
             $RALLONGE = Materiel::where('categorie_id',12)->sum('quantites');
             $Webcam  = Materiel::where('categorie_id',13)->sum('quantites');
             $Video_CONFERENCE = Materiel::where('categorie_id',14)->sum('quantites');
             $Scanner = Materiel::where('categorie_id',15)->sum('quantites');
             $APPAREIL_TELEPHONIQUE = Materiel::where('categorie_id',16)->sum('quantites');
             $CLIMATISEUR= Materiel::where('categorie_id',17)->sum('quantites');
             $TABLETTE= Materiel::where('categorie_id',18)->sum('quantites');
             $Divers= Materiel::where('categorie_id',19)->sum('quantites');
             $Materiel_VSAT= Materiel::where('categorie_id',20)->sum('quantites');
             $ONDULEUR= Materiel::where('categorie_id',21)->sum('quantites');
             $RADIO= Materiel::where('categorie_id',22)->sum('quantites');
             $Video_Projecteur= Materiel::where('categorie_id',23)->sum('quantites');
             $Materiels_juges= Materiel::where('categorie_id',24)->sum('quantites');
             $Sourie= Materiel::where('categorie_id',25)->sum('quantites');

         /** Quantites diponible du materiel */
             $qtedisponible = $totalqte - $countdet;
             /** nombre des mouvement existes */
             $finmvt = DB::table('mvts')->whereNotNull('datefin')->count();
             $countmvt = Mvt::where('datefin',null)->count();


             return view('home_v',
             compact('showdata','totalqte','count','countmvt','countdet','SERVEUR','UNITE_CENTRALE','PC_PORTABLE','SWITCH',
                             'CLAVIERS','ECRAN','qtedisponible','Sourie','Materiels_juges','Video_Projecteur','RADIO','ONDULEUR',
                             'Materiel_VSAT','Divers','TABLETTE','CLIMATISEUR','APPAREIL_TELEPHONIQUE','Scanner','Video_CONFERENCE',
                             'Webcam','RALLONGE','MATERIELRESEAU','MODEMADSL','GATWAYGSM','DSLAM','FIREWALL','finmvt'

                            ));
         }

}
