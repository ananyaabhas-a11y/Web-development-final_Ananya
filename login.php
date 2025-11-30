<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $students_file = 'data/students.json';
    
    // Check if students file exists
    if (!file_exists($students_file)) {
        echo "<script>alert('No students registered yet. Please register first.'); window.location.href='register.html';</script>";
        exit();
    }
    
    // Load students data
    $json_data = file_get_contents($students_file);
    $students = json_decode($json_data, true) ?? [];
    
    // Find student by ID
    $found_student = null;
    foreach ($students as $student) {
        if ($student['student_id'] === $student_id) {
            $found_student = $student;
            break;
        }
    }
    
    if ($found_student) {
        // Verify password
        if (password_verify($password, $found_student['password'])) {
            $_SESSION['student_id'] = $found_student['student_id'];
            $_SESSION['student_data'] = $found_student;
            header('Location: dashboard.php');
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location.href='index.html';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Student ID not found!'); window.location.href='index.html';</script>";
        exit();
    }
}
?>
