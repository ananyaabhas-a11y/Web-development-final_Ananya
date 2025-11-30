<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header('Location: index.html');
    exit();
}
$student = $_SESSION['student_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board - Hogwarts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="<?php echo strtolower($student['house']); ?>">
    <nav class="navbar">
        <div class="nav-brand">Hogwarts</div>
        <ul class="nav-menu">
            <li><a href="dashboard.php">Back to Dashboard</a></li>
            <li class="logout-btn"><a href="logout.php">🚪 Logout</a></li>
        </ul>
    </nav>

    <div class="dashboard-container">
        <h2>Notice Board</h2>
        <div class="notices">
            <div class="notice-item">
                <h3>Quidditch Match Announcement</h3>
                <p class="notice-date">November 28, 2025</p>
                <p>Gryffindor vs Slytherin match scheduled for this Saturday at 2 PM. All students are encouraged to attend.</p>
            </div>
            <div class="notice-item">
                <h3>Library Hours Extended</h3>
                <p class="notice-date">November 25, 2025</p>
                <p>The library will remain open until midnight during exam week to accommodate student study needs.</p>
            </div>
            <div class="notice-item">
                <h3>Hogsmeade Visit</h3>
                <p class="notice-date">November 20, 2025</p>
                <p>Students with signed permission slips may visit Hogsmeade this weekend. Departure at 10 AM from the main gates.</p>
            </div>
        </div>
    </div>
</body>
</html>
