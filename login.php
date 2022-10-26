<?php
    session_start();
    if(isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type=“text/css”>
        p {
            border: 1px solid black;
            padding: 2px;
            margin: 40px;
        }
            </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
    <h1><center>Webboard JamePut</center></h1>
    <?php include "nav.php"; ?>
    <hr>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php 
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                    unset($_SESSION['error']);
                }
            ?>
            <div class="card text-dark bg-light">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="verify.php" method="post">
                        <div class="form-group mb-2">
                            <label class="form-label">Login :</label>
                            <input type="text" name="login" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Password :</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <center><button type="submit" class="btn btn-secondary btn-sm">Login</button></center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php" target=""> กรุณาสมัครสมาชิก </a></center><br>
    

    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>