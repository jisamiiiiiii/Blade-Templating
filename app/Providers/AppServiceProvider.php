<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        
        view()->share('universityName', 'University of Mindanao');

        
        Blade::directive('upper', function ($expression) {
            return "<?php echo strtoupper($expression); ?>";
        });

        
        Blade::directive('lower', function ($expression) {
            return "<?php echo strtolower($expression); ?>";
        });
    }
}