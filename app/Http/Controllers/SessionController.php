<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo 'No data in this session'; 
        }
    }

    public function storeSessionData()
    {
        
    }
}
