<?php

namespace App\Http\Controllers;

use App\Models\heroPage;
use App\Models\Manpage;
use App\Models\Womanpage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $hero=heroPage::first();
        $woman=Womanpage::all();
        $man=Manpage::all();
        return view('pages.index',compact('hero','woman','man'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }
}
