<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Management-System</title>
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/Footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="header">
        <nav>
            <a href=""><img src="logo-wide.png" alt=""></a>
            <!-----------------------navbar------------------------->
            <div class="nav-links" id="navLinks">
                <i class='bx bx-window-close' onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="">ACADEMICS</a>
                        <div class="dropdown-list">
                            <ul>
                                <li><a href="Pages/inter.php">Intermediate</a></li>
                                <li><a href="Pages/associate.php">Accosiate</a></li>
                                <li><a href="Pages/bachleors.php">Bachelors</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="">ADMISSION</a>
                        <div class="dropdown-list">
                            <ul>
                                <li><a href="Pages/elig.php">Eligibility Criteria</a></li>
                                <li><a href="Pages/fee.php">Fee Structure</a></li>
                                <li><a href="admission.php">Online Admission</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="Pages/event.php">EVENTS</a></li>
                    <li><a href="Pages/about.php">ABOUTUS</a></li>
                    <li><a href="Login/login.php">LOGIN</a></li>
                </ul>
            </div>
            <i class='bx bx-menu' onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Aspire Group Of Colleges</h1>
            <p>The core purpose of ASPIRE College is to ensure that our students acquire the knowledge, skills and
                attributes to become leaders!
            </p>
            <a href="Pages/about.php" class="hero-btn">Visit us to know more</a>
        </div>
    </section>
    <!-----------------------courses------------------------->
    <section class="course">
        <h1>Courses we Offer</h1>
        <p>
            We strive to instill three essential qualities in each student i.e. Determination, Knowledge & Adaptability
            Students of ASPIRE are, therefore, educated for the 21st century; ready to face new challenges throughout
            their lives. These attributes prepare students not just for success at a top university and a successful
            career, but they learn the fundamentals of self-discipline that underpins effective leadership for a Better
            World.</p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>

                <li>FSC (pre-medical)</li>
                <li>FSC (pre-engineering)</li>
                <li>ICS</li>
                <li>F.A</li>

            </div>

            <div class="course-col">
                <h3>Associate</h3>

                <li>ADPCS</li>
                <li>ADA</li>
                <li>BSC</li>
                <li>B.COM(2 years)</li>

            </div>
            <div class="course-col">
                <h3>Bachelors</h3>

                <li>BSCS</li>
                <li>BSIT</li>
                <li>BSEnglish</li>
                <li>BSMathematics</li>
                <li>BS Zology</li>
                <li>B.Com</li>

            </div>
        </div>
    </section>
    <!-----------------------campus------------------------->
    <section class="campus">
        <h1>Our Campuses</h1>

        <div class="row">
            <div class="campus-col">
                <img src="Images/image.jpeg" alt="">
                <div class="layer">
                    <h3>CHAKWAL</h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="Images/campusbanner-10.jpg" alt="">
                <div class="layer">
                    <h3>VEHARI</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="Images/HAR.jpeg" alt="">
                <div class="layer">
                    <h3>HARBANSPURA
                    </h3>
                </div>
            </div>
        </div>

    </section>
    <!-----------------------facilities------------------------->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Universities are struggling to create facilities in a technology-friendly environment across the campuses in
            multiple locations. There are a number of campus facilities that need to support research, teaching,
            learning, and other operations. The mission of the university community is to provide various facilities and
            create an exceptional atmosphere for students, faculty, and staff.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="Images/library.png" alt="">
                <h3>Library</h3>
                <p>Library is one of the important facility frequently used by students and faculty to support the
                    learning and teaching needs. Using the library automation software harness the digital library
                    resources such as eBooks, audio, video, and podcasts to improve student’s learning experience. </p>
            </div>
            <div class="facilities-col">
                <img src="Images/basketball.png" alt="">
                <h3>BasketBall</h3>
                <p>When it comes to administration duties, hiring and training of staff, Sports Facilities
                    Advisory/Sports Facilities Management maintains a quality program to ensure the day-to-day
                    operations of sports facilities run smoothly and efficiently.</p>
            </div>
            <div class="facilities-col">
                <img src="Images/cafeteria.png" alt="">
                <h3>Cafeteria</h3>
                <p>Using Canteen management system, create canteen and mess menu for students along with rates. Gather
                    student’s feedback on food preferences using online surveys. Easily generate reports on food served,
                    canteen expenses and income generated.</p>
            </div>
        </div>
    </section>
    <br>
    <!-----------------------contact------------------------->
    <section>
        <img src="Images/camp.jpg" alt="">
    </section>
    <!-----------------------testimonials------------------------->
    <section class="testimonials">
        <h1>What our Students Says</h1>
        <p>-100% of 34 students said this degree improved their career prospects</p>
        <p>- 100% of 34 students said they would recommend this school to others</p>

        <div class="row">
            <div class="testimonials-col">
                <img src="Images/user1.jpg" alt="">
                <div>
                    <p>"It's a great private college that focuses on treating the whole person when it comes to health
                        care. Smaller class sizes helped to foster a well rounded education and an environment that
                        connected students and staff together for a great experience."</p>
                    <h3>Aliza</h3>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="Images/user2.jpg" alt="">
                <div>
                    <p>"Computer based program, focused on the success of their students. Teachers are up to date on
                        most current pertinent information."</p>
                    <h3>Daud</h3>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------contact------------------------->
    <section class="cta">
        <h1>Enroll for Various Courses </h1>
        <a href="contact.html" class="hero-btn">CONTACTUS</a>
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
                            <li><a href="Pages/fee.php">Fee Structure</a></li>
                            <li><a href="admission.php">Admission</a></li>
                            <li><a href="Pages/associate.php">Affiliate Program</a></li>
                            <li><a href="Pages/elig.php">Eligibility Criteria</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>PORTALS</h4>
                        <ul>
                            <li><a href="Login/login.php">Admin Portal(online)</a></li>
                            <li><a href="Login/login.php">Student Poratl(online)</a></li>
                            <li><a href="Login/login.php">Faculty Portal(online)</a></li>
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
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>