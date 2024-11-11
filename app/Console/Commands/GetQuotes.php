<?php

namespace App\Console\Commands;

use App\Models\Quote;
use App\Services\KayneWestApiService;
use Illuminate\Console\Command;

class GetQuotes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-quotes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(KayneWestApiService $service)
    {
        Quote::insert($service->getRandomQuotes());
    }
}
