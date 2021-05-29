<?php

namespace App\Http\Controllers;

use App\Client;
use App\Jobs\QueueEmail;
use Illuminate\Http\Request;
use App\Mail\SuscribeCustomerMail;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // session()->flash('message', 'Inscription reussit. Vous allez recevoir un mail.');
        return view('clients.create')->with('message', 'Inscription reussit. Vous allez recevoir un mail.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=> 'required|min:3|max:100',
            'wallet' => 'required|min:5|max:150',
            'email' => 'required|email|max:150|unique:users',
            'amount' => 'required|numeric'
        ]);

        $client  = new Client;
        $client->username = request('username');
        $client->email = request('email');
        $client->adresse = request('wallet');
        $client->montant = request('amount');  
        $client->save();

       
        dispatch(new QueueEmail($client)); 



        session()->flash('message', 'Check your mailbox. You will receive an email in a few seconds');

        return redirect()->route('investment'); 
    }

   
}
