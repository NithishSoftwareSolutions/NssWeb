<?php
include_once 'config.php';

// Validate and process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Example validation (customize as per your requirements)
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        // Execute the statement
        if ($stmt->execute()) {
            // Success message
            $response = array(
                'success' => true,
                'message' => 'Message sent successfully!'
            );
        } else {
            // Error message
            $response = array(
                'success' => false,
                'message' => 'Error saving message to database.'
            );
        }

        // Close statement
        $stmt->close();
    } else {
        // Return errors
        $response = array(
            'success' => false,
            'message' => implode('<br>', $errors)
        );
    }

    // Return JSON response
    echo json_encode($response);
} else {
    // If not a POST request, return error
    $response = array(
        'success' => false,
        'message' => 'Method not allowed.'
    );
    echo json_encode($response);
}
?>
