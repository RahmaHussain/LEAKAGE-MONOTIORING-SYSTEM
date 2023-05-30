<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function dashboard()
    {
        return view('user.home');
    }
    public function users()
    {
        return view('user.users');
    }
}
