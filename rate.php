<?php
include 'db_connect.php'; // Include your database connection file

// Fetch unique ratings
$sql_ratings = "SELECT DISTINCT rating FROM books";
$result_ratings = $conn->query($sql_ratings);

if ($result_ratings === false) {
    die("Error fetching ratings: " . $conn->error);
}

// Prepare an array to hold ratings
$ratings = [];
while ($row = $result_ratings->fetch_assoc()) {
    $ratings[] = $row['rating'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books by Rating</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your external CSS file -->
    <style>
        /* Basic CSS for styling the tables */
        .rating-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        .rating-table th, .rating-table td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        .rating-table th {
            background-color: #f2f2f2;
        }
        .rating-table tr:hover {
            background-color: #f5f5f5;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
        h2 {
            margin-bottom: 10px;
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
    <h1>Books by Rating</h1>
    <?php foreach ($ratings as $rating) : ?>
        <h2>Rating: <?php echo htmlspecialchars($rating); ?></h2>
        <table class="rating-table">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Reading Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch books for the current rating
                $sql_books = "SELECT book_name, author, genre, reading_status FROM books WHERE rating = '" . $conn->real_escape_string($rating) . "'";
                $result_books = $conn->query($sql_books);

                if ($result_books === false) {
                    die("Error fetching books for rating '$rating': " . $conn->error);
                }

                // Output data of each row
                if ($result_books->num_rows > 0) {
                    while($row = $result_books->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row["book_name"]) . "</td>
                                <td>" . htmlspecialchars($row["author"]) . "</td>
                                <td>" . htmlspecialchars($row["genre"]) . "</td>
                                <td>" . htmlspecialchars($row["reading_status"]) . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No books found with this rating.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php endforeach; ?>

    <?php $conn->close(); // Close the database connection ?>
</body>
</html>
