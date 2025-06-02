<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Bus\Batchable;




class JobDemo2 implements ShouldQueue
{
    use Queueable , Dispatchable ,Batchable ;
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
