<?php
namespace App\Http\Controllers;

class UserController extends Controller{
    public function userProfile()
    {
        return view('user-profile');
    }
}
