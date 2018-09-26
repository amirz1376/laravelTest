<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewHomeController extends Controller
{
    // new home function
    public function home()
    {
      return view('home');
    }
}
