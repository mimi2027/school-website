<?php
include('connect.php');

	$name=$_POST['name'];
	$age=$_POST['age'];
    $address=$_POST['address'];
	$email=$_POST['email'];
  
  
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
	  $age = mysqli_real_escape_string($db_con, $_POST["age"]);
   $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
	$id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE student SET name = '$name', age = '$age', address = '$address', email = '$email' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "student Record Updated Successfully!";
        header("Location:viewstudent.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>






