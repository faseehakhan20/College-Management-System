<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
 
    <link rel="stylesheet" href="../Css/index.css">
    <link rel="stylesheet" href="../Css/Footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href=""><img src="../Images/logo-wide.png" alt=""></a>
            <!-----------------------navbar------------------------->
            <div class="nav-links" id="navLinks">
                <i class='bx bx-window-close' onclick="hideMenu()"></i>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="">ACADEMICS</a>
                        <div class="dropdown-list">
                            <ul>
                                <li><a href="inter.php">Intermediate</a></li>
                                <li><a href="associate.php">Accosiate</a></li>
                                <li><a href="bachleors.php">Bachelors</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="">ADMISSION</a>
                        <div class="dropdown-list">
                            <ul>
                                <li><a href="elig.php">Eligibility Criteria</a></li>
                                <li><a href="fee.php">Fee Structure</a></li>
                                <li><a href="../admission.php">Online Admission</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="event.php">EVENTS</a></li>
                    <li><a href="about.php">ABOUTUS</a></li>
                    <li><a href="../Login/login.php">LOGIN</a></li>
                </ul>
            </div>
            <i class='bx bx-menu' onclick="showMenu()"></i>
        </nav>
   <h1>EVENTS GALLERY</h1>
    </section>
   <!-----------------------content------------------------->
   <section class="facilities">
    <h1>Events</h1>
    <p>Manage conferences, meetings, seminars, and events related to the university students and alumni with automated scheduling, profiling, registration, routing, payments and reminders.</p>
    <div class="row">
        <div class="facilities-col">
            <img src="../Images/convo.jpeg" alt="">
            <h3>Convocation Ceremony</h3>
            
        </div>
        <div class="facilities-col">
            <img src="../Images/gala.jpeg" alt="">
            <h3>Annual Sports Gala</h3>
            
        </div>
        <div class="facilities-col">
            <img src="../Images/sport.jpeg" alt="">
            <h3>Sports Day</h3>
            
        </div>
        <div class="facilities-col">
            <img src="../Images/intel.jpeg" alt="">
            <h3>Intelligence Test</h3>
            
        </div>
        <div class="facilities-col">
            <img src="../Images/pop.jpeg" alt="">
            <h3>POP (Power of Performance)</h3>
            
        </div>
        <div class="facilities-col">
            <img src="../Images/talent.jpg" alt="">
            <h3>Talent Award</h3>
            
        </div>
    </div>
    </section>
  <!-----------------------footer------------------------->
  <section>
        <footer class="footer">

            <div class="container">
                <div class="row">
                    <div class="footer-col">

                        <h4>ABOUTUS</h4>
                        <p>The core purpose of ASPIRE College is to ensure that our students acquire the knowledge,
                            skills
                            and attributes to become leaders!</p>
                    </div>
                    <div class="footer-col">
                        <h4>ADMISSION</h4>
                        <ul>
                            <li><a href="fee.php">Fee Structure</a></li>
                            <li><a href="../admission.php">Admission</a></li>
                            <li><a href="associate.php">Affiliate Program</a></li>
                            <li><a href="elig.php">Eligibility Criteria</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>PORTALS</h4>
                        <ul>
                            <li><a href="../Login/login.php">Admin Portal(online)</a></li>
                            <li><a href="../Login/login.php">Student Poratl(online)</a></li>
                            <li><a href="../Login/login.php">Faculty Portal(online)</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>CONTACT US</h4>
                        <ul>
                            <li><i class='bx bx-home'></i> ADDRESS: Aspire College, 23-D/1, GULBERG III, Lahore </li>
                            <li> <i class='bx bx-phone'></i> PHONE: 23456789</li>
                            <li> <i class='bx bx-envelope'></i> E-MAIL: info@aspirecolleges.edu.pk</li>

                        </ul>
                    </div>
                </div>

            </div>
            </div>
            </div>
            <section class="copyright">CopyRight &copy; ASPIRE Group of Colleges 2022</section>
        </footer>
    </section>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>