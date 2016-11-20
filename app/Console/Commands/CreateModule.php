<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateModule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates different elements for creating a module';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $name = $this->argument('name');

        $module = str_replace('-', ' ', $name);

        $app_name = config('app.name');

        if (!preg_match("/[a-z]/i", $module)) {
            $this->error('Please input module name in small letters and without any special characters!!!');
            exit();
        }

        // Create repository folder
        if (!File::isDirectory(app_path('Repositories'))) {
            File::makeDirectory(app_path('Repositories'));
            File::makeDirectory(base_path('config') . '\\' . $app_name);
        }

        // Create Repository file
        File::put(app_path('Repositories') . '\\' . ucwords($module) . 'Repository.php', '<?php namespace App\\Repositories; class ' . ucwords($module) . 'Repository {}');

        // Create controller
        $this->call('make:controller', ['name' => ucwords($module) . 'Controller']);

        // Create model
        $this->call('make:model', ['name' => ucwords($module), '--migration' => 'true']);

        // Create config
        File::put(base_path('config') . '\\'.$app_name.'\\' . $name . '.php', '<?php return [];');

    }
}
