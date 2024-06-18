<?php

$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];

$conn = mysqli_connect("localhost:3308", "root", "", "registration");
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO datatable(name,password,email) VALUES('$name','$password','$email')";


if (mysqli_query($conn, $sql)) 

{
  echo "New record created successfully";

} else 

{


  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
