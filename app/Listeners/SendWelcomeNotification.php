<?php

namespace App\Listeners;

use App\Mail\Welcome;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeNotification
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
     * @param Verified $event
     * @return void
     */
    public function handle(Verified $event)
    {
        if ($event->user->hasVerifiedEmail()) {
            // send a welcome email, after user email is verified
            Mail::to($event->user->email)->send(new Welcome($event->user));
        }
    }
}
