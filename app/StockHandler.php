<?php
/**
 * Created by PhpStorm.
 * User: Nimesha
 * Date: 12/5/2017
 * Time: 1:36 AM
 */

namespace App;


class StockHandler
{
    public $items = [];

    function addToArray($key, $value)
    {
        $this->items[$key] = $value;
    }

    function returnArr()
    {
        return $this->items;
    }
}