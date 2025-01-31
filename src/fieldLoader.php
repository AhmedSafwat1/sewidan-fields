<?php

use SewidanField\Field;

if (!function_exists('field')) {

    function field($theme = null)
    {
        $field = new Field($theme);
        return $field;
    }

}


// GET THE CURRENT LOCALE
if (! function_exists('locale')) {

    function locale() {
        return app()->getLocale();
    }

}

if (!function_exists('SewidanGetTagConfig')) {

    function SewidanGetTagConfig($type, $config)
    {
        if (isset($config[$type]) && isset($config[$type]['active']) && $config[$type]['active'])
            return $config[$type];

        return false;
    }

}
if (!function_exists('sewidanOptionsToStr')) {

    function sewidanOptionsToStr($options)
    {
        $response = '';

        foreach ($options as $option => $value) :
            $response .= $option .'='. $value .' ';
        endforeach;

        return $response;
    }

}

if (! function_exists('fieldOptionExists')) {

    function fieldOptionExists($options , $key , $value = false){

        if(array_key_exists($key,$options)) {
            if($options[$key] == null)
                return false;

            if($value != false) {
                if($options[$key] == $value) {
                    return true;
                }else{
                    return false;
                }
            }
            return true;
        }
        return  false;
    }

}