<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.home');
    }
    public function about(){
        return view('about.about');
    }
    public function contact(){
        return view('contact.contact');
    }
    public function product_detail(){
        return view('single_product.single_product');
    }
    public function product(){
        return view('product.product');
    }
}
