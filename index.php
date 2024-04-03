<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){

    $fName=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


//Load Composer's autoloader
    require 'phpMailer/Exception.php';
    require 'phpMailer/PHPMailer.php';
    require 'phpMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ishinidewamiththa@gmail.com';                     //SMTP username
        $mail->Password   = 'ffjazvdghylaknxw';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ishinidewamiththa@gmail.com', 'contact From');
        $mail->addAddress('charindilk@gmail.com', 'My WebSite');     //Add a recipient



        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '$subject';
        $mail->Body    = "Sender Name - $fName <br> Sender Email - $email <br> Sender Mobile Number - $number <br> Message - $message";


        $mail->send();
        echo '<script>alert("Message has been sent");</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial scale=1.0">

<!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <title>Ishini Dewamiththa</title>
</head>
<body>
<!--HEADER DESIGN-->
<header class="header" id="header">
    <a href="#" class="logo">Portfolio</a>


    <nav class="navbar">
        <a href="index.html" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

    <div id="navigation" class="sidenavigation">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <li><a href="index.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contacts</a></li>
    </div>
    <div class="open" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa-solid fa-bars" id="menue-icon"></i> </div>
</header>

<!--HOME SECTION DESIGN-->

<section class="home" id="home">
        <div class="home-content">
        <h3>Hi, Myself</h3>
        <h1>Ishini Dewamiththa</h1>
        <h3>And I'm <span class="multiple-text"></span></h3>
        <p>I am Ishini Dewamiththa, a dedicated Web Designer and Developer from Sri Lanka, committed to delivering exceptional service to my clients. With a focus on excellence, I aim to create captivating and functional web solutions tailored to your specific needs. I invite you to share your requirements with me, confident in my ability to exceed your expectations through creativity and technical expertise.</p>

        <div class="social-media">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <a href="Ishini_Resume.pdf" target="_blank" class="btn">Download CV</a>
    </div>

    <div class="home-image">
        <img src="images/ishini2.png" alt="">
    </div>

    
    
</section>

<!--ABOUT SECTION DESIGN-->
<section class="about" id="about">
    <div class="about-img">
        <img src="images/ishini1.jpg" alt="">
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Web Developer</h3>
        <p>I am Ishini Dewamiththa, a proficient Web Designer and Developer hailing from Sri Lanka. With a steadfast commitment to excellence, my primary objective revolves around delivering unparalleled service to my esteemed clientele.

            As a seasoned professional in the field, I bring forth a wealth of expertise in crafting captivating and functional web solutions tailored to meet your specific needs. Whether you seek an engaging website, seamless user experience, or innovative web applications, rest assured, your aspirations are in capable hands.

            I invite you to entrust me with your requirements, confident that I will endeavor to surpass your expectations through meticulous attention to detail, creativity, and technical prowess.

            Please feel free to reach out with your requests, and together, let us embark on a journey towards achieving your digital objectives.</p>
        <a href="#contact" class="btn">Hire Me</a>
    </div>
</section>

<!--SKILLS SECTION DESIGN-->
<section class="skills" id="skills">
 <h2 class="heading">My <span>Skills</span></h2>
    <div class="skills-container">
        <div class="skills-box">
            <i class="fa-brands fa-html5"></i>
            <i class="fa-brands fa-css3-alt"></i>
            <i class="fa-brands fa-js"></i>

        </div>
        <div class="skills-box">
            <i class="fa-brands fa-node"></i>

        </div>
        <div class="skills-box">
            <i class="fa-brands fa-react"></i>

        </div>
        <div class="skills-box">
            <i class="fa-brands fa-java"></i>

        </div>
        <div class="skills-box">
            <i class="fa-solid fa-database"></i>

        </div>
        <div class="skills-box">
            <i class="fa-brands fa-angular"></i>

        </div>

    </div>
</section>

<!--PROJECT SECTION DESIGN-->
<section class="project" id="project">
    <h2 class="heading">Latest <span>Projects</span>
    </h2>

    <div class="project-container">
        <div class="project-box">
            <img src="images/project1.png" alt="">
            <div class="project-layer">
                <h4>Web Design</h4>
                <a href="https://ishinicharindi.github.io/KandyBackpackersHostel.github/" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>

        <div class="project-box">
            <img src="images/project2.png" alt="">
            <div class="project-layer">
                <h4>Web Design</h4>
                <a href=""><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>

        <div class="project-box">
            <img src="" alt="">
            <div class="project-layer">
                <h4>Web Design</h4>
                <a href=""><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>

        <div class="project-box">
            <img src="" alt="">
            <div class="project-layer">
                <h4>Web Design</h4>
                <a href=""><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>

        <div class="project-box">
            <img src="" alt="">
            <div class="project-layer">
                <h4>Web Design</h4>
                <a href=""><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>

        <div class="project-box">
            <img src="" alt="">
            <div class="project-layer">
                <h4>Web Design</h4>
                <a href=""><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
    </div>
</section>

<!--CONTACT SECTION DESIGN-->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="index.php" method="post" name="contactFrom">
        <div class="input-box">
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email Address">
        </div>
        <div class="input-box">
            <input type="number" name="number" placeholder="Mobile Number">
            <input type="text" name="subject" placeholder="Email Subject">
        </div>
            <textarea  cols="30" rows="10" name="message" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" name="submit" class="btn">
    </form>
</section>



<!--FOOTER SECTION DESIGN-->
<footer class="footer">
    <div class="footer-text">
        <p>Copyright&copy; 2024 by @IshiniDewamiththa | All Rights Reserved</p>
    </div>
    <div class="footer-iconUp">
        <a href="#home"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
    </div>
</footer>


<script src="https://unpkg.com/scrollreveal"></script>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<script src="main.js">

</script>
</body>
</html>