<?php
// Start the session
session_start();
if (isset($_GET['success'])) {
    echo "<script type='text/javascript'>alert('Time Table Generated');</script>";
}
?>
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


<!--Algorithm Implementation-->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Assign Substitute</h2>
        </div>
        <div class="modal-body" id="AssignSubstitute">
            <!--Admin Login Form-->

            <div style="display:block" id="assignSubstituteForm">
                <form method="post" action="assignSubstituteFormValidation.php">
                    <div class="form-group">
                        <label for="substitute">Substitute</label>
                        <select class="form-control" id="substitute" name="SB">

                        </select>
                        <input type="hidden" id="cell_number" class="btn btn-default" name="CN">

                    </div>
                    <div align="right" class="form-group">

                        <input type="submit" id="submit" class="btn btn-default" name="ADD" value="CHECK">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var assignsubstitueForm = document.getElementById("assignSubstitueForm");
    // Get the <span> element that closes the modal
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
        modal.style.display = "none";
        assignsubstitueForm.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            assignsubstitueForm.style.display = "none";
        }
    }
</script>
<div>
<div>
    <form action="algo.php" method="post">
        <div align="center">
            <button type="submit"
                    id="generatebutton" class="btn btn-success btn-lg">GENERATE
            </button>
        </div>
    </form>
</div>
<div>
    <form action="generatetimetable.php" method="post">
        <div align="center" style="margin-top: 30px">
            <select name="select_teacher" class="list-group-item">
                <option selected disabled>Select Teacher</option>
                <?php
                $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                    "SELECT * FROM teachers ");
                while ($row = mysqli_fetch_assoc($q)) {
                    echo " \"<option value=\"{$row['faculty_number']}\">{$row['name']}</option>\"";
                }
                ?>

            </select>
            <button type="submit" id="viewteacher" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
            </button>
        </div>
    </form>
</div>
<div>
    <form action="generatetimetable.php" method="post">
        <div align="center" style="margin-top: 20px">
            <select name="select_semester" class="list-group-item">
                <option selected disabled>Select Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <button type="submit" id="viewsemester" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
            </button>
        </div>
    </form>
</div>
</div>
<script>
    var index = -1;
    function Substitute() {
        var table = document.getElementById("timetable");
        var cells = table.getElementsByTagName("td");
        // window.alert(cells[3].innerHTML.toString());
        for (i = 0; i < cells.length; i++) {
            if (i % 8 == 6 || i % 8 == 7 || parseInt(i / 8) == 0 || i % 8 == 0) {
                continue;
            }
            var currentCell = cells[i];
            //var b = currentRow.getElementsByTagName("td")[0];
            var createSubstituteHandler =
                function (cell, i) {
                    return function () {

                        document.getElementById('cell_number').value = i;
                        index = i;
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                var modal = document.getElementById('myModal');
                                modal.style.display = "block";
                                document.getElementById("substitute").innerHTML = this.responseText;

                            }
                        };
                        xmlhttp.open("GET", "getcellindex.php?i=" + i, false);
                        xmlhttp.send();
                    };
                };
            currentCell.onclick = createSubstituteHandler(currentCell, i);
        }
    }
</script>

<div>
    <br>
    <style>
        table {
            margin-top: 20px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
    <div id="TT" style="background-color: #FFFFFF">
        <table border="2" cellspacing="3" align="center" id="timetable">
            <caption><strong><br><br>
                    <?php
                    if (isset($_POST['select_semester'])) {
                        echo "COMPUTER ENGINEERING DEPARTMENT SEMESTER " . $_POST['select_semester'] . " ";
                        $year = (int)($_POST['select_semester'] / 2) + $_POST['select_semester'] % 2;
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from classrooms
                        WHERE status = '$year'"));
                        echo " ( " . $r['name'], " ) ";
                    } else if (isset($_POST['select_teacher'])) {
                        $id = $_POST['select_teacher'];
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from teachers
                        WHERE faculty_number = '$id'"));
                        echo $r['name'];
                    } else if (isset($_GET['display'])) {
                        $id = $_GET['display'];
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from teachers
                        WHERE faculty_number = '$id'"));
                        echo $r['name'];

                    }
                    ?>
                </strong></caption>
            <tr>
                <td style="text-align:center">WEEKDAYS</td>
                <td style="text-align:center">9:00-9:45</td>
                <td style="text-align:center">9:45-10:30</td>
                <td style="text-align:center">10:35-11:20</td>
                <td style="text-align:center">11:20-12:05</td>
                <td style="text-align:center">12:5-1:05</td>
                <td style="text-align:center">1:05-1:50</td>
                <td style="text-align:center">1:50-2:35</td>
                <td style="text-align:center">2:40-3:25</td>
                <td style="text-align:center">3:25-4:10</td>
            </tr>
            <tr>
                <?php
                $table = null;
                if (isset($_POST['select_semester'])) {
                    $table = " semester" . $_POST['select_semester'] . " ";
                } else if (isset($_POST['select_teacher'])) {
                    $table = " " . $_POST['select_teacher'] . " ";
                } else if (isset($_GET['display'])) {
                    $table = " " . $_GET['display'] . " ";
                } else
                    echo '</table>';
                if (isset($_POST['select_semester']) || isset($_POST['select_teacher']) || isset($_GET['display'])) {
                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM" . $table);
                    $qq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM subjects");
                    $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY' );
                    $i = -1;
                    $str = "<br>";
                    $tid = "";
                    if (isset($_POST['select_semester'])) {
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['isAlloted'] == 1 && $r['semester'] == $_POST['select_semester']) {
                                $str .= $r['subject_code'] . " : " . $r['subject_name'] . ", ";
                                if (isset($r['allotedto'])) {
                                    $id = $r['allotedto'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= "  " . $rr['alias'] . " : " . $rr['name'] . " ";
                                }
                                if ($r['course_type'] !== "LAB") {
                                    $str .= "<br>";
                                    continue;
                                } else {
                                    $str .= ", ";
                                }
                                if (isset($r['allotedto2'])) {
                                    $id = $r['allotedto2'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= "  " . $rr['alias'] . " : " . $rr['name'] . ", ";
                                }
                                if (isset($r['allotedto3'])) {
                                    $id = $r['allotedto3'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= "  " . $rr['alias'] . " : " . $rr['name'] . "<br>";
                                }
                            }
                        }
                    } else if (isset($_POST['select_teacher']) || isset($_GET['display'])) {
                        if (isset($_POST['select_teacher'])) {
                            $tid = $_POST['select_teacher'];
                        } else if (isset($_GET['display'])) {
                            $tid = $_GET['display'];
                            $tid = strtoupper($tid);
                        }
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['isAlloted'] == 1 && $r['allotedto'] == $tid) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                            } else if ($r['isAlloted'] == 1 && isset($r['allotedto2']) && $r['allotedto2'] == $tid) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                            } else if ($r['isAlloted'] == 1 && isset($r['allotedto3']) && $r['allotedto3'] == $tid) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                            }
                        }
                    }
                    while ($row = mysqli_fetch_assoc($q)) {
                        $i++;

                        echo "
                 <tr><td style=\"text-align:center\">$days[$i]</td>
                 <td style=\"text-align:center\">{$row['period1']}</td>
                <td style=\"text-align:center\">{$row['period2']}</td>
                <td style=\"text-align:center\">{$row['period3']}</td>
                 <td style=\"text-align:center\">{$row['period4']}</td>
                  <td style=\"text-align:center\">LUNCH</td>
                  <td style=\"text-align:center\">{$row['period5']}</td>
                  <td style=\"text-align:center\">{$row['period6']}</td>
                  <td style=\"text-align:center\">{$row['period7']}</td>
                  <td style=\"text-align:center\">{$row['period8']}</td>
                </tr>\n";
                    }

                    echo '</table>';
                    $sign = "TIMETABLE MANAGEMENT SYSTEM, COMPUTER SCIENCE DEPARTMENT</br></br></br>";
                    echo "<div style='margin-left: 10px' align='left'>" . "<br>" . $str . "<br></div>" .
                        "<div style='margin-left: 10px' align='center'>" . "<strong>" . $sign . "<br></strong></div>";
                }
                if (isset($_POST['select_teacher'])) {
                    echo "<script>Substitute();</script>";
                    $_SESSION['shown_id'] = $_POST['select_teacher'];
                }
                if (isset($_GET['display'])) {
                    echo "<script>Substitute();</script>";
                    $_SESSION['shown_id'] = $_GET['display'];
                }
                ?>
    </div>
</div>
<!-- <script type="text/javascript">
    function gendf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('<?php
                    if (isset($_POST["select_semester"])) {
                        echo "ttms semester " . $_POST["select_semester"];
                    } else if (isset($_POST["select_teacher"])) {
                        echo "ttms " . $_POST["select_teacher"];
                    } else if (isset($_GET["display"])) {
                        echo "ttms " . $_GET["display"];
                    }
                    ?>' + '.pdf');
            alert("Downloaded!");

        });
    }

</script>
<div align="center" style="margin-top: 10px">
    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="gendf()">SAVE AS PDF</button>
</div> -->

<!--HOME SECTION END-->

<!--<div id="footer">
     &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
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
