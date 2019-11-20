<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function index(){
        $shops=Shop::All();
        return view('tiendas.create',['shops'=>$shops]);
    }
}
