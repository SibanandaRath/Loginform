 <?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
  }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <!----- Header ----->
        <div class="header">     
        <a href="#" >
            <img src="logo.png"class="logo">
        </a>        
        <!-- <ul class="navbar-mid">
                <li><a href="#">Events</a></li>
  <li><a href="#">Spectrum Internship drive 2021</a></li>
  <li><a href="#">Spectrum Internship drive 2019</a></li>
        </ul>        -->
     <a href="profile.php">    <button class="btn" type="submit" name="profile" >Profile</button> </a>
        <div class="dropdown">
                <button><i class="fas fa-bars"></i></button>
                <div class="dropdown-content">
                    <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Spectrum Internship Drive 2021</a>
                        <a href="#">Spectrum Internship Drive 2020</a>
                        <a href="#">Projects</a>
                        <a href="#">Team</a>
                </div>
            </div>
        </div>
        <div class="container" >
            <img src="spectrum.png" class="containerimg" >
    </div>
    <div class="containersecond reveal">
    <div class="aboutus">
        <h1>About us</h1>
        <p class="aboutpara"><b>SPECTRUM</b> , Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR , a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.

        <p class="aboutpara">    This club was established by "Bikram Keshari Panda (2015 batch)".Spectrum got its recognition in the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics society in our college but with the efforts of other members we established two other wings - Software and Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.</p>
    </div></div>
    <div class="containerthird reveal">
    <div class="wings">
        <h1>OUR WINGS</h1>
        <p class="wingpara">Our club SPECTRUM is so named as it provides us with different wings emitted by the hardwork from our members, showing homologous transitions between Hardware, Software and Designing.</p><br>
        <p class="wingpara">The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many projects with implementation and testing of circuits, components, systems, etc.</p><br>
        <p class="wingpara">The SOFTWARE team is continuously striving for growth in the domains of Web Development, App Development, Competitive Programming, Machine Learning and Data Science. Working as a team, inspiring each other we quickly develop viable solutions for a better outcome.</p><br>  
        <p class="wingpara">The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication is a major tool to enhance various creative projects.</p><br>  
    </div></div>
    <!----- Wing ------>
    <div class="cardcontainer reveal">
        <div class="card">
                <div class="imgBox">
                    <img src="pexels-athena-2582932.jpg" alt="Image">
                </div>
    
                <div class="content">
                    <h4 class="title">Hardware</h4>
                    <p class="description">VLSI<br><br> Sytems<br><br>PCB Design</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="software.jpg" alt="Image">
                </div>
    
                <div class="content">
                    <h4 class="title">Software</h4>
                    <p class="description">Competitive Programming<br><br>Web Development<br><br>App Development<br><br>Machine Learning</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="design.jpg" alt="Image">
                </div>
    
                <div class="content">
                    <h4 class="title">Design</h4>
                    <p class="description">UI/UX Design<br><br>Poster Designing</p>
                </div>
            </div>
        </div>
    <!----- middle ----->
    <div class="project">
        <h1 class="reveal">PROJECT</h1>
        <div class="card1 reveal">
                <div class="card-image">
                    <img src="blind.jpg">
                </div>
         <div class="card-content">      
          <h2 class="card-title">BHAAVANA</h2>
          <p class="para">Device helps physically impaired people to understand the emotions of the person they are talking to</p>      
          <a href="#" class="button">GITHUB LINK</a>
        </div>
    </div>
    <div class="card2 reveal">
        <div class="card-image2">
            <img src="toilet.jpg">
        </div>
 <div class="card-content2">      
  <h2 class="card-title2">SMART TOILET FOR SENIOR CITIZENS AND PATIENTS</h2>
  <p class="para">A semi automated toilet that is designed for the elderly people and the patients. This toilet helps them defecate and urinate with ease and reduces the filthy labour for the hospital authorities. The use of embedded microcontroller Arduino Mega 2560 makes the system smart.</p>      
  <a href="#" class="button">GITHUB LINK</a>
</div>
</div>
<div class="card3 reveal">
    <div class="card-image3">
        <img src="robot.jpg">
    </div>
<div class="card-content3">      
<h2 class="card-title3">SUPPLY BOT</h2>
<p class="para">Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition 2019-20.</p>
<a href="#" class="button">GITHUB LINK</a>
</div>
</div>
<div class="card4 reveal">
    <div class="card-image4">
        <img src="signal.jpg">
    </div>
<div class="card-content4">      
<h2 class="card-title4">Ultrasonic Radar Based Horn System</h2>
<p class="para">It is a noiseless horn system for the vehicles to communicate with each other using ultrasonic waves.</p>
<a href="#" class="button">GITHUB LINK</a>
</div>
</div>
<div class="card5 reveal">
    <div class="card-image5">
        <img src="medical.jpg">
    </div>
<div class="card-content5">      
<h2 class="card-title5">FRIENDLY-MEDICO</h2>
<p class="para">In this pandemic not everyone of us have the courage to go to hospitals and check our own reports.this app will take some short details and keep it in a database. In future it can be used by medicals to get the health data of a person and if any issue is found by the doctor they can directly contact them and problems can be solved over phones.</p>      
<a href="#" class="button">GITHUB LINK</a>
</div>
</div>
<div class="card6 reveal">
    <div class="card-image6">
        <img src="laptop.jpg">
    </div>
<div class="card-content6">      
<h2 class="card-title6">Extractive-Text-Summarization</h2>
<p class="para">A simple python program which can find the most important sentences in a paragraph and can give them as the output. Quite useful for the tasks of reading short summaries of news articles and such. Unlike machine learning models, this doesn't train but rather uses a graph based approach to rank the sentences based on their cosine similarities and give the desired output as a result.</p>      
<a href="#" class="button">GITHUB LINK</a>
</div>
</div>
    </div>
    
    <!----- footer ------>
    <footer>
       <div class="footer_info">
           <div class="footer_width social">
             <div class="social-media"> <h2>FOLLOW US</h2>
               <ul>
                   <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="#"><i class="fab fa-github"></i></a></li>
                   <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                   <li><a href="#"><i class="fab fa-instagram"></i></a></li>

               </ul>
               </div>
           </div>
           <div class="footer_width useful_link">
               <h2>USEFUL LINKS</h2>
               <ul>
                   <li><a href="#">HOME</a></li>
                   <li><a href="#">ABOUT US</a></li>
                   <li><a href="#">PROJECTS</a></li>
                   <li><a href="#">BLOGS</a></li>
                   <li><a href="#">FAQS</a></li>
               </ul>
           </div>
           <div class="footer_width contacts">
               <h2>CONTACT INFORMATION</h2>
               <ul>
                   <li>
                       
                       <p>College Of Engineering And Technology, Ghatikia, Bhubaneswar - 751003</p>
                   </li>
                   <li>
                       
                   <p>spectrumclub.cetb@gmail.com</p>
                    </li>
                    <li>   
                    <p>+91-8249063374</p>
                    </li>
               </ul>
           </div>
       </div> 
    </footer>
    <script type="text/javascript" src="script.js"></script>
</body> 
</html>