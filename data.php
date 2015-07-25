<?php

$from="no-reply@giftywebs.in";
$email="atish.raina91@gmail.com";
$name=$_POST['Name'];
mail ( $email, $name, "From:".$from);

Print "Message Sent";

?>