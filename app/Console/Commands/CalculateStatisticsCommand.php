<?php

namespace App\Console\Commands;

use App\Models\Log;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CalculateStatisticsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $results = Log::select('params->geolocation->display as country'
     , 'ended_at_date')
           ->get()
           ->mapToGroups(function ($item, $key) {
               return [$item['country'] => $item['ended_at_date']];
           });


        $logs = array_map('array_count_values', $results->toArray());

        cache(['logs' => $logs]);

        $this->info('Logs cached.');
    }
}
