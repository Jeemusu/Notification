<?php 

namespace Jeemusu\Notification;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Jeemusu\Notification\SessionStore',
            'Jeemusu\Notification\LaravelSessionStore'
        );

        $this->app->singleton('notification', function () {
            return $this->app->make('Jeemusu\Notification\Notification');
        });
    }

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
    public function boot()
    {

    }

}
