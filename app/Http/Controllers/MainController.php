<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            "title" => "Home"
        ]);
    }

    public function premium()
    {
        return view('dashboard.premium', [
            "title" => "Premium"
        ]);
    }

    public function bot()
    {
        return view('dashboard.chatbot', [
            "title" => "Chatbot"
        ]);
    }
}
