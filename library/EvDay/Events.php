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

    protected $type;
    protected $order;
    protected $post;
    protected $event;

    /**
     * Конструктор.
     */
    public function __construct($mass = null, $event = null)
    {
        $this->type = $mass["typeOfFilter"];
        $this->order = $mass["filterOrder"];
        $this->post = $mass;
        $this->event = $event;
    }

    /**
     * Что сортируем?
     * @return string
     */
    protected function orderSort ()
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

    public function changeFree($i){
        if ($this->event[$i]["price"] == "0") {
            return "Бесплатно";
        } else {
            return $this->event[$i]["price"] . " р.";
        }
    }

    public function changeCheck($i){
        if($this->event[$i]["checked"] == 1)
        {
            return "checked";
        }
        else
        {
            return "";
        }
    }
}