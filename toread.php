<?php
include 'db_connect.php'; // Include your database connection file

$sql = "SELECT book_name, author, rating, genre, reading_status FROM books WHERE reading_status = 'TOREAD'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to external CSS file -->
    <style>
        /* Internal CSS for quick styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
    </style>
    </head>
<body>
<header >
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
            <li><a href="index.php" >Home</a></li>
                <li><a href="dashboard.php"  class="active">Dashboard</a></li>
                <li><a href="aboutme.php" >About me</a></li>
                <li><a href="contact.php"  >contact</a></li>
                
    
            </ul>
        </nav>
    </header>
    <h1>To Be Read</h1>
    <?php
    // Check if the query was successful
    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    // Check if there are any rows to display
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Book Name</th>
                    <th>Book Image</th>
                    <th>Rating</th>
                    <th>Genre</th>
                    <th>Reading Status</th>
                </tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["book_name"]) . "</td>
                    <td>" . htmlspecialchars($row["author"]) . "</td>
                    <td>" . htmlspecialchars($row["rating"]) . "</td>
                    <td>" . htmlspecialchars($row["genre"]) . "</td>
                    <td>" . htmlspecialchars($row["reading_status"]) . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No  books found in tbr list.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>