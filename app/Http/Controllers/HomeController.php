<?php

namespace App\Http\Controllers;

use App\User;
use Facebook\Facebook;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Facebook $facebook)
    {
        $this->user = $user;
        $this->facebook = $facebook;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->facebook->setDefaultAccessToken($this->user->access_token);
        dd($this->facebook->get('/me')->getGraphUser()); // 自分の情報
        dd($this->facebook->get('/me/friends')->getGraphList()); // 友人一覧

    }
}
