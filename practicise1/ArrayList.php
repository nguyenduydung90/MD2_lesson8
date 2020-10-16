<?php


class ArrayList
{
    public $arraylist;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arraylist = $arr;
        } else {
            $this->arraylist = [];
        }
    }

    public function add($data)
    {
        array_push($this->arraylist,$data);
    }

    public function get($index)
    {
        if($this->isInteger($index)&&$index<$this->size());
    }

    public function size()
    {
        return count($this->arraylist);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}