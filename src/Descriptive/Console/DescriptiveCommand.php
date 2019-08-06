<?php namespace Mrhn\Descriptive\Console;

use Exception;
use Illuminate\Console\Command as IlluminateCommand;

class DescriptiveCommand extends IlluminateCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'descriptive:openapi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate an OpenAPI (Swagger) documentation.';

    /**
     * Execute the console command.
     *
     * @throws Exception
     *
     * @return int
     */
    public function handle()
    {
        $exit = 0;

        return $exit;
    }
}
