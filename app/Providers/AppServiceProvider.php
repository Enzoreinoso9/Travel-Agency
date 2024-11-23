<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Layouts\App as AppLayout;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('layouts.app', AppLayout::class);
        Blade::component('input-label', \App\View\Components\InputLabel::class);
        Blade::component('text-input', \App\View\Components\TextInput::class);
        Blade::component('input-error', \App\View\Components\InputError::class);
        Blade::component('primary-button', \App\View\Components\PrimaryButton::class);
        Blade::component('application-logo', \App\View\Components\ApplicationLogo::class);
        Blade::component('nav-link', \App\View\Components\NavLink::class);
    }
}
