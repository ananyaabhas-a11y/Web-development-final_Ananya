<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $house = $_POST['house'] ?? '';
    $year = $_POST['year'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='register.html';</script>";
        exit();
    }
    
    // Create data directory if it doesn't exist
    $data_dir = 'data';
    if (!file_exists($data_dir)) {
        mkdir($data_dir, 0777, true);
    }
    
    $students_file = $data_dir . '/students.json';
    
    // Load existing students
    $students = [];
    if (file_exists($students_file)) {
        $json_data = file_get_contents($students_file);
        $students = json_decode($json_data, true) ?? [];
    }
    
    // Check if email already exists
    foreach ($students as $student) {
        if ($student['email'] === $email) {
            echo "<script>alert('Email already registered!'); window.location.href='register.html';</script>";
            exit();
        }
    }
    
    // Generate unique student ID
    do {
        $student_id = 'HOG' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        $id_exists = false;
        foreach ($students as $student) {
            if ($student['student_id'] === $student_id) {
                $id_exists = true;
                break;
            }
        }
    } while ($id_exists);
    
    // Create new student record
    $new_student = [
        'student_id' => $student_id,
        'full_name' => $full_name,
        'email' => $email,
        'house' => $house,
        'year' => $year,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    // Add to students array
    $students[] = $new_student;
    
    // Save to file
    file_put_contents($students_file, json_encode($students, JSON_PRETTY_PRINT));
    
    echo "<script>alert('Registration successful! Your Student ID is: " . $student_id . "\\n\\nPlease save this ID for login.'); window.location.href='index.html';</script>";
    exit();
}
?>
