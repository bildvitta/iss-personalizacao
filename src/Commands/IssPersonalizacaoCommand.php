<?php

namespace Bildvitta\IssPersonalizacao\Commands;

use Illuminate\Console\Command;

class IssPersonalizacaoCommand extends Command
{
    public $signature = 'iss-personalizacao';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
