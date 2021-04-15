<?php

namespace Sevming\LaravelHelper;

class LaravelServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        foreach (glob(__DIR__ . '/helpers/*.php') as $helperFile) {
            require_once $helperFile;
        }
    }
}
