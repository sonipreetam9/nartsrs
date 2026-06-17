<?php
ob_start();
session_start();
include 'config.php';

// Redirect if already logged in
if (isset($_SESSION["superidinst"])) {
    header("location:main.php");
    exit;
}

$error_msg = "";

// Handle Login Request
if (isset($_POST["login"])) {
    $uid = mysqli_real_escape_string($link, $_POST["uid"]);
    $upass = mysqli_real_escape_string($link, $_POST["password"]);

    // Note: Double base64 encoding is used here to match your existing database logic
    $enrypt = base64_encode(base64_encode($upass));
    
    $que = "SELECT * FROM tbl_instute WHERE CentreEmail='$uid' AND Password='$enrypt'";
    $result = mysqli_query($link, $que);
    
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        $_SESSION["superidinst"] = $data['id'];
        
        // Assuming 'name' exists in your table based on your original code
        $_SESSION["superidinstname"] = isset($data['name']) ? $data['name'] : 'Admin'; 
        
        header("location:main.php");
        exit;
    } else {
        $error_msg = "Invalid Username or Password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NART Institute Admin | Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-header img {
            width: 120px;
            height: auto;
            margin-bottom: 15px;
        }
        .login-header h4 {
            color: #333;
            font-weight: 700;
            margin: 0;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border-right: none;
            color: #6c757d;
        }
        .form-control {
            border-left: none;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ced4da;
        }
        .input-group:focus-within .input-group-text,
        .input-group:focus-within .form-control {
            border-color: #0d6efd;
            color: #0d6efd;
        }
        .btn-login {
            background-color: #0d6efd;
            color: white;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }
        .register-link {
            text-align: center;
            margin-top: 25px;
            font-size: 0.95rem;
            color: #6c757d;
        }
        .register-link a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 d-flex justify-content-center">
                
                <div class="login-card">
                    <div class="login-header">
                        <img src="/assets/images/logo.png" alt="NART Logo">
                        <h4>Institute Admin</h4>
                    </div>

                    <?php if (!empty($error_msg)): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i> <?php echo $error_msg; ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="">
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="uid" required class="form-control" placeholder="Email Address / Username">
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" required class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" name="login" class="btn btn-login">
                                Login <i class="fa-solid fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </form>

                    <!-- <div class="register-link">
                        Don't have an account? <br>
                        <a href="">Register Here</a>
                    </div> -->
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>