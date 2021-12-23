<?php

namespace App\Http\Controllers;

use App;

use App\Models\PackageColis;
use App\Models\Planification;
use App\SMS\SMSPartnerAPI;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Nette\Utils\Random;




class PlanificationController extends Controller
{
    public function planingColis(Request $request,FlasherInterface $flasher)
    {

        $plan = new Planification();
        $plan->name_exp = $request->name_exp;
        $plan->societe_exp = $request->societe_exp;
        $plan->adresse_exp = $request->adresse_exp;
        $plan->ville_exp = $request->ville_exp;
        $plan->pays_exp = $request->pays_exp;
        $plan->email_exp = $request->email_exp;
        if(!str_contains($request->phone_exp,"+33")){
            $plan->phone_exp = "+33".$request->phone_exp;
        }else{
            $plan->phone_exp = $request->phone_exp;
        }

        $plan->name_dest = $request->name_dest;
        $plan->societe_dest = $request->societe_dest;
        if ($request->pays_dest == "senegal"){
            if(!str_contains($request->phone_dest,"+221")){
                $plan->phone_dest = "+221".$request->phone_dest;
            }else{
                $plan->phone_dest = $request->phone_dest;
            }
            $plan->ville_dest = "DAKAR";
        }
        elseif ($request->pays_dest == "mali"){
            if(!str_contains($request->phone_dest,"+223")){
                $plan->phone_dest = "+223".$request->phone_dest;
            }else{
                $plan->phone_dest = $request->phone_dest;
            }
            $plan->ville_dest = "BAMAKO";
        }
        elseif ($request->pays_dest == "cote_ivoire"){
            if(!str_contains($request->phone_dest,"+225")){
                $plan->phone_dest = "+225".$request->phone_dest;
            }else{
                $plan->phone_dest = $request->phone_dest;
            }
            $plan->ville_dest = "ABIDJAN";
        }

        $plan->pays_dest = $request->pays_dest;
        $plan->email_dest = $request->email_dest;
        $plan->nom_colis = $request->nom_colis;
        $plan->qte_colis = $request->qte_colis;
        $plan->date_enlevement = Carbon::createFromFormat('d/m/Y', $request->date_enlevement);
        if($request->decharge=="on"){
            $plan->decharge =0;
        }

        $plan->save();


        $smspartner = new SMSPartnerAPI();
        $fields = array(
            "apiKey"=>"4651fbd96a313077959fb3e75a70abaf51517e6c",
            "phoneNumbers"=>$plan->phone_exp,
            "message"=>"Votre planification d'enlèvement de colis a été pris en compte.
    Un agent va entrer en contact avec vous pour la confrmation dans les meilleir délai",
            "sender" => "HASLOGISTCS"
        );

       // $result = $smspartner->sendSms($fields);

       // Mail::to($plan->email_exp)->send(new PlanificationMail($plan->name_exp));
        $flasher->addSuccess('Planification effectué :)');
        return Redirect::route("site");
    }

    public function demandePlaning()
    {
        $planification =Planification::select("*")
            ->where("decharge", 0)
            ->orderByDesc("id")
            ->get();
        return view('pages.backend.planifications.demande', ['planification' => $planification]);
    }

    public function valide($id)
    {
        $planification = Planification::findOrFail($id);
        return view('pages.backend.planifications.valideDemande', ['planification' => $planification]);
    }

    public function validationPlaning($id)
    {
        $p = Planification::where('id', $id)->first()->update(['decharge' => 1]);
        $plan = Planification::findOrFail($id);
        //send mail
        $smspartner = new SMSPartnerAPI();
        $fields = array(
            "apiKey"=>"4651fbd96a313077959fb3e75a70abaf51517e6c",
            "phoneNumbers"=>$plan->phone_exp,
            "message"=>"Votre planification d'enlèvement de colis a été confirmé".
    "Un agent d'enlèvement viendra récuper le colis a la date :  ".$plan->date_enlevement,
            "sender" => "HASLOGISTCS"
        );

          $result = $smspartner->sendSms($fields);

        //Mail::to($pc->email_exp)->send(new EnvlementMail($pc));
        Toastr::success("Enlèvement Valider avec succes :)", 'Success');
        return redirect()->route('demandePlaning');
    }
    public function listePlaning()
    {
       /* $planification = DB::table('planifications')
            ->where('decharge','=',1)
            ->orderBy('id', 'desc')
            ->get();*/
        $planification  = Planification::select("*")
            ->where("decharge", 1)
            ->orderByDesc("id")
            ->get();
        return view('pages.backend.planifications.liste', ['planification' => $planification]);
    }

    public function edit($id)
    {
        $planification = Planification::findOrFail($id);
        return view('pages.backend.planifications.planing', ['planification' => $planification,]);
    }

    public function enlever(Request $request)
    {
        $id = $request->id;
        $p = Planification::where('id', $id)->first()->update(['decharge' => 3]);
        $p = Planification::where('id', $id)->first()->update(['nom_colis'=>$request->name]);
        $p = Planification::where('id', $id)->first()->update(['qte_colis'=>$request->nombre]);

        $planification = Planification::findOrFail($id);

        if ($planification->pays_dest == "senegal")
            $pays = "sn";
        elseif ($planification->pays_dest == "mali")
            $pays = "ml";
        elseif ($planification->pays_dest == "cote_ivoire")
            $pays = "ml";
        $arrive = DB::table('depart_conteneurs')->where('pays', $pays)->latest('id')->first();

        $pc = new PackageColis();
        $pc->name_exp = $planification->name_exp;
        $pc->societe_exp = $planification->societe_exp;
        $pc->adresse_exp = $planification->adresse_exp;
        $pc->ville_exp = $planification->ville_exp;
        $pc->pays_exp = $planification->pays_exp;
        $pc->email_exp = $planification->email_exp;
        $pc->phone_exp = $planification->phone_exp;
        $pc->name_dest = $planification->name_dest;
        $pc->societe_dest = $planification->societe_dest;
        if ($planification->pays_dest == "senegal")
            $pc->ville_dest = "DAKAR";
        elseif ($planification->pays_dest == "mali")
            $pc->ville_dest = "BAMAKO";
        elseif ($planification->pays_dest == "cote_ivoire")
            $pc->ville_dest = "ABIDJAN";
        $pc->pays_dest = $planification->pays_dest;
        $pc->email_dest = $planification->email_dest;
        $pc->phone_dest = $planification->phone_dest;
        $pc->nom_colis = $planification->nom_colis;
        $pc->qte_colis = $planification->qte_colis;
        $pc->date_groupage = Carbon::now();
        $pc->index_suivie = 'HPC-' . Random::generate(6, '0-9a-z');
        $pc->reference = strtoupper(
                $pc->index_suivie
            ) . time();

        $pc->etat = 0;
        $generator = new BarcodeGeneratorHTML();
        $barcode = base64_encode($generator->getBarcode($pc, $generator::TYPE_CODE_128));
        $pc->code_bare = $barcode;
        $pc->date_arrive_prevu = $arrive->date_arrive;
        $pc->date_depart_prevu = $arrive->date_depart;
        $pc->nom_conteneur = $arrive->nom_conteneur;

            $pc->save();
        //send mail
        $smspartner = new SMSPartnerAPI();
        $fields = array(
            "apiKey"=>"4651fbd96a313077959fb3e75a70abaf51517e6c",
            "phoneNumbers"=>$pc->phone_exp,
            "message"=>"Le groupage de votre colis est effectué dans le conteneur N°: ".$pc->nom_conteneur.
                ". Veillez suivre les étapes de votre colis avec cette réference : ".$pc->index_suivie,
            "sender" => "HASLOGISTCS"
        );

        $result = $smspartner->sendSms($fields);

        Mail::to($pc->email_exp)->send(new EnvlementMail($pc));

        Toastr::success("Enlèvement du colis   $pc->index_suivie  ajouter avec succes :)", 'Success');
        return redirect()->route('suivieList');

    }

    public function suivisList()
    {
        $pac = DB::table('package_colis')
            ->orderBy('id','desc')
            ->get();
        return view("pages.backend.suiviColis.listes", ["pac" => $pac]);
    }

    public function colisEnlever($id)
    {
        $colis = PackageColis::findOrFail($id);
        return view('pages.backend.suiviColis.detail', ['colis' => $colis]);
    }

    public function searchPlaning(Request $request)
    {
        $stat = $request->status;

        $planification  = DB::table('planifications')->get();
        // search by name
        if($request->name)
        {
            $planification=null;
            $planification = Planification::where('name_exp','=',$request->name)->get();
        }

        // search by role name
        if($request->email)
        {
            $planification=null;
            $planification = Planification::where('email_exp','=',$request->email)->get();
        }

        // search by status
        if($stat!=100){
            $planification = DB::table('planifications')->where('decharge','=',$stat)->get();
        }



        return view("pages.backend.planifications.liste", compact('planification'));
    }
}
