<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Gate::define('update-event', function ($user, Event $event) {
//            return $user->id == $event->user_id;
//        });
//
//        Gate::define('delete-attendee', function ($user, Event $event, Attendee $attendee) {
//            return $user->id == $event->user_id || $user->id == $attendee->user_id;
//        });
//        Gate::policy(Event::class, EventPolicy::class);
    }
}
