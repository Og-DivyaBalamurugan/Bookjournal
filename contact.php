<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<header >
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
            <li><a href="index.php" >Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="aboutme.php" >About me</a></li>
                <li><a href="contact.php"  class="active" >contact</a></li>
                
    
            </ul>
        </nav>
    </header>
<footer class="contact">
        <div class="contact-heading">
            <h1>Contact Me</h1>
            
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
</footer>
    
</body>


