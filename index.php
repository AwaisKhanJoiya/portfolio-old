<?php



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $connection = mysqli_connect('localhost', 'root', '', 'contact');
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $subject = mysqli_real_escape_string($connection, $subject);
    $description = mysqli_real_escape_string($connection, $description);


    if ($connection) {
        $query = "INSERT INTO `contact_form` (`sno`, `name`, `email`, `subject`, `description`) VALUES (NULL, '$name', '$email', '$subject', '$description')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query FAILED");
        }
    } else {
        die("Database connection failed");
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Awais Khan | My Personal Portfolio Website</title>
    <link rel="stylesheet" href="sass/style.css" />
    <script src="https://kit.fontawesome.com/dd5f651610.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
</head>

<body>
    <div class="scroll-up-btn show">
        <a href="#home"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        if ($result) {
            echo '
                <div class="main_alert">
                    <div class="alert">
                        <Strong>Submitted!</Strong> Thanks for getting in touch! We will reply you by email ASAP.
                    </div>
                    <div class="hide">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                ';
        } else {
            echo '
            <div class="main_alert failed">
                    <div class="alert">
                        <Strong>Failed!</Strong> We are facing some issues right now. Please try later.
                    </div>
                    <div class="hide">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            ';
        }
    }
    ?>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#home">Awais <span>Khan</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="list-menu">Home</a></li>
                <li><a href="#about" class="list-menu">About</a></li>
                <li><a href="#services" class="list-menu">Services</a></li>
                <li><a href="#skills" class="list-menu">My Skills</a></li>
                <li><a href="#contact" class="list-menu">Contact US</a></li>
            </ul>
            <div class="list-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello! my name is</div>
                <div class="text-2">Awais Khan</div>
                <div class="text-3">And I am <span class="typing"></span></div>
                <a class="btn" href="">Hire me</a>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="left column">
                    <img src="./Images/mypic.jpg" alt="My Image" />
                </div>
                <div class="column right">
                    <div class="text">
                        I'm Awais and I'm <span class="typing-2"></span>
                    </div>
                    <p class="detail">
                        I am a Web Developer with experience of more than one year. Now I am working as a full time
                        Freelancer. Instead of Web Developer I am also a Graphics Designer, But my main focus is Web
                        Development. I have created many websites for my clients and also
                        for my practice. My Design is always clean and eye-catching. I am also SEO expert and Wordpress
                        developer. I have many clients which are more than 100, who are fully satisfied about my work.
                        My delivery time is perfect and my clients
                        have good reviews about me.
                    </p>
                    <a class="btn-2" href="">Hire me</a>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Services</h2>
            <div class="service-content">
                <div class="box1 combine">
                    <i class="fas fa-paint-brush"></i>
                    <h3 class="inner-content">Web Design</h3>
                    <p class="para">
                        Responsive and Attractive Web Designing. Clean and Fast Website. Design and Develop any simple
                        or complex website.
                    </p>
                </div>
                <div class="box2 combine">
                    <i class="fas fa-chart-line"></i>
                    <h3 class="inner-content">SEO</h3>
                    <p class="para">
                        Rank your website in the top of the google or other search engines. Also rank your youtube
                        videos at the top.
                    </p>
                </div>
                <div class="box3 combine">
                    <i class="fas fa-code"></i>
                    <h3 class="inner-content">WordPress</h3>
                    <p class="para">
                        Development of complete Wordpress website. Also develop responsive and good looking eCommerce
                        website.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="skills blur" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-set">
                <div class="left-part">
                    <h2 class="heading">My creative skills and expirience</h2>
                    <p class="my-skills">
                        I have been working as a Full-stack developer for over 1 years. My design approach is always
                        clean, modern, and simple. I have built websites for a wide variety of industries. My code is
                        clean and readable. I have worked with a lot of companies and build
                        amazing websites.
                    </p>
                    <a class="btn-2">Read more</a>
                </div>
                <div class="right-part">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>85%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Javascript</span>
                            <span>70%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Jquery</span>
                            <span>60%</span>
                        </div>
                        <div class="line jquery"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>55%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>mySQL</span>
                            <span>65%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="more-info">
        <h2 class="heading">My creative skills and expirience.</h2>
        <p class="my-skills">
            I have been working as a Full-stack developer for over 1 years. I am expert in HTML, Css, SASS, JavaScript,
            Jquery and PHP. I am also learning more to impove my skills at the next level. I have created many websites
            including forum website, eCommerce
            website and also this portfolio website. My design approach is always clean, modern, and simple. I have
            built websites for a wide variety of industries. My code is clean and readable. I have worked with a lot of
            companies and build amazing
            websites. All my clients have good reviews about me. Clients Satisfaction is my First Priority. I understand
            the requirements of the clients and give them what they actually want.
        </p>
        <a class="btn-2">Close</a>
    </div>
    <section class="contact" id="contact">
        <h2 class="title">Contact Us</h2>
        <div class="contact-info">
            <div>
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fas fa-map-marker-alt location"></i></span>
                        <span>Pakpattan, Pakistan</span>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope"></i></span>
                        <span class="margin">khanawaisjoiya@gmail.com</span>
                    </li>
                    <li>
                        <span><i class="fas fa-phone-alt"></i></span>
                        <span>+92 303 8285282</span>
                    </li>
                </ul>
                <ul class="social-media">
                    <li>
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-instagram-square"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="contact-form" action="index.php" method="post">
            <div class="inner-div">
                <div class="form-box block">
                    <input type="text" name="name" required />
                    <label for="">Name</label>
                </div>
                <div class="form-box block">
                    <input type="text" name="email" required />
                    <label for="">Email</label>
                </div>
                <div class="form-box w100">
                    <input type="text" name="subject" required />
                    <label for="">Subject</label>
                </div>
                <div class="form-box w100">
                    <textarea name="description" id="" required></textarea>
                    <label for="">Enter Your Message Here</label>
                </div>
                <div class="form-box w100">
                    <input type="submit" value="Send" name="submit" />
                </div>
            </div>
        </form>
    </section>
    <footer>
        <span>Created by <a href="">Awais Khan</a> |
            <span class="fas fa-copyright"></span> 2021 All rights reserved
        </span>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>