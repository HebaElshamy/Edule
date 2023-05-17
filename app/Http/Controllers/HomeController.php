<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            // return view('website.user.public-profile');
            return redirect()->route('user.welcome.profile',Auth::user()->id);
        }

    }
    public function index ()
    {
        $count_user = User::where('role' ,'=','user')->count();
        return view('admin.home',compact('count_user'));
    }

}
