<?php

namespace Chenhaitry\LaravelCommand;

use Chenhitry\LaravelCommand\Console\Commands\LaravelHelperCommand;
use Chenhitry\LaravelCommand\Console\Commands\LaravelObserverCommand;
use Chenhitry\LaravelCommand\Console\Commands\LaravelRepositoryCommand;
use Illuminate\Support\ServiceProvider;


class LaravelCommandServiceProvider extends ServiceProvider
{

    protected $commands = [
        LaravelObserverCommand::class,
        LaravelRepositoryCommand::class,
        LaravelHelperCommand::class
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
