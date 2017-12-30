<?php

namespace Chrisgeary92\Boilerplate;

class App
{
    /**
     * Singleton instance
     * 
     * @var null|App
     */
    protected static $instance = null;

    /**
     * Create a new singleton instance
     * 
     * @return App
     */
    public static function instance()
    {
        if (!is_a(App::$instance, App::class)) {
            App::$instance = new App;
        }

        return App::$instance;
    }

    /**
     * Bootstrap the plugin
     * 
     * @return void
     */
    protected function __construct()
    {
        $this->constants();
        $this->includes();
        $this->hooks();
    }

    /**
     * Register constants
     *
     * @return void
     */
    protected function constants()
    {
        // ...
    }

    /**
     * Include/require files
     *
     * @return void
     */
    protected function includes()
    {
        // ...
    }

    /**
     * Register actions & filters
     *
     * @return void
     */
    protected function hooks()
    {
        // ...
    }
}
