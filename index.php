<?php
// Include database connection
include 'reusables/connection.php';

// SQL query to join news and images tables
$query = "SELECT 
            n.news_id, 
            n.link, 
            n.headline, 
            n.category, 
            n.short_description, 
            n.authors, 
            n.number_of_reads, 
            n.date, 
            i.image_url, 
            i.alt_text
        FROM news n
        LEFT JOIN images i ON n.news_id = i.news_id
        ORDER BY n.date DESC";

$news = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="news-container">
        <h1>Latest News</h1>

        <?php
        if ($news->num_rows > 0) {
            $prev_news_id = null; 

            while ($row = $news->fetch_assoc()) {
                $news_id = $row['news_id'];

                // Display news details only if it's a new news_id (avoids duplicate display due to JOIN)
                if ($news_id !== $prev_news_id) {
                    if ($prev_news_id !== null) {
                        echo "</div></div>"; 
                    }

                    echo "<div class='news-item'>";
                    echo "<a href='" . $row['link'] . "' class='news-title'>" . $row['headline'] . "</a>";
                    echo "<p class='news-category'>Category: " . $row['category'] . "</p>";
                    echo "<p class='news-description'>" . $row['short_description'] . "</p>";
                    echo "<p class='news-meta'>By " . $row['authors'] . " | Reads: " . ($row['number_of_reads'] ?? 0) . " | Date: " . $row['date'] . "</p>";
                    echo "<div class='news-images'>"; 
                }

                // Display images related to this news
                if (!empty($row['image_url'])) {
                    echo "<img class='news-image' src='" . $row['image_url'] . "' alt='" . $row['alt_text'] . "'>";
                }

                $prev_news_id = $news_id;
            }

            echo "</div></div>"; 
        } else {
            echo "<p>No news articles found.</p>";
        }
        ?>

    </div>

</body>
</html>
