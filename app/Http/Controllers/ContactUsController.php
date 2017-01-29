<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function index()
    {
        return view('contactUs');
    }
}
