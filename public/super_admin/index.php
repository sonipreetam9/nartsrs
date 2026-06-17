<?php
ob_start();
session_start();
include 'config.php'; 

// Redirect if already logged in
if(isset($_SESSION["superid"])) {
    header("location:super_admin/main.php");
    exit;
}

$error_msg = "";

// Handle Login Request
if(isset($_POST["login"])) {
    $uid = mysqli_real_escape_string($link, $_POST["uid"]);
    $upass = mysqli_real_escape_string($link, $_POST["password"]);
    
    // Note: Kept MD5 hashing to match your existing database structure
    $enrypt = md5($upass); 
    
    $que = "SELECT * FROM tbl_admin WHERE email='$uid' AND mdpass='$enrypt'";
    $result = mysqli_query($link, $que);
    
    if(mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        $_SESSION["superid"] = $data['id'];
        $_SESSION["supername"] = $data['name'];  
        
        header("location:super_admin/main.php");  
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
    <title>NART Super Admin | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
            border-top: 5px solid #212529; /* Dark accent for Super Admin */
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
            color: #212529;
            font-weight: 700;
            margin: 0;
            letter-spacing: 0.5px;
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
            border-color: #212529;
            color: #212529;
        }
        .btn-login {
            background-color: #212529;
            color: white;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: #343a40;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(33, 37, 41, 0.3);
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
                        <h4>Super Admin</h4>
                    </div>

                    <?php if (!empty($error_msg)): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i> <?php echo $error_msg; ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="">
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="email" name="uid" required class="form-control" placeholder="Admin Email">
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                <input type="password" name="password" required class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" name="login" class="btn btn-login">
                                Secure Login <i class="fa-solid fa-shield-halved ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>