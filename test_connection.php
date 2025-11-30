<?php
// Test file-based storage system
echo "<h1>Hogwarts System Status</h1>";

$data_dir = 'data';
$students_file = $data_dir . '/students.json';

// Check if data directory exists
if (!file_exists($data_dir)) {
    echo "<h2 style='color: orange;'>⚠️ Data Directory Not Found</h2>";
    echo "<p>Creating data directory...</p>";
    if (mkdir($data_dir, 0777, true)) {
        echo "<p style='color: green;'>✅ Data directory created successfully!</p>";
    } else {
        echo "<p style='color: red;'>❌ Failed to create data directory</p>";
    }
} else {
    echo "<h2 style='color: green;'>✅ Data Directory Exists</h2>";
}

// Check if students file exists
if (!file_exists($students_file)) {
    echo "<h2 style='color: orange;'>⚠️ No Students Registered Yet</h2>";
    echo "<p>The students.json file will be created when the first student registers.</p>";
} else {
    echo "<h2 style='color: green;'>✅ Students File Exists</h2>";
    
    // Load and display student count
    $json_data = file_get_contents($students_file);
    $students = json_decode($json_data, true) ?? [];
    
    echo "<p><strong>Total registered students:</strong> " . count($students) . "</p>";
    
    if (count($students) > 0) {
        echo "<h3>Registered Students:</h3>";
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
        echo "<tr><th>Student ID</th><th>Name</th><th>House</th><th>Year</th><th>Email</th></tr>";
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($student['student_id']) . "</td>";
            echo "<td>" . htmlspecialchars($student['full_name']) . "</td>";
            echo "<td>" . htmlspecialchars($student['house']) . "</td>";
            echo "<td>" . htmlspecialchars($student['year']) . "</td>";
            echo "<td>" . htmlspecialchars($student['email']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

echo "<hr>";
echo "<h3>System Ready!</h3>";
echo "<p>✅ No MySQL database required</p>";
echo "<p>✅ Student data stored in JSON files</p>";
echo "<p>✅ Only Apache needs to be running in XAMPP</p>";
echo "<hr>";
echo "<p><a href='index.html' style='padding: 10px 20px; background: #740001; color: white; text-decoration: none; border-radius: 5px;'>Go to Login Page</a> ";
echo "<a href='register.html' style='padding: 10px 20px; background: #0e1a40; color: white; text-decoration: none; border-radius: 5px;'>Go to Registration</a></p>";
?>
