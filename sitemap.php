<?php
include 'config.php';



header("Content-Type: application/xml; charset=UTF-8");

// Query to get all page URLs
$sql = "SELECT page_url FROM seo_metadata";
$result = $conn->query($sql);

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $page_url = htmlspecialchars($row['page_url'], ENT_QUOTES, 'UTF-8');
        echo '<url>';
        echo '<loc>https://nssorg.com' . $page_url . '</loc>';
        echo '<changefreq>weekly</changefreq>';
        echo '<priority>0.8</priority>';
        echo '</url>';
    }
}

echo '</urlset>';

$conn->close();
?>
