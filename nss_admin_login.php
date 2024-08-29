<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1b4f72;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #004494;
            border-color: #004494;
        }
        .form-group {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3 class="text-center">Admin Login</h3>
        <p class="text-center">Please enter the details</p>
        <form>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="Enter user name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
                <span class="toggle-password" onclick="togglePassword()">
                    <img src="https://img.icons8.com/material-rounded/24/000000/visible.png" alt="toggle password visibility">
                </span>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var passwordToggle = document.querySelector(".toggle-password img");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggle.src = "https://img.icons8.com/material-rounded/24/000000/invisible.png";
            } else {
                passwordInput.type = "password";
                passwordToggle.src = "https://img.icons8.com/material-rounded/24/000000/visible.png";
            }
        }
    </script>
</body>
</html>
