<?php
/**
 * Created by PhpStorm.
 * User: alireza
 * Date: 1/24/17
 * Time: 8:53 AM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function index(){
        return view('home');
    }
}