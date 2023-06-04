<?php

$name = "Zoya";
$age = 23;
$phone = "9876543210";

var_dump($name);

$salary = 22480.88;
$bonus = 4000;

var_dump($bonus);
var_dump($salary + $bonus);


$on_leave = false;

var_dump($on_leave);


// Additional (For Information Purpose Only)

// --

var_dump(false == false);
var_dump(true == true);
var_dump(true == false);
var_dump(false == true);

// -- AND and &&

// True && True => True
// True && False => False
// False && True => False
// False && False => False

var_dump (false && false);

// -- OR and ||

// True || True => True
// True || False => True
// False || True => True
// False || False => False

var_dump (false || false || true);