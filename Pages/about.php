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
   <h1>About Us</h1>
    </section>
  
   <section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>Aspire Group of Colleges</h1>
            <h2>Our Mission</h2>
            <p>To redefine education as training for life by giving our students knowledge, insights, and skills that go beyond examination t5o make them resourceful and responsible citizens of the world.</p>
            <h2>Our Vision</h2>
            <p>Committed to channelizing the passion to transform a dream into reality to inspire those who aspire to excellence.</p>
        </div>
        <div class="about-col">
            <img src="../Images/about.jpg" alt="">
        </div>
        </div>
          <h2 style="color: #f44336;">Our Values</h2>

           <p> Aspire College is strives to provide education of the highest quality—to advance the frontiers of knowledge and to prepare individuals for life, work, and leadership. To achieve these aims and to make them enable in essential ways, efforts of faculty, staff and students are very much important. Whatever our individual roles, and wherever we work within Aspire, we owe it to one another to uphold certain basic values.These include:</p>
           <h2 style="color: #f44336;">Knowledge</h2>
            <p>Aspire is committed to enhancing students’ knowledge by making them able to learn new things and gaining new experiences to share.</p>
        
             <h2 style="color: #f44336;"> Initiative</h2>
           <p>Aspire is dedicated to creating a professional pathway for students by offering multiple opportunities to educate current and future generation of leaders.</p>
        
         <h2 style="color: #f44336;">Performance</h2>
         <p>Aspire is working to continuously enhancing the performance of students via inculcating the skills of self-efficacy, motivation, and self-control.</p>
        
          <h2 style="color: #f44336;"> Commitment</h2>
          <p> Aspire is committed to ensuring that our students acquire the knowledge, skills, and attributes and make them prepare to face the challenges.</p>
        </div>
        <br>
        <a href="../index.php" class="hero-btn red-btn">EXPLORE NOW</a>
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
