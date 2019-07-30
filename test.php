<?php
$a = new User();
$a->name = "amy";
$b = clone  $a;
$b->name = "rty";
echo "$a->name"."$b->name";

class User
{
    public $name;
}
?>