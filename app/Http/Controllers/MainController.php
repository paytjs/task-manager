<?php

namespace App\Http\Controllers;

/**
 * Class MainController
 * @package App\Http\Controllers
 */
class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
