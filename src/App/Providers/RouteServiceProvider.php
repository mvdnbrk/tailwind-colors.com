<?php

namespace App\Providers;

use App\Http\Controllers\Api\PaletteController;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('stateless')->group(base_path('routes/web.php'));

            Route::middleware([
                'stateless',
                'cache.headers:public;max_age=86400;etag',
            ])
                ->prefix('api')
                ->get('palette.json', PaletteController::class);
        });
    }
}
