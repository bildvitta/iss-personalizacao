<?php

namespace Bildvitta\IssPersonalizacao;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bildvitta\IssPersonalizacao\Commands\IssPersonalizacaoCommand;

class IssPersonalizacaoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('iss-personalizacao')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_iss-personalizacao_table')
            ->hasCommand(IssPersonalizacaoCommand::class);
    }
}
