<?php

use Carbon\Carbon;

/*
 * String to datetime format
 */
if (! function_exists('to_datetime')) {
    function to_datetime(String $date, String $time)
    {
        return Carbon::createFromFormat('d/m/Y h:i A', $date . ' ' . $time);
    }
}

/*
 * String to datetime format
 */
if (! function_exists('to_date')) {
    function to_date(Carbon $datetime)
    {
        return $datetime->format('d/m/Y');
    }
}

/*
 * String to datetime format
 */
if (! function_exists('to_time')) {
    function to_time(Carbon $datetime)
    {
        return $datetime->format('h:i A');
    }
}
