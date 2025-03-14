<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <!-- <link href="assets/css/style.css" rel="stylesheet"/> -->
    <!-- Google	Fonts -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="width:100%;">
   
    <ul class="navbar-nav mr-auto " style="width:100%;">
        <div class="d-flex justify-content-around ">
           <div class="" style="display: flex; width: 600px; justify-content: start;">
               <li class="nav-item active">
                   <a class="nav-link text-uppercase" href="#">Hello!  <?php echo $_SESSION['loggedin_name']; ?></a>
               </li>
           </div>
          <div class="" style="width:570px; display: flex; justify-content: end;">
               <li class="nav-item">
                   <a class="nav-link text-uppercase" href="index.php">LOGOUT</a>
               </li>
          </div>
        </div>
   </ul>   
    
</nav>


<div class="d-flex mt-3 justify-content-center">
    <div class="me-4">
            <form action="facultypage.php" method="post">
            <div>
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
        <form action="facultypage.php" method="post">
        <div>
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
            <button type="submit" id="viewsemester" style="margin-top: 5px" class="btn btn-success btn-lg">VIEW TIMETABLE
            </button>
        </div>
    </form>
    </div>
</div>

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
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), 
                        "SELECT * from classrooms
                        WHERE status = '$year'"));
                        echo " ( " . $r['name'], " ) ";
                    } else if (isset($_POST['select_teacher'])) {
                        $id = $_POST['select_teacher'];
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), 
                        "SELECT * from teachers
                        WHERE faculty_number = '$id'"));
                        echo $r['name'];
                    } else if (isset($_SESSION['loggedin_name'])) {
                        echo $_SESSION['loggedin_name'];

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
                } else if (isset($_SESSION['loggedin_id'])) {
                    $table = " " . $_SESSION['loggedin_id'] . " ";
                } else
                    echo '</table>';
                if (isset($_POST['select_semester']) || isset($_POST['select_teacher']) || isset($_SESSION['loggedin_id'])) {
                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM" . $table);
                    $qq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM subjects");
                    $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY' );
                    $i = -1;
                    $str = "<br>";
                    if (isset($_POST['select_semester'])) {
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['isAlloted'] == 1 && $r['semester'] == $_POST['select_semester']) {
                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " ";
                                if (isset($r['allotedto'])) {
                                    $id = $r['allotedto'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['name'] . " ";
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
                                    $str .= " " . $rr['alias'] . ": " . $rr['name'] . ", ";
                                }
                                if (isset($r['allotedto3'])) {
                                    $id = $r['allotedto3'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM teachers WHERE faculty_number = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['name'] . "<br>";
                                }
                            }
                        }
                    } else if (isset($_POST['select_teacher']) || isset($_SESSION['loggedin_id'])) {
                        if (isset($_POST['select_teacher'])) {
                            $tid = $_POST['select_teacher'];
                        } else {
                            $tid = $_SESSION['loggedin_id'];
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
                    $sign = "TIMETABLE MANAGEMENT SYSTEM, COMPUTER ENGINEERING DEPARTMENT</br></br></br>";
                    echo "<div align=\"left\">" . "<br>" . $str . "<br>
                            <strong>" . $sign . "<br></strong></div>";
                }
                ?>
    </div>
</div>
<!-- <script type="text/javascript">
    function gendf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('' + '.pdf');
            alert("Downloaded!");

        });
    }

</script> -->
<!-- <div align="center" style="margin-top: 10px">
    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="gendf()">SAVE AS PDF</button>
</div> -->


<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/bootstrap/js/bootstrap.js"></script>
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
