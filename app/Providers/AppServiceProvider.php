<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
       Schema::defaultStringLength(191);

    RateLimiter::for('login-attempts', function (Request $request) {
       //return Limit::perMinute(5)->by($request->user()?->id ?: $request->ip());

      return Limit::perMinute(5)
      ->by($request->user()?->id ?: $request->ip())
      ->response(function (Request $request, array $headers) {
        //return response('Custom response...', 429, $headers);
        return back()->withInput()->with('status', 'Limite atingido! Tente novamente em 5 minutos');
    });


    });





    }

}
