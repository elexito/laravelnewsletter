<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\MonthlyNewsletterJob;

class MonthlyNewsletterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthly:newsletter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send newsletter to users every second tuesday of the month';

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
        MonthlyNewsletterJob::dispatch();
        dump("done");
    }
}
