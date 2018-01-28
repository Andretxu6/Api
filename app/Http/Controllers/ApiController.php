<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reparto;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('apiAuth');
    }
    public function usuarios(){
        return User::all();
    }

    public function usuarioEspecifico($id){
        return User::find($id);
    }

    public function repartos($id){
        return Reparto::where('usuario_id', $id)->get();
    }
}
