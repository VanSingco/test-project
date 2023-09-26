<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home1() {
        return Inertia::render('Home1');
    }

    public function home2() {
        return Inertia::render('Home2');
    }
}
