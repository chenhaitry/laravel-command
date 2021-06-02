<?php

namespace Chenhaitry\LaravelCommand\Provider;

use Chenhaitry\LaravelCommand\Console\Commands\LaravelHelperCommand;
use Chenhaitry\LaravelCommand\Console\Commands\LaravelObserverCommand;
use Chenhaitry\LaravelCommand\Console\Commands\LaravelRepositoryCommand;
use Chenhaitry\LaravelCommand\Console\Commands\MakeViewCommand;
use Chenhaitry\LaravelCommand\Console\Commands\ScrapViewCommand;
use Illuminate\Support\ServiceProvider as ServiceProvider;


class LaravelCommandServiceProvider extends ServiceProvider
{

    protected $commands = [
        LaravelObserverCommand::class,
        LaravelRepositoryCommand::class,
        LaravelHelperCommand::class,
        MakeViewCommand::class,
        ScrapViewCommand::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
