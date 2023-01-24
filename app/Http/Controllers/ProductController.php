<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $fruits = array('Mango', 'Paw paw', 'Orange', 'Apple');

        return view('welcome', compact('fruits'));
    }
}
