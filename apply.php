<?php
$loc = $_POST['location'];
$detail = $_POST['details'];
$conn = mysqli_connect("localhost", "root","", "farm");
$query ="insert into application(location, details)values('$loc', '$detail')";
$result = mysqli_query($conn, $query);
if($result)
  echo '<h1 align="center">Thank you for applying. We  appreciate!</h1>';
else
die("Something terrible happened. Please try again. ");
?>