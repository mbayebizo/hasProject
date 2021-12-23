<?php

namespace App\Http\Controllers;

use App\Models\Tarification;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Http\Request;

class TarificationsController extends Controller
{
    public function showTarification()
    {
        $tarification = Tarification::all();
        return view('dashboard.tarification',['tarification' => $tarification]);
    }

    public function addTarification(Request $request)
    {
        $tarification = new Tarification();
        $tarification->pays  = $request->pays;
        $tarification->category  = $request->category;
        $tarification->prix = $request->prix;
        $tarification->nom = $request->nom;
        $tarification->save();
        Toastr::success("Tarification  $request->nom  ajouter avec succes :)",'Success');
        return redirect()->route('listTarification');
    }
    public function updateTarification(Request $request)
    {
        DB::beginTransaction();
        try{
            $id           = $request->id;

            if($request->pays!=null){
                $pays  = $request->pays;
            }
            if($request->category!=null){
                $category  = $request->category;
            }
            $prix = $request->prix;
            $nom = $request->nom;

            $update = [

                'id' => $id,
                'nom' => $nom,
                'category' => $category,
                'pays' => $pays,
                'prix' => $prix,
            ];
            Tarification::where('id',$request->id)->update($update);
            DB::commit();
            Toastr::success("Tarification  $request->nom  Update avec succes :)",'Success');
            return redirect()->route('listTarification');

        }catch(Exception $e){
            DB::rollback();
            Toastr::error('Holiday update fail :)','Error');
            return redirect()->back();
        }
    }
    public function destroy(Request $request){
        Tarification::destroy($request->id);
        Toastr::success("Tarification suprimer avec succes :)",'Success');
        return redirect()->route('listTarification');
    }
    public function index()
    {
        $sn = DB::table('depart_conteneurs')->where('pays','sn')->latest('id')->first();
        $ml = DB::table('depart_conteneurs')->where('pays','ml')->latest('id')->first();
        $ci = DB::table('depart_conteneurs')->where('pays','ci')->latest('id')->first();
        return view('pages.tarification')->with('sn',$sn)->with('ml',$ml)->with('ci',$ci);

    }

    public function selectProduit(Request $request)
    {
        $pays = $request->route('pays');
        $tarification = DB::table('tarifications')->where('pays', '=', $pays)->get();
        return response()->json($tarification);
    }


    public function edit(Request $request)
    {
        $tarification = $request->route('id');
        $tarif = DB::table('tarifications')->get()->where('id', '=', $tarification);
        return response()->json($tarif);
    }

}
