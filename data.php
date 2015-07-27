<html>

<?php

$from="no-reply@giftywebs.in";
$email="atish.raina91@gmail.com";
$name=$_POST['inputName'];
$emil=$_POST['inputEmail'];
$query=$_POST['inputMessage'];
$temp = $emil . $query;
mail($email, $name, $temp, "From:".$from);

?>

Your query has been submitted. Kindly <a href="about.html" style = "font-size: 20; font-weight: bold"> Click Here </a> to go back.

</html>