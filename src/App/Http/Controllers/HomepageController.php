<?php

namespace App\Http\Controllers;

use Domain\Palette\DefaultPalette;
use Illuminate\View\View;

class HomepageController
{
    public function __invoke(DefaultPalette $palette): View
    {
        return view('welcome', compact('palette'));
    }
}
