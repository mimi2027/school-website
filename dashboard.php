<?php

include("connect.php");

/* =========================================
   DASHBOARD STATISTICS
========================================= */

/* STUDENT COUNT */
$student_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM student"
);

$student_data = mysqli_fetch_assoc($student_result);
$total_student = $student_data ['total'];


/* STAFF COUNT */
$staff_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM staff"
);

$staff_data = mysqli_fetch_assoc($staff_result);
$total_staff = $staff_data['total'];


/* ADMIN COUNT */
$admin_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM admin"
);

$admin_data = mysqli_fetch_assoc($admin_result);
$total_admins = $admin_data['total'];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>School | Dashboard</title>

    <link
        rel="stylesheet"
        href="css/style.css"
    >

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<header class="navbar">

    <div class="logo">

        <span>Sch</span>ool

    </div>


    <nav>

        <a
            href="index.php"
            class="active"
        >
            Home
        </a>

        <a href="viewstudent.php">
            Student
        </a>

        <a href="viewstaff.php">
            Staff
        </a>

        <a href="viewadmin.php">
            Admin
        </a>
		

        <a
            href="#"
            class="logout"
        >
            Logout
        </a>

    </nav>

</header>



<!-- =========================================
     MAIN DASHBOARD
========================================= -->

<main class="dashboard">


    <!-- =====================================
         DASHBOARD HEADER
    ====================================== -->

    <section class="dashboard-header">

        <div>

            <h1>
                School Management System
            </h1>

            <p>
                Welcome to the School administration dashboard.
            </p>

        </div>

    </section>



    <!-- =====================================
         STATISTICS CARDS
    ====================================== -->

    <section class="stats">


        <!-- STUDENT -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128100;
            </div>


            <div>

                <h3>
                    Student
                </h3>

                <p>
                    <?php echo $total_student; ?>
                </p>

            </div>

        </div>



        <!-- STAFF -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128188;
            </div>


            <div>

                <h3>
                    Staff
                </h3>

                <p>
                    <?php echo $total_staff; ?>
                </p>

            </div>

        </div>



        <!-- ADMINISTRATORS -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128272;
            </div>


            <div>

                <h3>
                    Administrators
                </h3>

                <p>
                    <?php echo $total_admins; ?>
                </p>

            </div>

        </div>


    </section>



    <!-- =====================================
         QUICK ACTIONS
    ====================================== -->

    <section class="quick-section">

        <h2>
            Quick Actions
        </h2>


        <div class="quick-actions">


            <!-- CUSTOMER -->

            <a
                href="viewstudent.php"
                class="action-card"
            >

                <span>
                    &#128100;
                </span>

                <h3>
                    Manage Student
                </h3>

                <p>
                    Add, edit, view and delete student.
                </p>

            </a>



            <!-- STAFF -->

            <a
                href="viewstaff.php"
                class="action-card"
            >

                <span>
                    &#128188;
                </span>

                <h3>
                    Manage Staff
                </h3>

                <p>
                    Manage School staff records.
                </p>

            </a>



            <!-- ADMIN -->

            <a
                href="viewadmin.php"
                class="action-card"
            >

                <span>
                    &#128272;
                </span>

                <h3>
                    Manage Admin
                </h3>

                <p>
                    Manage system administrator records.
                </p>

            </a>


        </div>

    </section>


</main>



<!-- =========================================
     FOOTER
========================================= -->

<footer>

    <p>

        &copy;
        <?php echo date("Y"); ?>
        School Management System

    </p>

</footer>


</body>

</html>