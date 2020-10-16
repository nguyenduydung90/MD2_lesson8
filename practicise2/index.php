<?php
include_once 'LinkedList.php';
include_once 'Node.php';

$link1=new LinkedList();
$link1->addFirst(2);
$link1->addFirst(3);
$link1->addFirst(4);
$link1->addFirst(5);
$link1->addLast(7);
$toltalNodes=$link1->totalNodes();
$linkdata=$link1->readList();
 echo $toltalNodes;
 echo '<br>';
 echo implode('-',$linkdata);

