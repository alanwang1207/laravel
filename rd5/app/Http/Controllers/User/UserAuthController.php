<?php

//命名空間
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{

    //註冊頁
    public function signUpPage()
    {
        $binding = [
            'title' => '註冊',
        ];
        return view('auth.signUp', $binding);
    }
}
?>

