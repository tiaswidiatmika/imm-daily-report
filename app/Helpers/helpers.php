<?php

// check if a number is even number
if (! function_exists('isEven') ) {
    function isEven ($integer) {
        return $integer % 2 === 0 ? true : false;
    }
}