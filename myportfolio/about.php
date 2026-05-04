<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
        /* Flexbox styling for project items */
        .projects {
            display: flex;
            gap: 20px; /* Space between projects */
            justify-content: center; /* Center the projects horizontally */
            flex-wrap: wrap; /* Wrap the projects if the screen is too small */
        }

        .project {
            flex: 1 1 45%; /* Flex-grow, flex-shrink, and flex-basis (45% of the container width) */
            box-sizing: border-box; /* Ensure padding and borders are included in width and height */
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 8px;
           
        }

        .project img {
            width: 50%; /* Set the image width to 50% of its original size */
            height: auto; /* Maintain the aspect ratio */
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .project {
                flex: 1 1 100%; /* Make each project take full width on smaller screens */
            }
        }
    </style>
<body>
    <header>
        <h1>My projects and Works</h1>
        
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="portfolio">
            <h2>My Projects: </h2>
            
    <section class="features">
        <h1></h1>
        <h1></h1>
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/temp.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Temperature Converter</h4>
                    <p1>An easy-to-use temperature converter for instantly switching between Celsius, Fahrenheit, and Kelvin.</p1><br>
                    <a href="tempconversion/index.html" class="main-btn" href="">Link</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/about.png"/>
                </div>
                <div class="f-text">
                    <h4>Bookjournal </h4>
                    <p1>A simple and organized way to track your reading. Record book titles, authors, reading dates, and personal notes in one place.</p1><br>                   
                     <a href="bookjournal/index.php" class="main-btn" >Link</a>
                </div>
            </div>  



            <div class="feature-box">
                <div class="f-img">
                    <img src="images/HMS.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Hospital Management System </h4>
                    <p1>An efficient system for managing patient records, appointments, medical staff, and billing.</p1><br>
                    <a href="hospital/index.php" class="main-btn" >Link</a>
                </div>
            </div>
                                
            </div>
        </section>
    </main>
    

   <!-- <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>-->
  <!-- <script src="js/script.js"></script> -->
</body>
</html>
