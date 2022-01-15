<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function products()
    {
        return view('website.products');
    }

    public function details()
    {
        return view('website.product_details');
    }

    public function cart()
    {
        return view('website.cart');
    }

    public function checkout()
    {
        return view('website.checkout');
    }

    public function wishlist()
    {
        return view('website.wishlist');
    }

    public function contact()
    {
        return view('website.contact');
    }
}