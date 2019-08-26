<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $users = [
            ['firstName' => 'amir', 'lastName' => 'rahbar'],
            ['firstName' => 'mehdi', 'lastName' => 'mojaradi'],
            ['firstName' => 'amir', 'lastName' => 'montazer']

        ];

        return view('welcome', compact('users'));
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }
}
