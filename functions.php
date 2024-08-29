<?php
function get_seo_metadata($conn, $page_url) {
    $sql = "SELECT title, description, keywords FROM seo_metadata WHERE page_url = ?";
    
    // Prepare and bind
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $page_url);

    // Execute statement
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    // Bind result variables
    $stmt->bind_result($title, $description, $keywords);

    // Fetch the results
    if ($stmt->fetch()) {
        return array(
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords
        );
    } else {
        return null; // or handle the case when no result is found
    }

    // Close statement
    $stmt->close();
}
?>
