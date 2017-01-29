<?php
/**
 * Created by PhpStorm.
 * User: alireza
 * Date: 1/26/17
 * Time: 12:00 PM
 */

namespace App\Http\Controllers;


class AboutUsController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function index(){
        return view('aboutUs');
    }

}