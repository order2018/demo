<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 后台登陆页
    public function index(){

        return view('admin.login');

    }

    // 登陆行为
    public function store(){

    }

}
