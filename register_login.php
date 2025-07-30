<?php 
session_start(); 
    $host = "localhost"; 
    $user = "root"; 
    $password = ""; 
    $db = "decor_nest"; 
    $conn = new mysqli($host, $user, $password, $db); 
    $msg = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        if (isset($_POST['register'])) { 
            $name = trim($_POST['name']); 
            $email = trim($_POST['email']); 
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            $check = $conn->prepare("SELECT id FROM users WHERE email = ?"); 
            $check->bind_param("s", $email); 
            $check->execute(); $check->store_result(); 
            if ($check->num_rows > 0) { 
                $msg = "User already exists. Please login."; 
            } 
            else { 
                    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)"); 
                    $stmt->bind_param("sss", $name, $email, $password); 
                    if ($stmt->execute()) { 
                        $msg = "Registration successful. You can now login."; 
                    } 
                    else { 
                            $msg = "Error: " . $conn->error; 
                    } 
                } 
        } 
        if (isset($_POST['login'])) { 
                    $email = trim($_POST['email']); 
                    $password = $_POST['password']; 
                    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?"); 
                    $stmt->bind_param("s", $email); 
                    $stmt->execute(); $stmt->store_result(); 
                    $stmt->bind_result($id, $name, $hashedPassword); 
                    if ($stmt->fetch()) { 
                        if (password_verify($password, $hashedPassword)) { 
                            $_SESSION['user'] = $name; 
                            header("Location: dashboard.php"); 
                            exit(); 
                        } 
                        else { 
                                $msg = "Invalid password."; 
                            } 
                    } 
                    else { 
                        $msg = "User not found."; 
                    } 
        } 
    } 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>Register/Login - DecorNest</title> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
<style> 
body { 
    background: #01053dff 100%; 
    font-family: Arial, sans-serif; 
    } 

.container { 
    margin-top: 50px;
    width: 500px;
      padding: 0;
      height: 100vh;
    display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;} 
     .form-box { 
        background-color: #e2cfcfff; 
        padding: 30px; 
        border-radius: 10px; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
    }
    .btn-success, .btn-primary {
      font-weight: bold;
      letter-spacing: 0.5px;
    }
    .alert {
      font-weight: bold;
    }
    h3 {
      color: #01053d;
    }
</style> </head> 
<body> 
<div class="container"> 
    <div class="form-box"> 
        <h3 class="text-center">Register</h3> 
        <form method="POST"> 
            <div class="mb-3"> 
                <label for="name" class="form-label">Full Name</label> 
                <input type="text" class="form-control" name="name" required> 
            </div> 
            <div class="mb-3"> 
                <label for="email_reg" class="form-label">Email address</label> 
                <input type="email" class="form-control" name="email" required> 
            </div> 
            <div class="mb-3"> 
                <label for="password_reg" class="form-label">Password</label> 
                <input type="password" class="form-control" name="password" required> 
            </div> 
            <button type="submit" name="register" class="btn btn-success w-100">Register</button> 
        </form>
        <hr class="my-4">
        <h3 class="text-center">Login</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="email_log" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password_log" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </form>
        <?php if ($msg): ?>
            <div class="alert alert-info mt-3 text-center">
                <?php echo $msg; ?>
            </div>
            <?php endif; ?>
    </div> 
</div> 
</body>
 </html>