<?php

namespace App\Ship\Kernels;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as LaravelConsoleKernel;

/**
 * Class ConsoleKernel
 *
 * A.K.A (app/Console/Kernel.php)
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class ConsoleKernel extends LaravelConsoleKernel
{

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
<<<<<<< HEAD:app/Ship/Engine/Kernels/ShipConsoleKernel.php
        // You can register your command manually here, or just put your command class in the `app/Ship/Commands`
        // folder, and it will get auto-magically registered by the `app/Ship/Engine/Loaders/ConsolesLoaderTrait.php`.
=======

>>>>>>> 8034a6da973fcb5e26dc0cd185bf0e11dcd092f9:app/Ship/Kernels/ConsoleKernel.php
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // TODO: to uncomment.

        // $this->load(__DIR__.'/Commands');

        // require base_path('routes/console.php');
    }

}
