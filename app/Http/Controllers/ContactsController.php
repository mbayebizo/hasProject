<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class ContactsController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function create()
    {
        //
    }

    public function store(Request $request,FlasherInterface  $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',

        ]);
        if ($validator->fails()) :
            $flasher->addError("Error Form");
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        endif;
        $msm = new Contact();

        $msm->name = $request->name;
        $msm->email = $request->email;
        $msm->subject = 'INFO';
        $msm->phone = $request->phone;
        $msm->message = $request->message;

        $msm->save();
        $flasher->addSuccess('Message envoyé !');
        return Redirect::back();
    }


    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        //
    }
    public function showallMessage(){
        $contact = Contact::all();
        $messageLu = Contact::where('vue',1)->count();
        $messageNonLu =Contact::where('vue',0)->count();
        return view('pages.backend.contact')->with('contact',$contact)->with('messageLu',$messageLu)->with('messageNonLu',$messageNonLu);

    }

    public function view($id){

        $mc = Contact::where('id',$id)->first()->update(['vue' => 1]);
        $m = Contact::where('id',$id)->first();
        return view('pages.backend.contacts.view', ['message' => $m]);
    }

}
