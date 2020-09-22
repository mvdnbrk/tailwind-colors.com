<?php

namespace App\Providers;

use Illuminate\Http\JsonResponse;
use Domain\Palette\DefaultPalette;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')->group(base_path('routes/web.php'));

            Route::prefix('api')->get('palette.json', function (DefaultPalette $palette) {
                return new JsonResponse($palette->getData());
            });
        });
    }
}
