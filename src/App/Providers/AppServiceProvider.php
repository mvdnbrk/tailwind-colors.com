<?php

namespace App\Providers;

use Domain\Palette\DefaultPalette;
use Domain\Palette\FileLoader;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(DefaultPalette::class, function () {
            $filename = Str::of(config('palette.versions.default'))->replace('.', '')->prepend('palette-v')->__toString();

            return new DefaultPalette(
                new FileLoader(new Filesystem, $filename, resource_path('json'))
            );
        });
    }

    public function boot(): void
    {
        //
    }
}
