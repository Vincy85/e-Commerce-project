<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = __('Products');
        return view('Products.index',
            compact('title'));
    }

    public function show($id)
    {
        return $id;
    }


    public function search_product(Request $request)
    {
        $request = $_GET['q'];
    }



    public function categories()
    {
        $title = __('Categories');
        return view('Products.categories',
        compact('title'));
    }

    public function clothes_categorie()
    {
        $title =  __('Vêtements') ;
        return view('Products.Categories.clothes',
        compact('title'));
    }

    
    public function hats_categorie()
    {
        $title =  __('Cheveu') ;
        return view('Products.Categories.hats',
        compact('title'));
    }

        
    public function bags_categorie()
    {
        $title =  __('Sacs') ;
        return view('Products.Categories.bags',
        compact('title'));
    }

    public function shoes_categorie()
    {
        $title =  __('Shoes') ;
        return view('Products.Categories.shoes',
        compact('title'));
    }


}
