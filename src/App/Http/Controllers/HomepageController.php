<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Palette\DefaultPalette;
use Illuminate\View\View;

final class HomepageController
{
    public function __invoke(DefaultPalette $palette): View
    {
        return view('welcome', compact('palette'));
    }
}
