<?php


class LinkedList
{
public $firstNode;
public $lastNode;
public $count;
public function __construct()
{
    $this->firstNode=NULL;
    $this->lastNode=NULL;
    $this->count=0;
}

    public function addFirst($data)
    {
        $node1=new Node($data);
        if ($this->firstNode){

            $node1->link=$this->firstNode;
            $this->firstNode=$node1;
        }else{
            $this->firstNode=$node1;
            $this->lastNode=$node1;
        }
        $this->count++;
        
}

    public function addLast($data)
    {
        if ($this->firstNode!=NULL){
            $link=new Node($data);
            $this->lastNode->link=$link;
            $link->link=NULL;
            $this->lastNode=$link;
            $this->count++;
        }else{
            $this->addFirst($data);
        }
}

    public function readList()
    {
        $listData=[];
        $current=$this->firstNode;
        while ($current!=NULL){
            array_push($listData,$current->readData());
            $current=$current->link;
        }
        return $listData;
}



    public function totalNodes()
    {
        return $this->count;
}
}