<?php namespace Mrhn\Descriptive;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Mrhn\Descriptive\Console\DescriptiveCommand;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->commands([
            DescriptiveCommand::class,
        ]);
    }
}
