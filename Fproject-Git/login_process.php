
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Get form data
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  
  // Database credentials
  $host = 'localhost';
  $username = 'newuser';
  $password = '';
  $database = 'attendance_system';
  
  
  // Create a database connection
  $conn = mysqli_connect($host, $username, $password, $database);
  
  // Check if connection was successful
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Query to select user based on email and role
  if($role == 'admin') {
    $query = "SELECT * FROM admins WHERE email='$email'";
  } else if($role == 'teacher') {
    $query = "SELECT * FROM teachers WHERE email='$email'";
  }
  
  // Execute query
  $result = mysqli_query($conn, $query);
  
  // Check if query was successful
  if(!$result) {
    die("Query failed: " . mysqli_error($conn));
  }
  
  // Check if user exists
  if(mysqli_num_rows($result) == 1) {
    
    // Get user data
    $row = mysqli_fetch_assoc($result);
    
    // Verify password
    if(password_verify($password, $row['password'])) {
      
      // Password is correct, set session variables
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_role'] = $role;
      
      // Redirect user to appropriate page based on their role
      if($role == 'admin') {
        header('Location: admin.php');
      } else if($role == 'teacher') {
        header('Location: teacher.php');
      }
      
    } else {
      // Password is incorrect
      $error = "Invalid password";
    }
    
  } else {
    // User not found
    $error = "User not found";
  }
  
  // Close database connection
  mysqli_close($conn);
  
}

?>
