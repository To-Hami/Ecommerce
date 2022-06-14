<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public  function dashboard(){
        return view('backend.index');
    }

    public  function login(){
        return view('backend.login');
    }

    public  function register(){
        return view('backend.register');
    }
}
