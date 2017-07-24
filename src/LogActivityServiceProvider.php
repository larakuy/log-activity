<?php
namespace Larakuy\LogActivity;

use Illuminate\Support\ServiceProvider;

class LogActivityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(realpath($this->packagePath('database/migrations')));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('logactivity', function() {
            return new LogActivity();
        });
    }

    /**
     * Loads a path relative to the package base directory
     * @param string $path
     * @return string
     */
    protected function packagePath($path = '')
    {
        return sprintf("%s/../%s", __DIR__, $path);
    }

}
