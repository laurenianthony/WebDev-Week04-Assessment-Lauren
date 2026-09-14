<?php
session_start();

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$year_level = $_POST['year_level'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <?php
        if (empty($name) || empty($email) || empty($year_level)) {
            echo "<h2>Validation Error</h2>";
            echo "<div class='alert-error'><strong>Error:</strong> All fields are required. Please go back and fill out the form completely.</div>";
            echo "<a href='index.html' class='btn'>← Back to Form</a>";
        } else {
            $student_data = [
                "Full Name"  => $name,
                "Email"      => $email,
                "Year Level" => $year_level
            ];

            $_SESSION['user_name'] = $name;

            echo "<h2>Registration Details</h2>";
            echo "<div class='alert-success'>Form submitted successfully!</div>";
            echo "<ul>";
            foreach ($student_data as $key => $value) {
                echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
            }
            echo "</ul>";

            echo "<a href='dashboard.php' class='btn'>Go to Second Page (Session Test) →</a>";
        }
        ?>
    </div>

</body>
</html>