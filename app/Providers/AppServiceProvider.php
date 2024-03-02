<?php

namespace App\Providers;

use App\Models\AdminSetting;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($view) {
            if (Schema::hasTable('admin_settings')) {
                $setting = AdminSetting::latest('id')->first();
                $view->with('admin_setting', $setting);
            }
        });

        view()->composer('*', function ($view) {
            if (Schema::hasTable('settings')) {
                $setting = Setting::latest('id')->first();
                $view->with('setting', $setting);
            }
        });
    }
}
