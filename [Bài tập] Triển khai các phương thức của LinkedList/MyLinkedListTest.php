<?php
include "Node.php";
include "MyLinkedList.php";

$linkedList = new MyLinkedList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$linkedList->add(3,3333312);

$totalNodes = $linkedList->totalNodes();

$linkData = $linkedList->getList();

echo $totalNodes;
echo "<br>";
echo implode ('-' , $linkData);
echo "<br>";
$linkedList->remove(3);
$linkData = $linkedList->getList();
echo implode ('-' , $linkData);
echo "<br>";
$linkedList->removeObject(33);
$linkData = $linkedList->getList();
echo implode ('-' , $linkData);
echo "<br>";
echo $linkedList->contains(44);
echo "<br>";
echo $linkedList->indexOf(11);
echo "<br>";
echo $linkedList->getFirst();
echo "<br>";
echo $linkedList->getLast();
echo "<br>";
echo $linkedList->get(0);
echo "<br>";

