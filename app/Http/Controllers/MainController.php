<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

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
