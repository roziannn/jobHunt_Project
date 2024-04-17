<?php

//1. create Helpers Global
//2. after that, register it to composer.json -> on :"autoload"
//3. create a function

//note: dump autoload as we make changes into our composer --composer du

/** Check input error */
if (!function_exists('hasError')) { //jika blm ada, tambahkan
    function hasError($errors, string $name): ?String
    {
        return $errors->has($name) ? 'is-invalid' : '';
    }
}
