<?php

use Sajadsdi\LaravelHeading\Heading;

if (!function_exists('heading')) {
    function heading(string $name = null, mixed $value = null): mixed
    {
        $heading = app()->make(Heading::class);
        if ($name) {
            if($value){
                $heading->{$name} = $value;
            }else{
                return $heading->{$name};
            }
        }
        return $heading;
    }
}
