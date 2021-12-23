<?php

namespace App\Http\Controllers;

use App\Models\DepartConteneur;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Toastr;

class DepartConteneursController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index()
        {
            $depart = \DB::table('depart_conteneurs')->orderBy('id','desc')->get();
            return view('pages.backend.depart_conteneur.list')->with('depart',$depart);
        }

        public function create()
        {
            return view('pages.backend.depart_conteneur.add');
        }

        public function store(Request $request)
        {

            $depart = new DepartConteneur();
            $depart->pays  = $request->pays;
            $depart->nom_conteneur  = $request->nom_conteneur;
            $depart->date_depart = Carbon::parse($request->date_depart);
            $depart->date_arrive = Carbon::parse($request->date_arrive);
            $depart->save();
            Toastr::success("Depart du   $request->nom_conteneur  ajouter avec succes :)",'Success');
            return redirect()->route('depart.index');
        }

        public function show(DepartConteneur $departConteneur)
        {
            //
        }

        public function edit(DepartConteneur $departConteneur)
        {
            //
        }

        public function update(Request $request)
        {

        }
        public function updateDepart(Request $request)
        {

            DB::beginTransaction();
            try{
                $id           = $request->id;
                $pays  = $request->pays;
                $nom_conteneur  = $request->nom_conteneur;
                $date_depart = Carbon::parse($request->date_depart);
                $date_arrive = Carbon::parse($request->date_arrive);
                $update = [
                    'id' => $id,
                    'pays'=>$pays,
                    'nom_conteneur' => $nom_conteneur,
                    'date_depart' => $date_depart,
                    'date_arrive' => $date_arrive,
                ];
                DepartConteneur::where('id',$request->id)->update($update);
                DB::commit();
                Toastr::success("Depart Conteneur  $request->nom  Update avec succes :)",'Success');
                return redirect()->route('depart.index');

            }catch(Exception $e){
                DB::rollback();
                Toastr::error('Holiday update fail :)','Error');
                return redirect()->back();
            }
        }

        public function  destroy(Request $request){
            DepartConteneur::destroy($request->id);
            Toastr::success("Tarification suprimer avec succes :)",'Success');
            return redirect()->route('depart.index');
            //
        }
}
