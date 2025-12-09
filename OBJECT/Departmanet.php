<?php
require "User.php";

$user1 = new User();
$user1 -> set_name("Juan");
$user1 -> set_lastName("Lippens");
echo ("First name:" . $user1-> getName());
echo ("Last name:" . $user1-> getLastName());