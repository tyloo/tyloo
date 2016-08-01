<?php

if (! function_exists('active_state')) {
    function active_state($path, $active = ' is-active') {
        return call_user_func_array('Request::is', (array) $path) ? $active : '';
    }
}
