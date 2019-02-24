<?php

namespace App\Console\Commands;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class GrokConfigFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grok:configfiles {file?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage application config files';

    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    private $disk;
    /**
     * The path to the configuration files.
     *
     * @var string
     */
    private $configPath;


    /**
     * Create a new command instance.
     *
     * @param Filesystem $disk
     * @param string $configPath
     */
    public function __construct(Filesystem $disk, $configPath = '')
    {
        parent::__construct();
        $this->disk = $disk;
        $this->configPath = $configPath ? $configPath : config_path();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $configFiles = $this->configFiles();
        // If the user didn't provide a file, we'll ask him to choose one of
        // the files already existing in the config directory.
        if (($file = $this->argument('file')) === null) {
            $file = $this->choice('Please select a file', $configFiles);
        }
        // Otherwise, if a file was provided we'll check if the file doesn't
        // exist, and if so, we'll show an error and exit.
        else {
            if (! in_array($file, $configFiles)) {
                return $this->error('The provided config file was not found!');
            }
        }
        // Once a file is selected we'll bring the content of this file, which is
        // an array, and present it in a table view. We'll use the renderRows()
        // method to convert the file content to renderable table rows.
        $this->displayTable($file);
        // After displaying the table, we'll ask the user to check if he wants to
        // add a new configuration file.
        if ($this->confirm('Would you like to create a new file?')) {
            // If the answer is "yes", we ask him to provide a file name and check
            // to see if we can create it by checking the file already exists.
            $newFile = $this->ask('File name [ex: facebook]');
            if (in_array($newFile, $configFiles)) {
                return $this->error('File already exists!');
            }
            file_put_contents($this->configPath."/{$newFile}.php", "<?php\n\n return [];");
            return $this->info("{$newFile}.php was created successfully!");
        }
        return $this->warn("No file was created!");
    }

    /**
     * The array of all available application config files.
     *
     * @return array
     */
    private function configFiles()
    {
        $array_map = [];
        foreach ($this->disk->files($this->configPath) as $key => $file) {
            $array_map[$key] = basename($file, '.php');
        }
        return $array_map;
    }
    /**
     * Display a table with the file content.
     *
     * @param $file
     * @return void
     */
    private function displayTable($file)
    {
        if (! $file) {
            return;
        }
        $this->table(
            ['Key', 'Value'],
            $this->renderRows((array) include $this->configPath."/{$file}.php")
        );
    }
    /**
     * Render the table rows from the given array of values.
     *
     * @param $fileContent
     * @return array
     */
    private function renderRows($array)
    {
        $array = Arr::dot($array);
        $output = [];
        foreach ($array as $key => $value) {
            $output[] = [$key, $value];
        }
        return $output;
    }
}
