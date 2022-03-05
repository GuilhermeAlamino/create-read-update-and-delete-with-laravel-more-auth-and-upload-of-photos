<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Crud;

class WelcomeController extends Controller
{
    public function welcomeList(){
        $lists = Crud::paginate(2);
        return view('user-register.welcome-user', compact('lists'));
    }
}
