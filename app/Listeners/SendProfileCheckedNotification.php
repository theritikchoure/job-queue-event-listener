<?php

namespace App\Listeners;

use App\Events\SomeoneCheckedProfile;
use App\Jobs\SendProfileCheckedMailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendProfileCheckedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SomeoneCheckedProfile  $event
     * @return void
     */
    public function handle(SomeoneCheckedProfile $event)
    {
        //$event->user;

        $delay = now()->addSeconds(5);
        SendProfileCheckedMailJob::dispatch($event->user)->delay($delay);
    }
}
