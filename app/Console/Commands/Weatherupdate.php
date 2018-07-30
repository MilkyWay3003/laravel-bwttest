<?php

namespace App\Console\Commands;

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class Weatherupdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weatherupdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'weather update every hour';

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
        DB::table('weathers')->delete();
        WeatherController::parser();
        WeatherController::myparser();        
    }
}
