<?php


class Node
{
public $data;
public $link;
public function __construct($data)
{
    $this->data=$data;
}

    public function readData()
    {
        return $this->data;
}
}