<?php
ob_start();
error_reporting(E_ERROR);
error_reporting(0);
session_start();
include("data/conn.php");
if (isset($_POST['login'])) {
    $username = addslashes($_POST['username']);
    $password = sha1(md5(addslashes($_POST['password'])));
        $result = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$password'");
        $row = mysqli_fetch_array($result);
        if (is_array($row)) {
            $_SESSION["YAK"] = $row['admno'];
            echo "<script>alert('You Logged in successfully.')</script>";
            echo "<script>location.href='index'</script>";
        } else {
            echo "<script>alert('Sorry! Your credentials are invalid.')</script>";
        }
}
ob_end_flush();
if (isset($_POST['signup'])) {
        if (strlen($_POST['password']) < 4) {
            echo "<script>alert('Your Password is weak.')</script>";
        } elseif ($_POST['password'] != $_POST['cpassword']) {
            echo "<script>alert('Oops! Passwords do not match.')</script>";
        } else {
            date_default_timezone_set('Africa/Nairobi');
            $date=date('D, Y-m-d H:i:sa');
            $text="home/pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values=$yak[0];
            $admno=date('Y').$values;
            $fname=addslashes($_POST['fname']);
            $lname=addslashes($_POST['lname']);
            $email=addslashes($_POST['email']);
            $username=addslashes($_POST['username']);
            $password=sha1(md5(addslashes($_POST['password'])));
            if(mysqli_query($conn,"INSERT INTO admin(admno,fname,lname,email,username,password,date)
            VALUES('$admno','$fname','$lname','$email','$username','$password','$date')")){
                echo "<script>alert('Account Registered.')</script>";
            }else{
                echo "<script>alert('Failed to Register..')</script>";
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
        <?php
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * from admin")) > 0) {
            echo '
            <h2>Sign In</h2>
            <div class="form">
                <form action="" method="post">
                    <div class="inputBx">
                        <input type="text" name="username" id="" required>
                        <i>Username</i>
                    </div><br>
                    <div class="inputBx">
                        <input type="password" name="password" id="" required
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="15" minlength="4">
                        <i>Password</i>
                    </div><br>
                    <div class="links">
                        <a href="pass">Forgot Password?</a>
                    </div><br>
                    <div class="inputBx">
                        <input type="submit" value="Login" name="login">
                    </div>
                </form>
            </div>';
        }else{
            echo '
            <h2>Sign Up</h2>
            <div class="form">
                <form action="" method="post">
                    <div class="inputBx">
                        <input type="text" name="fname" id="" required>
                        <i>Firstname</i>
                    </div><br>
                    <div class="inputBx">
                        <input type="text" name="lname" id="" required>
                        <i>Lastname</i>
                    </div><br>
                    <div class="inputBx">
                        <input type="email" id="" name="email" required>
                        <i>Email Address</i>
                    </div><br>
                    <div class="inputBx">
                        <input type="text" name="username" id="" required>
                        <i>Username</i>
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
                    <div class="inputBx">
                        <input type="submit" value="Signup" name="signup">
                    </div>
                </form>
            </div>';}?>
        </div>
    </div>
    </section>
</body>
</html>