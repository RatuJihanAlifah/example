<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function form()
    {
        return view('form'); // Membuat tampilan untuk form user
    }

    public function index()
    {
        return view('welcome'); // Membuat tampilan untuk index user
    }

}
