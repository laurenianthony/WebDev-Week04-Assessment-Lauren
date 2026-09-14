<?php
session_start();

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$year_level = $_POST['year_level'] ?? '';

// Step 2: Check for missing fields
if (empty($name) || empty($email) || empty($year_level)) {
    echo "<h3>Error: All fields are required. Please go back and fill out the form completely.</h3>";
    echo "<a href='index.html'>← Back to Form</a>";
} else {
    // Step 2: Store values into an associative array
    $student_data = [
        "Full Name"  => $name,
        "Email"      => $email,
        "Year Level" => $year_level
    ];

    // Step 3: Store name in session
    $_SESSION['user_name'] = $name;

    echo "<h3>Registration Successful</h3>";
    echo "<p>Submitted Information:</p>";

    // Step 2: Loop through array with foreach
    echo "<ul>";
    foreach ($student_data as $key => $value) {
        echo "<li><strong>" . $key . ":</strong> " . $value . "</li>";
    }
    echo "</ul>";

    // Step 4: Link to second page
    echo "<br><a href='dashboard.php'>Go to Second Page (Session Test) →</a>";
}
?>