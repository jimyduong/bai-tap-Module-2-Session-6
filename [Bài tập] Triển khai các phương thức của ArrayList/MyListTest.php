<?php
include "MyList.php";

$mylist = new MyList();
$mylist->addLast(1);
$mylist->addLast(2);
$mylist->addLast(3);
$mylist->addLast(4);
$mylist->add(3,66);

echo $mylist->contains(23);
echo"<br>";
echo $mylist->indexOff(4);
echo"<br>";
var_dump($mylist->CloneArr());
echo"<br>";
echo $mylist->remove(4);
var_dump($mylist->CloneArr());