<?php
if (isset($_GET['generated']) && $_GET['generated'] == "false") {
    unset($_GET['generated']);
    echo '<script>alert("Timetable not generated yet!!");</script>';
}
?>
<!DOCTYPE html>
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
    <link href="assets/css/.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

</head>
<body>
<div class="header bg-primary text-primary text-dark"  style="padding: 10px;margin: 0;text-align: center;">
    <h2>Time Table Management System</h4>
</div>


<div align="center" STYLE="margin-top: 30px">
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="teacherLoginBtn" class="btn btn-info btn-lg">TEACHER LOGIN
    </button>
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="adminLoginBtn" class="btn btn-success btn-lg">ADMIN LOGIN
    </button>
</div>
<br>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header header" >
            
            <h2 id="popupHead">Modal Header</h2>
            <span class="close">&times</span>
        </div>
        <div class="modal-body" id="LoginType">
            <!--Admin Login Form-->
            <div  id="adminForm">
                <form action="adminFormvalidation.php" method="POST">
                    <div class="form-group">
                        <label for="adminname">Username</label>
                        <input type="text" class="form-control" id="adminname" name="UN" placeholder="Username ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="PASS"
                               placeholder="Password ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
        <!--Faculty Login Form-->
        <div style="display:none;" id="facultyForm">
            <form action="facultyformvalidation.php" method="POST" style="overflow: hidden">
                <div class="form-group">
                    <label for="facultyno">Teacher Id</label>
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Teacher Id.....">
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-default" name="LOGIN">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    
    function genpdf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('demo timetable.pdf');
        });
        window.alert("Downloaded!");
    }

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var adminForm = document.getElementById("adminForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";

    }
    teacherLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!--HOME SECTION END-->
<!--HOME SECTION TAG LINE END-->

<div style="background-color: #80808045;">
    <div class="container p-3">
        <div class="row d-flex">
            <div class="col-lg-12 col-lg-offset-2 col-md-12 col-sm-8 d-flex justify-content-center">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>

            </div>

        </div>
        <!--/.HEADER LINE END-->

        <?php
        include 'connection.php';
        $q1 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Language(Myanmar)' and designation='Professor')or (department='Language(Myanmar)' and designation='Associate Professor') ");
        $row1 = mysqli_fetch_assoc($q1);

        $q2 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Language(English)' and designation='Professor')or (department='Language(English)' and designation='Associate Professor') ");
        $row2 = mysqli_fetch_assoc($q2);

        $q3 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Computing' and designation='Professor')or (department='Computing' and designation='Associate Professor') ");
        $row3 = mysqli_fetch_assoc($q3);

        $q4 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Natural Science(Physics)' and designation='Professor')or (department='Natural Science(Physics)' and designation='Associate Professor') ");
        $row4 = mysqli_fetch_assoc($q4);

        $q5 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Information Science' and designation='Professor')or (department='Information Science' and designation='Associate Professor') ");
        $row5 = mysqli_fetch_assoc($q5);

        $q6 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Information Technology Supporting and Maintenance' and designation='Professor')or (department='Information Technology Supporting and Maintenance' and designation='Associate Professor') ");
        $row6 = mysqli_fetch_assoc($q6);

        $q7 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Computer Science' and designation='Professor')or (department='Computer Science' and designation='Associate Professor') ");
        $row7 = mysqli_fetch_assoc($q7);

        $q8 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers where (department='Computer System and Technology' and designation='Professor')or (department='Computer System and Technology' and designation='Associate Professor') ");
        $row8 = mysqli_fetch_assoc($q8);



        ?>
        
    </br></br>
        <div class="row">

            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
            <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Language(Myanmar)<br><br><br></h4> 
                    <hr/>
                    <h6 align="center"><?php echo "{$row1['name']}" ?></h6>

                </div>
                <br><br><br>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Language(English)<br><br><br></h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row2['name']}" ?></h6>
                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Computing<br><br><br></h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row3['name']}" ?></h6>

                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Natural Science(Physics)<br><br></h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row4['name']}" ?></h6>

                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Information Science<br><br><br></h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row5['name']}" ?></h6>

                </div>
                <br><br>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Information Technology Supporting and Maintenance</h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row6['name']}" ?></h6>

                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Computer Science<br><br><br></h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row7['name']}" ?></h6>

                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="faculty-div">
                    <!-- <img src="assets/img/faculty/donk.jpeg" class="img-rounded"/> -->
                    <h4 align="center">Computer System and Technology<br><br></h4>
                    <hr/>
                    <h6 align="center"><?php echo "{$row8['name']}" ?></h6>

                </div>
            </div>
        </div>
    </div>
</div>

<section class="container-fluid h-100" id="contact">
           <div class="col-12 d-flex justify-content-center text-center py-4" >
                <div>
                    <h3 class="text-secondary">Contact Form</h4>
                    <h1 class="text-uppercase">Get In Touch</h1>
                </div>
           </div>
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-md-6 mb-3 wow animate__animated animate__slideInLeft">
                        <form action="" class="">
                            <div class=" form-group">
                                <input type="text" class=" form-control border-3 mb-3" placeholder="Name">
                            </div>
                            <div class=" form-group">
                                <input type="text" class=" form-control border-3 mb-3" placeholder="Email Address">
                            </div>
                            <div class=" form-group">
                                <input type="text" class=" form-control border-3 mb-3" placeholder="Phone Num.">
                            </div>
                            <div class=" form-group">
                                <textarea name="" id="" cols="30" rows="7" placeholder="Message" class="px-3 border-3 form-control mb-3 rounded-2 py-2 w-100"></textarea>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <a href="" class="btn btn-primary">Send Message</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3694.273862860985!2d95.06778851115111!3d22.191696282023354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30caa1fbc2ab0999%3A0x3220b9ecb8170e9b!2sComputer%20University%20Post%20Office%2C%20Post%20Code%20023102!5e0!3m2!1sen!2smm!4v1660667601362!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            
        </section>

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
</div>
</body>
</html>
