<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = DB::select('SELECT * FROM clients');
        return view('welcome', ['clients'=>$clients]);
    }
    public function saveClients(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');

        DB::insert("INSERT INTO clients(name, email, age) VALUES(?, ?, ?)", [$name, $email, $age]);

        return response()->json(['Message'=> 'client Added']);
    }
}
