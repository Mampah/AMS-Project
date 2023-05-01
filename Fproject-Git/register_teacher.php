<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course_id = $_POST['course_id'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO pending_teachers (firstname, lastname, course_id, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$firstname, $lastname, $course_id, $email, $password]);
    $message = "Teacher registration successful!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <?php if(isset($message)): ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
    <?php endif; ?>
    <a href="login.php" class="btn btn-primary">Go to Login Page</a>
</div>
</body>
</html>
