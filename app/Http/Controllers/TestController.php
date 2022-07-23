<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        return back()->with(['sent' => true]);
    }
}
