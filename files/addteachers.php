<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
    <style>
       
    </style>
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

<div class="d-flex justify-content-center">
   <!-- <div>
   <form name="import" method="post" enctype="multipart/form-data"> -->
        <!-- <input type="file" name="file"/> -->
        <!-- <input type="submit" name="teacherexcel" id="teacherexcel" class="btn btn-info btn-lg me-2" value="IMPORT EXCEL"/>
    </form>
   </div> -->
    <?php
    if (isset($_POST['teacherexcel'])) {
        if (empty($_FILES['file']['tmp_name'])) {
            echo '<script>alert("Select a file first! ");</script>';
        } else {
            $file = $_FILES['file']['tmp_name'];
            $handle = fopen($file, 'r');
            $headings = true;
            while (!feof($handle)) {
                $filesop = fgetcsv($handle, 1000);

                $facno = $filesop[0];
                $name = $filesop[1];
                $alias = $filesop[2];
                $designation = $filesop[3];
                $contact = $filesop[4];
                $email = $filesop[5];
                if ($facno == "" || $facno == "Faculty No.") {
                    continue;
                }
                $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                    "INSERT INTO teachers VALUES ('$facno','$name','$alias','$designation','$contact','$email')");
                if ($q) {
                    $sql = "CREATE TABLE " . $facno . " (
                day VARCHAR(10) PRIMARY KEY, 
                period1 VARCHAR(30),
                period2 VARCHAR(30),
                period3 VARCHAR(30),
                period4 VARCHAR(30),
                period5 VARCHAR(30),
                period6 VARCHAR(30),
                period7 VARCHAR(30),
                period8 VARCHAR(30)
                )";
                    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
                    $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday');
                    for ($i = 0; $i < 5; $i++) {
                        $day = $days[$i];
                        $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','','','')";
                        mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
                    }
                }
            }
        }
    }
    ?>
    <div>
    <button id="teachermanual" class="btn btn-success btn-lg">ADD TEACHER</button>

    </div>

</div>

<?php include('modal.php');?>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
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

    <script>
        function deleteHandlers() {
            var table = document.getElementById("teacherstable");
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
                                window.location.href = "deleteteacher.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[7].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>

    <table id="teacherstable">
        <h3 style="margin-left:30px;">Teacher's Information</h3>
        <tr>
            <th width="130">Teacher Id</th>
            <th width=290>Name</th>
            <th width=50>Alias</th>
            <th width="190">Designation</th>
            <th width="300">Department</th>
            <th width="120">Contact No.</th>
            <th width="200">Email ID</th>
            <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers ORDER BY faculty_number ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr>
                <td>{$row['faculty_number']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['alias']}</td>
                    <td>{$row['designation']}</td>
                    <td>{$row['department']}</td>
                    <td>{$row['contact_number']}</td>
                    <td>{$row['emailid']}</td>
                   <td>
                    <button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        
        ?>
        </tbody>
    </table>
    </br></br>

</div>
<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/bootstrap/js/bootstrap.bundle."></script>
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
