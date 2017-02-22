<?php
namespace App\Providers;

use Illuminate\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use App\Models\Messages\ConversationRepository;
use App\Models\Messages\MessageRepository;
use App\Helpers\Messenger;

class MessengerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMessenger();
        $this->registerView();
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = config_path('messenger.php');

        $this->publishes([$source => config_path('messenger.php')]);
        $this->mergeConfigFrom($source, 'messenger');
    }

    /**
     * Register Talk class.
     *
     * @return void
     */
    protected function registerMessenger()
    {
        $this->app->singleton('Messenger', function (Container $app) {
            return new Messenger($app[ConversationRepository::class], $app[MessageRepository::class]);
        });
    }

    protected function registerView()
    {
        $this->loadViewsFrom(resource_path('messenger'), 'messenger');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            Messenger::class
        ];
    }
}
