
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto ">
        <div class="d-flex me-5">
            <li class="nav-item active">
                <a class="nav-link text-uppercase" href="addteachers.php">Add Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="addsubjects.php">Add Subjects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="addclassrooms.php">Add Classrooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="allotsubjects.php">Allot Theory Course</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link text-uppercase" href="allotpracticals.php">Allot Practical Course</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="allotclasses.php">Allot Classrooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="generatetimetable.php">Genetate Timetable</a>
            </li>
        </div>

        <div class="ms-5">
            <li >
            <a class="nav-link text-uppercase" href="index.php">Log Out</a>
        </li>
        </div>
    </div>

</ul>
</nav>
<!--NAVBAR SECTION END-->
<br>
<form action="allotmentpracticalFormvalidation.php" method="post">
    <div align="center">
        <select name="tobealloted" class="list-group-item">
            <?php
            include 'connection.php';
            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM subjects WHERE course_type = 'LAB'");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Subject</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    if ($row['isAlloted'] == 1)
                        continue;
                    $mystring .= '<option value="' . $row['subject_code'] . '">' . $row['subject_name'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 5px">
        <select name="toalloted" class="list-group-item">
            <?php
            include 'connection.php';

            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM teachers ");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Teacher</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    $mystring .= '<option value="' . $row['faculty_number'] . '">' . $row['name'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 5px">
        <select name="toalloted2" class="list-group-item">
            <?php
            include 'connection.php';

            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM teachers ");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Teacher</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    $mystring .= '<option value="' . $row['faculty_number'] . '">' . $row['name'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 5px">
        <select name="toalloted3" class="list-group-item">
            <?php
            include 'connection.php';

            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM teachers ");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Teacher</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    $mystring .= '<option value="' . $row['faculty_number'] . '">' . $row['name'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>

    </div>
    <div align="center" style="margin-top: 10px">
        <button type="submit" class="btn btn-success btn-lg">Allot</button>
    </div>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 16-11-2016
 * Time: 14:13
 */
include 'connection.php';
if (isset($_GET['name'])) {
    $id = $_GET['name'];
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "UPDATE subjects  SET isAlloted = '0' , allotedto = '',allotedto2 = '',allotedto3 = '' WHERE subject_code = '$id' ");

}


?>
<script>
    function deleteHandlersForPractical() {
        var table = document.getElementById("allotedpracticalstable");
        var rows = table.getElementsByTagName("tr");
        for (i = 0; i < rows.length; i++) {
            var currentRow = table.rows[i];
            //var b = currentRow.getElementsByTagName("td")[0];
            var createDeleteHandler =
                function (row) {
                    return function () {
                        var cell = row.getElementsByTagName("td")[0];
                        var id = cell.innerHTML;
                        var x;
                        if (confirm("Are You Sure?") == true) {
                            // window.location.href = "deletepracticalallotment.php?name=" + id;
                            window.location.href = "allotpracticals.php?name=" + id;
                        }

                    };
                };

            currentRow.cells[8].onclick = createDeleteHandler(currentRow);
        }
    }
</script>
<style>
    table {
        margin-top: 70px;
        margin-bottom: 50px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: 80px;
        width: 90%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<table id=allotedpracticalstable>
    <caption><strong>PRACTICAL COURSES ALLOTMENT</strong></caption>
    <tr>
        <th width="130">Subject Code</th>
        <th width=200>Subject Title</th>
        <th width="120">Faculty No</th>
        <th width="300">Teacher's Name</th>
        <th width="120">Faculty No</th>
        <th width="300">Teacher's Name</th>
        <th width="120">Faculty No</th>
        <th width="300">Teacher's Name</th>
        <th width="40">Action</th>
    </tr>
    <tbody>
    <?php
    include 'connection.php';
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "SELECT * FROM subjects");

    while ($row = mysqli_fetch_assoc($q)) {
        if ($row['isAlloted'] == 0)
            continue;
        if (!($row['course_type'] == "LAB"))
            continue;
        $teacher_id1 = $row['allotedto'];
        $teacher_id2 = $row['allotedto2'];
        $teacher_id3 = $row['allotedto3'];
        $t1 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT name FROM teachers WHERE faculty_number = '$teacher_id1'");
        $trow1 = mysqli_fetch_assoc($t1);
        $t2 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT name FROM teachers WHERE faculty_number = '$teacher_id2'");
        $trow2 = mysqli_fetch_assoc($t2);
        $t3 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT name FROM teachers WHERE faculty_number = '$teacher_id3'");
        $trow3 = mysqli_fetch_assoc($t3);
        echo "<tr><td>{$row['subject_code']}</td>
                    <td>{$row['subject_name']}</td>
                    <td>{$row['allotedto']}</td>
                    <td>{$trow1['name']}</td>
                    <td>{$row['allotedto2']}</td>
                    <td>{$trow2['name']}</td>
                    <td>{$row['allotedto3']}</td>
                    <td>{$trow3['name']}</td>
                   <td>
                    <button>Delete</button></td>
                    </tr>\n";
    }
    echo "<script>deleteHandlersForPractical();</script>";
    ?>
    </tbody>
</table>

<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</body>
</html>
