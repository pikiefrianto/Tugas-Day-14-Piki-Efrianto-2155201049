<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {   
        $dataUsers = Users::all();
        return view('users',['dataUsers' => $dataUsers]);
    }

}
