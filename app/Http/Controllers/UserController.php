<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = [
            'Camilee',
            'Katarina',
            'Aatroxx',
            'Annie',
            'Skarner',
        ];

        $title = "Listado de usuarios";

        return view('users.index',compact('title','users'));
    }

    public function  show($id,$nickname = null){
        if($nickname) {
            return "Bienvenido $nickname, es hora de empezar tu instrucción, tu id es: $id";
        }else{
            return "¿Aún no te haz registrado?, resgistrate aquí";
        }
    }

    public function create(){
        return "haz creado un nuevo usuario";
    }
}
