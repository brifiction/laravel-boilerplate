<?php

namespace App\Listeners\User;

use App\Events\User\UpdateAccount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateAccountNotification
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
     * @param UpdateAccount $event
     * @return void
     */
    public function handle(UpdateAccount $event)
    {
        //
    }
}
