<?php

namespace Vormkracht10\TwoFactorAuth\Listeners;

use Laravel\Fortify\Events\TwoFactorAuthenticationChallenged;
use Laravel\Fortify\Events\TwoFactorAuthenticationEnabled;
use Vormkracht10\TwoFactorAuth\Notifications\SendOTP;

class SendTwoFactorCodeListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TwoFactorAuthenticationChallenged | TwoFactorAuthenticationEnabled $event): void
    {
        $event->user->notify(app(SendOTP::class));
    }
}
