
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8d7da;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Teacher Registration</h2>
        <form method="POST" action="register_teacher.php">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" required>

            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" name="lastname" placeholder="last Name" required>

            </div>
            <div class="form-group">
                <label for="course_id">Course ID:</label>
                <input type="text" class="form-control" name="course_id" placeholder="course id" required>

            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="text" class="form-control" name="email" placeholder="email" required>

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="password" required>

            </div>
            <button type="submit" class="btn btn-primary" a href="register_teacher.php">Register</button>
            <div class="hint-text">Already have an account? <a href="login.php">Log in here</a></div>
        
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6 
