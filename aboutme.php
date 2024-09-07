<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture and Text Layout</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your external CSS file -->
    <style>
        /* Basic CSS for layout */
        .container {
            display: flex;
            align-items: flex-start; /* Align items to the top */
            margin: 20px;
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 0%; /* Makes the image circular */
            overflow: hidden;
            margin-right: 20px; /* Space between image and text */
        }
        .profile-pic img {
            width: 100%;
            height: 95%;
        }
        .text-content {
            max-width: 600px;
        }
        .text-content h1 {
            margin: 0;
            font-size: 45px;
        }
        .text-content p {
            margin-top: 10px;
            font-size: 25px;
            margin-left: 50px; 
            color: #666;
        }
    </style>
</head>
<body>

    <div >
    <header >
        <nav>
            <a href="#" class="logo">
                
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
            <li><a href="index.php" >Home</a></li>
                <li><a href="dashboard.php"  >Dashboard</a></li>
                <li><a href="aboutme.php" class="active">About me</a></li>
                <li><a href="contact.php"  >contact</a></li>
                
    
            </ul>
        </nav>
    </header>
    <section class="about1">
        
        <div class="about1-img">
            <img src="images/div4.jpg">
        </div>
        <div class="about1-text">
        
            <h2>ALL about Me</h2>
            <p>Hello! I'm Divya B, a passionate learner with a deep love for reading and exploring new ideas. With a background in Electronics and Instrumentation And a minor course in Cse, I’ve cultivated a strong foundation in both electronics and webdevelopment, and I continually seek opportunities to expand my horizons. My enthusiasm for learning extends beyond traditional education; I'm always diving into new books, articles, and resources to stay ahead in my field and satisfy my curiosity.</p>


<p>Whether it’s through reading, experimenting with new technologies, or tackling challenging projects, I’m dedicated to growth and exploration. Thank you for visiting my portfolio, where you can see the results of my continual learning and creativity. Feel free to connect with me—I’m always eager to discuss new ideas and opportunities!</p>

          
           
        </div>
    </section>



    <section class="features">
        <h1></h1>
        <h1></h1>
        
        <h1>My projects:</h1>
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/portfolio.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>My Personal Portfolio Website</h4>
                    
                    <a href="myportfolio/index.php" class="main-btn" href="">Link</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/HMS.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Hospital Management System </h4>
                    <p></p>
                    <a href="hospital/index.php" class="main-btn" >Link</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/temp.jpeg"/>
                </div>
                <div class="f-text">
                    <h4> Temperature Converter  </h4>
                    <p></p>
                    <a href="tempconversion/index.html" class="main-btn" >Link</a>
                </div>
            </div>

            
        </div>
    </section>
</body>
</html>
