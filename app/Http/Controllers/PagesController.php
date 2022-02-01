<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'e-Commerce';
        return view('index', 
            compact('title'));
    } 

    public function store(Request $request)
    {
        
        $selectvalue = $request -> input('ChangeLanguage');


        return view('index/' .  $selectvalue,
            compact('selectvalue'));
    }
}
