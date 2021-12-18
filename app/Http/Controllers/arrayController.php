<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arrayController extends Controller
{
    function index()
    {
        $users = ['Fred', 'Julian', 'Grace', 'Colliens', 'Steven'];
        return view('index', ['users' => $users]);
    }
}
