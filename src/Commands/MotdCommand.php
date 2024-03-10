<?php

namespace Lexiandev\Motd\Commands;

use Illuminate\Console\Command;

class MotdCommand extends Command
{
    public $signature = 'laravel-motd';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
