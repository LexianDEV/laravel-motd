<?php

namespace Lexiandev\Motd;

use Lexiandev\Motd\Commands\MotdCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MotdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-motd')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-motd_table')
            ->hasCommand(MotdCommand::class);
    }
}
