<?php


/*
 * String to datetime format
 */

use Illuminate\Bus\Dispatcher;

if (! function_exists('custom_dispatch')) {
    function custom_dispatch($job)
    {
        return app(Dispatcher::class)->dispatch($job);
    }
}
