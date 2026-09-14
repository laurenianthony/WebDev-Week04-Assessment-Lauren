<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <h2>User Dashboard</h2>

        <?php if (isset($_SESSION['user_name'])): ?>
            <div class="alert-success" style="text-align: center;">
                <p style="margin: 0; font-size: 16px;">Welcome back, <strong><?php echo htmlspecialchars($_SESSION['user_name']); ?></strong>!</p>
                <p style="margin: 6px 0 0 0; font-size: 13px;">Session persistence test passed successfully.</p>
            </div>
        <?php else: ?>
            <div class="alert-error" style="text-align: center;">
                <p style="margin: 0;">No active session found. Please fill out the form first.</p>
            </div>
        <?php endif; ?>

        <a href="index.html" class="btn btn-secondary">Back to Form</a>
    </div>

</body>
</html>