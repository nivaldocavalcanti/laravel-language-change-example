<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function lang(Request $request) 
    {
        if($request->has('locale')){
            session()->put('locale', $request->locale);
            app()->setLocale(session()->get('locale'));
            return response()->json(true);
        } else {
            return false;
        }
    }

}
