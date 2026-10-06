<?php

session_start();

include('connect.php');


/* =========================================
   CHECK FORM SUBMISSION
========================================= */

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["create"])) {

    header("Location: createstudent.php");
    exit;
}


/* =========================================
   GET FORM DATA
========================================= */

$name  = trim($_POST["name"] ?? "");
$age   = trim($_POST["age"] ?? "");
$address = trim($_POST["address"] ?? "");
$email   = trim($_POST["email"] ?? "");


/* =========================================
   VALIDATE STUDENT INFORMATION
========================================= */

if ($name === "" || $age === "" || $address === "" || $email === "") {

    $_SESSION["create_error"] = "Please fill in all student information.";
    header("Location: createstudent.php");
    exit;
}


/* =========================================
   VALIDATE AGE
========================================= */

if (!is_numeric($age) || $age < 1) {

    $_SESSION["create_error"] = "Please enter a valid age.";
    header("Location: createstudent.php");
    exit;
}


/* =========================================
   VALIDATE EMAIL
========================================= */

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $_SESSION["create_error"] = "Please enter a valid email address.";
    header("Location: createstudent.php");
    exit;
}


/* =========================================
   INSERT STUDENT   RECORD
========================================= */

$sql = "INSERT INTO student (name, age, address, email)
        VALUES (?, ?, ?, ?)";


$stmt = mysqli_prepare($db_con, $sql);


if (!$stmt) {

    $_SESSION["create_error"] = "Unable to prepare the student record.";

    header("Location: createstudent.php");
    exit;
}


/* =========================================
   BIND VALUES
========================================= */

$age = (int)$age;

mysqli_stmt_bind_param(
    $stmt,
    "siss",
    $name,
    $age,
    $address,
    $email
);


/* =========================================
   EXECUTE
========================================= */

if (mysqli_stmt_execute($stmt)) {

    $_SESSION["create"] = "Student Added Successfully!";

    mysqli_stmt_close($stmt);

    header("Location: viewstudent.php");
    exit;

} else {

    $_SESSION["create_error"] = "Unable to add student record.";

    mysqli_stmt_close($stmt);

    header("Location: createstudent.php");
    exit;
}

?>