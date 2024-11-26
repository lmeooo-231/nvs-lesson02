<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsAccountController extends Controller
{
    //
    public function index(){
        return"<h1>welome to Nguyễn Văn Sơn - controller </h1>";
    }
    // create form
    public function create(){
        return view('nvs-account-create');
    }
}
