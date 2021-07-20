<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->join('user_domicilios', 'users.id', '=', 'user_domicilios.user_id')
        ->select('users.name', 'users.email', 'users.fecha_nacimiento', 
        'user_domicilios.domicilio', 'user_domicilios.numero_exterior', 
        'user_domicilios.colonia', 'user_domicilios.cp', 'user_domicilios.ciudad')
        ->get();

        foreach ($users as $user) {
            $user->edad = Carbon::parse($user->fecha_nacimiento)->age;
        }

        return json_encode($users);
    }

}