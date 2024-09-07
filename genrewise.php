<?php
include 'db_connect.php'; // Include your database connection file

// Step 1: Fetch unique genres
$sql_genres = "SELECT DISTINCT genre FROM books";
$result_genres = $conn->query($sql_genres);

if ($result_genres === false) {
    die("Error fetching genres: " . $conn->error);
}

// Step 2: Generate dynamic columns
$genres = [];
while ($row = $result_genres->fetch_assoc()) {
    $genres[] = $row['genre'];
}

// Step 3: Generate and populate the table
$sql_books = "SELECT book_name, author, rating, genre, reading_status FROM books";
$result_books = $conn->query($sql_books);

if ($result_books === false) {
    die("Error fetching books: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books by Genre</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your external CSS file -->
    <style>
        /* Basic CSS for styling the table */
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
        .genre-column {
            vertical-align: top;
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
    <h1>Books by Genre</h1>
    <?php foreach ($genres as $genre) : ?>
        <h2><?php echo htmlspecialchars($genre); ?></h2>
        <table class="genre-table">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Rating</th>
                    <th>Reading Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch books for the current genre
                $sql_books = "SELECT book_name, author, rating, reading_status FROM books WHERE genre = '" . $conn->real_escape_string($genre) . "'";
                $result_books = $conn->query($sql_books);

                if ($result_books === false) {
                    die("Error fetching books for genre '$genre': " . $conn->error);
                }

                // Output data of each row
                if ($result_books->num_rows > 0) {
                    while($row = $result_books->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row["book_name"]) . "</td>
                                <td>" . htmlspecialchars($row["author"]) . "</td>
                                <td>" . htmlspecialchars($row["rating"]) . "</td>
                                <td>" . htmlspecialchars($row["reading_status"]) . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No books found for this genre.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php endforeach; ?>

    <?php $conn->close(); // Close the database connection ?>
</body>
</html>
