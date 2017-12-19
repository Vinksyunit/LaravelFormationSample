<?php

namespace FormationLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use FormationLaravel\Http\ViewComposers\MovieComposer;

class MonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('movies/listing', MovieComposer::class);
        Blade::directive('fullname', function($person) {
            return '<?php echo ' . $person . '[\'firstname\'] . " " . ' . $person . '[\'lastname\']; ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind('MovieList', \FormationLaravel\Repositories\Movies::class);
    }
}
