<?php
session_start();

// Check session data
echo "=== SESSION DATA ===<br>";
echo "User ID: " . ($_SESSION['user_id'] ?? 'NOT SET') . "<br>";
echo "Profile Picture: " . ($_SESSION['profile_picture'] ?? 'NOT SET') . "<br>";

// Check file system
echo "<br>=== FILE SYSTEM CHECK ===<br>";
$uploadDir = 'public/uploads/my_profile';
$profilePic = $_SESSION['profile_picture'] ?? null;

echo "Upload Directory: " . $uploadDir . "<br>";
echo "Directory Exists: " . (is_dir($uploadDir) ? 'YES' : 'NO') . "<br>";
echo "Directory Writable: " . (is_writable($uploadDir) ? 'YES' : 'NO') . "<br>";

if ($profilePic) {
    $filePath = $uploadDir . '/' . $profilePic;
    echo "<br>Profile Picture File: " . $profilePic . "<br>";
    echo "Full Path: " . $filePath . "<br>";
    echo "File Exists (file_exists): " . (file_exists($filePath) ? 'YES' : 'NO') . "<br>";
    echo "File Exists (is_file): " . (is_file($filePath) ? 'YES' : 'NO') . "<br>";
    
    if (is_file($filePath)) {
        echo "File Size: " . filesize($filePath) . " bytes<br>";
    }
}

// List files in upload directory
echo "<br>=== FILES IN UPLOAD DIRECTORY ===<br>";
if (is_dir($uploadDir)) {
    $files = scandir($uploadDir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo $file . "<br>";
        }
    }
} else {
    echo "Directory does not exist!<br>";
}
?>
