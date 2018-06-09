<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('admin');
    }*/

    // 后台登陆页
    public function index(){

        \Auth::loginUsingId(2);

       // \Auth::logout();

        return view('admin.login');

    }

    // 登陆行为
    public function store(){

    }

}
