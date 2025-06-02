<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Bus\Batchable;
use Illuminate\Foundation\Bus\Dispatchable;



class JobDemo implements ShouldQueue
{
    use Queueable ,Batchable, Dispatchable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        \Mail::to('abod.gomo@gmail.com')->queue(new \App\Mail\DemoMail);

    }
}
