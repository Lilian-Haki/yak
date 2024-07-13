<?php
error_reporting(E_ERROR);
error_reporting(0);
include("data/conn.php");
if (isset($_POST['reset'])) {
        if ($_POST['password'] != $_POST['cpassword']) {
            echo "<script>alert('Oops! Passwords do not match.')</script>";
        } elseif (strlen($_POST['password']) < 4) {
            echo "<script>alert('Your password is weak.')</script>";
        } else {
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from admin where email='".$_POST['email']."'"))>0){
                if(mysqli_num_rows(mysqli_query($conn,"SELECT * from admin where email='".$_POST['email']."' and password='" . sha1(md5(addslashes($_POST['password']))) . "'"))>0){
                    echo "<script>alert('Please try again Later with a different Password.')</script>";
                }else{
                    if(mysqli_query($conn,"UPDATE admin set password='".sha1(md5(addslashes($_POST['password'])))."' where email='".$_POST['email']."'")){
                        echo "<script>alert('Password Reset.')</script>";
                        echo "<script>location.href='login'</script>";
                    } else {
                        echo "<script>alert('Failed to Reset.')</script>";
                    }
                }
            } else {
                echo "<script>alert('Account not Found.')</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Alive Kenya</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <?php include('home/hidden.php');?>
    <div class="signin">
        <div class="content">
            <h2>Reset Password</h2>
            <div class="form">
                <form action="" method="post">
                    <div class="inputBx">
                        <input type="email" id="" name="email" required>
                        <i>Email Address</i>
                    </div><br>
                    <div class="inputBx">
                        <input type="password" id="" name="password" required
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="15" minlength="4">
                        <i>New Password</i>
                    </div><br>
                    <div class="inputBx">
                        <input type="password" id="" name="cpassword" required
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="15" minlength="4">
                        <i>Confirm Password</i>
                    </div><br>
                    <div class="links">
                        <a href="#"></a>
                        <a href="login">Back to Login</a>
                    </div><br>
                    <div class="inputBx">
                        <input type="submit" value="Reset Password" name="reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
</body>
</html>