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

    protected function changeFree($i){
        if ($this->event[$i]["price"] == "0") {
            return "Бесплатно";
        } else {
            return $this->event[$i]["price"] . " р.";
        }
    }

    public function createEvent()
    {
        $text = '';
        for ($i = 0; $i < count($this->event); $i++) {
            $text .= '<div class="event">';
            $text .= '<header>';
            $text .= '<p>' . $this->event[$i]["name"] . '</p>';
            $text .= '</header>';
            $text .= '<article>';
            $text .= '<p>' . $this->event[$i]["time"] . '</p>';
            $text .= $this->event[$i]["content"];
            $text .= '<p>' . $this->changeFree($i) . ' </p>';
            $text .= '<a href="' . $this->event[$i]["link"] . '">Подробнее..</a>';
            $text .= '</article>';
            $text .= '</div>';
        }

        return $text;
    }

    protected function changeCheck($i){
        if($this->event[$i]["checked"] == 1)
        {
            return "checked";
        }
        else
        {
            return "";
        }
    }

    public function listOfEvents(){
        $template = "";
        for ($i = 0; $i<count($this->event); $i++)
        {
            $template .= '<tr>';
            $template .= '<td>'.$this->event[$i]["name"].'</td>';
            $template .= '<td>';
            $template .= '<p>';
            $template .= $this->event[$i]["content"];
            $template .= '</p>';
            $template .= '</td>';
            $template .= '<td>'.$this->event[$i]["price"].'</td>';
            $template .= '<td>'.$this->event[$i]["time"].'</td>';
            $template .= '<td>'.$this->event[$i]["link"].'</td>';
            $template .= '<td><input type="checkbox" name="visible['.$this->event[$i]["id"].']" value="1" '.$this->changeCheck($i).'></td>';
            $template .= '</tr>';
        }

        return $template;
    }
}