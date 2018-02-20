<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 30.10.2017
 * Time: 9:35
 */

namespace EvDay;

class Events
{

    public $type;
    public $order;

    /**
     * Конструктор.
     */
    public function __construct($mass = null)
    {
        $this->type = $mass["typeOfFilter"];
        $this->order = $mass["filterOrder"];
    }

    /**
     * Что сортируем?
     * @return string
     */
    public function orderSort ()
    {
        if($this->order == "less")
        {
            return "`".$this->type."` ASC";
        }
        elseif($this->order == "more")
        {
            return "`".$this->type."` DESC";
        }
    }

    /**
     * Что сортируем?
     * @return string
     */
    public function typeSort ()
    {
        if($this->type == "price")
        {
            return $this->orderSort();
        }
        elseif($this->type == "time")
        {
            return $this->orderSort();
        }
    }
}