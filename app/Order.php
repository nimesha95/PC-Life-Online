<?php
/**
 * Created by PhpStorm.
 * User: Nimesha
 * Date: 9/28/2017
 * Time: 12:54 PM
 */

namespace App;


class Order
{
    public $order;

    public function addRow($content)
    {
        $count = 0;
        foreach ($content as $row) {
            $this->order[$count] = array($row->name, $row->qty, $row->price, $row->total);
            $count++;
        }
    }


}