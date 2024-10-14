<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email_compose(){
        
        return view('admin.email.compose');
    }

    public function email_compose_post(Request $request){
        dd($request->all());
    }

}
