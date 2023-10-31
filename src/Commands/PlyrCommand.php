<?php

namespace Plyr\Plyr\Commands;

use Illuminate\Console\Command;

class PlyrCommand extends Command
{
    public $signature = 'plyr';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
