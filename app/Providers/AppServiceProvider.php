<?php

namespace App\Providers;

use Auth;
use Hash;
use Illuminate\Support\ServiceProvider;
use Validator;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('passcheck', function($attribute, $value, $parameters)
        {
            return Hash::check($value, Auth::user()->getAuthPassword());
        });

        Validator::extend('usernamecheck', function($attribute, $value, $parameters)
        {
            if (in_array($value, ['posts', 'search', 'groups', 'groups', 'post', 'home', 'follow'])) return false;
            $filter = "[^a-zA-Z0-9\-\_\.]";
            return preg_match("~" . $filter . "~iU", $value) ? false : true;
        });

        Blade::extend(function($value, $compiler)
        {
           $value = preg_replace('/(?<=\s)@switch\((.*)\)(\s*)@case\((.*)\)(?=\s)/', '<?php switch($1):$2case $3: ?>', $value);
           $value = preg_replace('/(?<=\s)@endswitch(?=\s)/', '<?php endswitch; ?>', $value);

           $value = preg_replace('/(?<=\s)@case\((.*)\)(?=\s)/', '<?php case $1: ?>', $value);
           $value = preg_replace('/(?<=\s)@default(?=\s)/', '<?php default: ?>', $value);
           $value = preg_replace('/(?<=\s)@break(?=\s)/', '<?php break; ?>', $value);

           return $value;
        }); 
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
