<?php

declare(strict_types=1);

namespace App\View\Components;

use Domain\Palette\DefaultPalette;
use Illuminate\View\Component;
use Illuminate\View\View;

final class Palette extends Component
{
    private DefaultPalette $palette;

    public function __construct(DefaultPalette $palette)
    {
        $this->palette = $palette;
    }

    public function palette(): DefaultPalette
    {
        return $this->palette;
    }

    public function render(): View
    {
        return view('components.palette');
    }
}
