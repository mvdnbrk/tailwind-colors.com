<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomepageController
{
    public function __invoke(): View
    {
        return view('welcome');
    }
}
