<?php

namespace Bitfumes\SpamFree;

use Illuminate\Support\ServiceProvider;

class SpamFreeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/SpamFree.php', 'spamfree');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
