<?php

$conn=mysqli_connect("db","user","test","myDb");
if(!$conn)
die ('unable to connect to database');
else echo 'hello world';
?>
