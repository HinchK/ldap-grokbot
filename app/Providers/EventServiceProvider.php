<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'Adldap\Laravel\Events\Authenticating' => [
            'App\Listeners\LogAuthenticating',
        ],

        'Adldap\Laravel\Events\Authenticated' => [
            'App\Listeners\LogLdapAuthSuccessful',
        ],

        'Adldap\Laravel\Events\AuthenticationSuccessful' => [
            'App\Listeners\LogAuthSuccessful'
        ],

        'Adldap\Laravel\Events\AuthenticationFailed' => [
            'App\Listeners\LogAuthFailure',
        ],

        'Adldap\Laravel\Events\AuthenticationRejected' => [
            'App\Listeners\LogAuthRejected',
        ],

        'Adldap\Laravel\Events\AuthenticatedModelTrashed' => [
            'App\Listeners\LogUserModelIsTrashed',
        ],

        'Adldap\Laravel\Events\AuthenticatedWithCredentials' => [
            'App\Listeners\LogAuthWithCredentials',
        ],

        'Adldap\Laravel\Events\AuthenticatedWithWindows' => [
            'App\Listeners\LogSSOAuth',
        ],

        'Adldap\Laravel\Events\DiscoveredWithCredentials' => [
            'App\Listeners\LogAuthUserLocated',
        ],

        'Adldap\Laravel\Events\Importing' => [
            'App\Listeners\LogImportingUser',
        ],

        'Adldap\Laravel\Events\Synchronized' => [
            'App\Listeners\LogSynchronizedUser',
        ],

        'Adldap\Laravel\Events\Synchronizing' => [
            'App\Listeners\LogSynchronizingUser',
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
