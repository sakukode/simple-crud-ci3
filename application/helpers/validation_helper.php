<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('selected_combobox'))
{
    function selected_combobox($value1, $value2)
    {
        return $value1 === $value2 ? "selected" : null;
    }   
}