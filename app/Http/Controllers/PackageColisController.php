<?php

namespace App\Http\Controllers;

use App\Models\PackageColis;
use App\Models\Tarification;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PackageColisController extends Controller
{
    public function tracking(Request $request){
        $index =$request->colis;

        try {
            $colis = new PackageColis();
            $this->$colis = PackageColis::where('index_suivie','=',$index)->firstOrFail();
            return view('pages.front.trackingStep',['colis'=>$this->$colis]);
        } catch (ModelNotFoundException $e) {
            Toastr::success("Colis Non Trouvé :)", 'Error');
            return redirect()->route('site');
        }


    }


    public function imprimmerTicket($id){
        $colis = PackageColis::findOrFail($id);
       return view("pages.backend.suiviColis.print_labels");
    }

    public function tarckingId($id)
    {
        $colis = PackageColis::findOrFail($id);
        //$tarif = Tarification::findOrFail($colis->nom_colis);
        return view('pages.backend.suiviColis.print', ['colis' => $colis,]);
    }
    public function trackingUpdate(Request $request)
    {
        $etape = $request->etape;
        $id = $request->id;
        $p = PackageColis::where('id', $id)->first()->update(['etat' => $etape]);
        Toastr::success("Etape du colis modifier avec succes :)", 'Success');
        return redirect()->route('suivieList');
    }

    public function searchTraking(Request $request)
    {

        $stat = $request->status;

           $pac  = DB::table('package_colis')->get();
           // search by name
            if($request->index)
            {
                $pac=null;
                $pac = PackageColis::where('index_suivie','=',$request->index)->get();
            }

            // search by role name
            if($request->email)
            {
                $pac=null;
                $pac = PackageColis::where('email_exp','=',$request->email)->get();
            }

            // search by status
             if($stat!=100){
                    $pac = DB::table('package_colis')->where('etat','=',$stat)->get();
                }



            return view("pages.backend.suiviColis.listes", compact('pac'));
        }

}
