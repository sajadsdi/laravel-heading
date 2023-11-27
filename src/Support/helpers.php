<?php

use Illuminate\Contracts\Container\BindingResolutionException;
use Sajadsdi\LaravelHeading\Heading;

if (!function_exists('heading')) {
    /**
     * @param string|null $name
     * @param mixed|null $value
     * @return mixed|Heading
     */
    function heading(string $name = null, mixed $value = null): mixed
    {
        $heading = app()->make(Heading::class);
        if ($name) {
            if($value){
                $method = 'set' . ucfirst($name);
                $heading->{$method}($value);
            }else{
                $method = 'get' . ucfirst($name);
                return $heading->{$method}();
            }
        }
        return $heading;
    }
}
