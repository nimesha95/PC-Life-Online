<?php

namespace App;

class Item_info
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

?>