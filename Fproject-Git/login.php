<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acity Attendance System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("acity-college.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        .login-form {
            margin-top: 100px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
        }

        .login-form form {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .login-form .hint-text {
            color: #007bff;
            padding-bottom: 15px;
            text-align: center;
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form input[type="submit"] {
            border-radius: 5px;
            margin-top: 10px;
            background-color: #007bff;
            border: none;
        }

        .login-form input[type="submit"]:hover {
            background-color: #0069d9;
        }

        .login-form a {
            color: #007bff;
            text-decoration: none;
        }

        .login-form a:hover {
            color: #0069d9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-form">
                    <h2 class="text-center">Login</h2>
                    <form action="login_process.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <select name="role" class="form-control" required="required">
                                <option value="" selected disabled>Select your role</option>
                                <option value="admin">Admin</option>
                                <option value="teacher">Teacher</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <div class="hint-text"><a href="teacher_registration.php">Create a new account as a
                                Teacher</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
