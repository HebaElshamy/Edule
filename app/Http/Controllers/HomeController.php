<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home()
    {
        if(Auth::user()->role =='admin')
        {
            return redirect()->route('admin.index');
        }
        else{
            // نركب الصفحة بتاعت التمبلت فى الداشبورد
            return view('website.user.public-profile');
        }

    }
}
