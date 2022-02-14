<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Go extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $comparison = Carbon::now()->subDays(30);
        $id = DB::table('notifications')->where('priority','=', 52)->where('created_at', '<=', $comparison)
       ->delete();

    if ($id) {
       echo("You're Lucky! Deleted.");
    } else {
       echo("Sorry! Couldn't find one."); 
    }
}
    }
