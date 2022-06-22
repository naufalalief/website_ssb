<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.setting');
    }
    public function payment()
    {
        return view('payment');
    }
}
