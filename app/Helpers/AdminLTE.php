<?php

/*
 * Random colour
 */
if (! function_exists('random_color')) {
    function random_color()
    {
        $colors = array("primary", "secondary", "inf    o", "warning", "success", "danger",
        "gray-dark", "gray",
        "indigo", "lightblue", "navy", "purple", "fuchsia", "pink", "maroon", "orange", "lime", "teal", "olive"
        );
        return $colors[array_rand($colors)];
    }
}

/*
 * sidebar set active
 */
if (! function_exists('set_active')) {
    function set_active( $route ) {
        return request()->is($route) ? 'active' : '';
    }
}

/*
 * sidebar set menu open
 */
if (! function_exists('set_menu_open')) {
    function set_menu_open( $route ) {
        return request()->is($route) ? 'menu-is-opening menu-open' : '';
    }
}

/*
 * user avatar
 */
if (! function_exists('avatar')) {
    function avatar()
    {
        $avatar = asset('img/user.png');
        if(!empty(auth()->user()->getMedia('avatar')->first())){
            $avatar = auth()->user()->getMedia('avatar')->first()->getFullUrl();
        }

        return $avatar;
    }
}

/*
 * header get locale
 */
if (! function_exists('get_locale')) {
    function get_locale() {
        $flag = 'flag-icon flag-icon-my';

        if ((session()->has('locale') && (session()->get('locale') == 'en')) || (app()->getLocale() == 'en')) {
            $flag = 'flag-icon flag-icon-gb';
        }

        return $flag;
    }
}


/*
 * header get can be impersonated
 */
if (! function_exists('get_can_be_impersonated')) {
    function get_can_be_impersonated() {
        return App\Models\User::where('can_be_impersonated', '1')->count();
    }
}
