<?php
include_once "MyList.php";

$arr =[1,2,3,4,5,6];
$arr2 = [11,22,33,44,55,66];
$mylist = new MyList(100,$arr);
$mylist->insert(3,11);
$mylist->add(33);
$mylist->add(44);
$mylist->add(51);
$mylist->add(55);
$mylist->add(88);
$mylist->add(77);

$mylist->remove(0);

$mylist->addAll($arr2);
echo  $mylist->size();
echo "<br>";
echo $mylist->indexOf(44)."<br>";
echo "<br>";
echo $mylist->get(0)."<br>";
$mylist->isEmpty().'<br>';
$mylist->sort();
/*$mylist->clear();*/
$mylist->reset();
echo "<pre>";
print_r($mylist);