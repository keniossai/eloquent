<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h1>' . '<br>';

        $slice = Str::of('Welcome to my Dev Place')->after('my Dev Place');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controller\Control')->after('\\');
        echo $slice2 . '<br>';

        $slice3 = Str::of('Hello ')->append('World!');
        echo $slice3 . '<br>';

        $result = Str::of('NOW YOU KNOW')->lower();
        echo $result . '<br>';

    }
}
