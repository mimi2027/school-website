
<?php

include("connect.php");


/* =========================================
   CHECK STUDENT ID
========================================= */

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = mysqli_real_escape_string(
        $db_con,
        $_GET['id']
    );


    /* =========================================
       DELETE STUDENT RECORD
    ========================================= */

    $sql = "DELETE FROM student WHERE id='$id'";


    if (mysqli_query($db_con, $sql)) {

        session_start();

        $_SESSION["delete"] =
            "Student Record Deleted Successfully!";

        header("Location: viewstudent.php");

        exit();

    } else {

        die(
            "Unable to delete student record. Please try again."
        );

    }

} else {

    echo "Invalid student record.";

}

?>

