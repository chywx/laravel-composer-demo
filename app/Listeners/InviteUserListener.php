<?php

namespace App\Listeners;

use App\Events\InviteUserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteUserListener
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
     * @param  InviteUserEvent  $event
     * @return void
     */
    public function handle(InviteUserEvent $event)
    {
        dump($event->id);
        dump($event->username);
    }
}
