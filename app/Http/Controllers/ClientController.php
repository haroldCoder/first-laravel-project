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
}
