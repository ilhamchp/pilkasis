<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        if(!Session::get('login')){
            return redirect('login')
                ->with('sweetError', 'Anda harus login terlebih dahulu!');
        }
        else{
            return view('beranda');
        }
    }
}
