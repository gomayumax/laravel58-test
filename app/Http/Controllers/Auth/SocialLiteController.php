<?php
/**
 * Created by PhpStorm.
 * User: goma
 * Date: 2019-03-11
 * Time: 22:09
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;


class SocialLiteController extends Controller
{
    public function index()
    {
        return view('auth/index');
    }

    public function login()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
    }
}