<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu
{
    private $array_menu;
    public function __construct($arr)
    {
        $this->array_menu = $arr;
    }
    public function construirMenu()
    {
        $ret_menu = "<nav><ul>";
        foreach ($this->array_menu as $opcion) {
            $ret_menu .= "<li>" . $opcion . "</li>";
        }
        $ret_menu .= "</ul></nav>";
        return $ret_menu;
    }
}
