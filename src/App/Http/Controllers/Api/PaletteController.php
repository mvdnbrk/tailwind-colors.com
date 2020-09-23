<?php

namespace App\Http\Controllers\Api;

use Domain\Palette\DefaultPalette;
use Illuminate\Http\JsonResponse;

final class PaletteController
{
    public function __invoke(DefaultPalette $palette): JsonResponse
    {
        return new JsonResponse($palette->toArray());
    }
}
