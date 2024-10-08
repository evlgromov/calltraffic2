<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MonitoringService\MonitoringServiceInterface;

class NotifyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(MonitoringServiceInterface $monitoringService)
    {
        $monitoringService->check();
    }
}
