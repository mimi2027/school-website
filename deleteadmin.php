
<?php

include("connect.php");


/* =========================================
   CHECK ADMIN ID
========================================= */

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = mysqli_real_escape_string(
        $db_con,
        $_GET['id']
    );


    /* =========================================
       DELETE ADMIN RECORD
    ========================================= */

    $sql = "DELETE FROM admin WHERE id='$id'";


    if (mysqli_query($db_con, $sql)) {

        session_start();

        $_SESSION["delete"] =
            "admin Record Deleted Successfully!";

        header("Location: viewadmin.php");

        exit();

    } else {

        die(
            "Unable to delete admin record. Please try again."
        );

    }

} else {

    echo "Invalid admin record.";

}

?>

