<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public  function productdetails(Request  $request ,  $id = null )
    {
        return view('front.products.product_details') ; 
    }
    public  function modeldetails(Request  $request ,  $id = null)
    {
        return view('front.models.modeldetails') ; 
    }
}
