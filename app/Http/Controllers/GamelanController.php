<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamelanController extends Controller
{
    public function index()
    {
        return view('gamelanhome');
    }
}