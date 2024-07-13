<?php
include("../data/conn.php");
$yak=$_POST['yak'];
if($yak=='L'){
    $user=addslashes($_POST['user']);
    $per=$_POST['per'];
    $pass=md5(sha1(addslashes($_POST['pass'])));
    if($per=='c'){
        $connect=mysqli_query($conn,"SELECT * from client where username='$user' and password='$pass'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['client_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']=$row['dob'];
                $you['age']=$row['age'];
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['county'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }elseif($per=='f'){
        $connect=mysqli_query($conn,"SELECT * from staff where username='$user' and password='$pass' and role='Finance Manager'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['staff_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']='dob';
                $you['age']='age';
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['role'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }elseif($per=='p'){
        $connect=mysqli_query($conn,"SELECT * from partner where username='$user' and password='$pass'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['partner_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']=$row['dob'];
                $you['age']=$row['age'];
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['address'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }elseif($per=='s'){
        $connect=mysqli_query($conn,"SELECT * from staff where username='$user' and password='$pass' and role='Service Manager'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['staff_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']='dob';
                $you['age']='age';
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['role'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }elseif($per=='t'){
        $connect=mysqli_query($conn,"SELECT * from trainer where username='$user' and password='$pass'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['trainer_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']='dob';
                $you['age']='age';
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['address'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }elseif($per=='m'){
        $connect=mysqli_query($conn,"SELECT * from mentor where username='$user' and password='$pass'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['mentor_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']=$row['dob'];
                $you['age']=$row['age'];
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['address'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }elseif($per=='e'){
        $connect=mysqli_query($conn,"SELECT * from staff where username='$user' and password='$pass' and role='Event Manager'");
        if(mysqli_num_rows($connect)===1){
            $row=mysqli_fetch_array($connect);
            if($row['status']==0){
                $youth['status']=0;
                $youth['message']='Kindly, Wait for approval.';
            }elseif($row['status']==3){
                $youth['status']=0;
                $youth['message']='Hi, Kindly wait for password reset approval.';
            }else{
                $youth['alive']=array();
                if($row['status']==2){
                $you['remarks']=$row['remarks'];
                $youth['status']=2;
                $youth['message']='Access to your Account Denied.';
            }else{
                $you['baseId']=$row['staff_id'];
                $you['fname']=$row['fname'];
                $you['lname']=$row['lname'];
                $you['dob']='dob';
                $you['age']='age';
                $you['email']=$row['email'];
                $you['username']=$row['username'];
                $you['phone']=$row['phone'];
                $you['county']=$row['role'];
                $you['date']=$row['date'];
                $youth['status']=1;
                $youth['message']='Login was successful.';
            }
            array_push($youth['alive'],$you);
        }
       }else{
        $youth['status']=0;
        $youth['message']='We could not locate your Account.';
       }
    }
}elseif($yak=='U'){
    $user=addslashes($_POST['user']);
    $per=$_POST['per'];
    $date=$_POST['date'];
    $person=addslashes($_POST['person']);
    $pass=md5(sha1(addslashes($_POST['pass'])));
    if($per=='c'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from client where username='$user'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from client where username='$user' and password='$pass'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE client set password='$pass' where username='$user'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM client where username='$user'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['client_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE client set password='$pass',status=3 where username='$user'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }elseif($per=='f'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where username='$user' and role='Finance Manager'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where username='$user' and password='$pass' and role='Finance Manager'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE staff set password='$pass' where username='$user' and role='Finance Manager'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM staff where username='$user' and role='Finance Manager'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['staff_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE staff set password='$pass',status=3 where username='$user' and role='Finance Manager'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }elseif($per=='s'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where username='$user' and role='Service Manager'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where username='$user' and password='$pass' and role='Service Manager'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE staff set password='$pass' where username='$user' and role='Service Manager'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM staff where username='$user' and role='Service Manager'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['staff_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE staff set password='$pass',status=3 where username='$user' and role='Service Manager'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }elseif($per=='p'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from partner where username='$user'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from partner where username='$user' and password='$pass'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE partner set password='$pass' where username='$user'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM partner where username='$user'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['partner_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE partner set password='$pass',status=3 where username='$user'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }elseif($per=='t'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from trainer where username='$user'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from trainer where username='$user' and password='$pass'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE trainer set password='$pass' where username='$user'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM trainer where username='$user'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['trainer_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE trainer set password='$pass',status=3 where username='$user'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }elseif($per=='m'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from mentor where username='$user'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from mentor where username='$user' and password='$pass'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE mentor set password='$pass' where username='$user'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM mentor where username='$user'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['mentor_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE mentor set password='$pass',status=3 where username='$user'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }elseif($per=='e'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where username='$user' and role='Event Manager'"))===1){
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from staff where username='$user' and password='$pass' and role='Event Manager'"))===1){
                    $youth['status'] = 0;
                    $youth['message'] = "Password Rejected. Please try again Later.";
                }else{
                    mysqli_query($conn,"UPDATE staff set password='$pass' where username='$user' and role='Event Manager'");
                    $tryUser=mysqli_query($conn, "SELECT * FROM staff where username='$user' and role='Event Manager'");
            if (mysqli_num_rows($tryUser) > 0) {
                while ($row = mysqli_fetch_array($tryUser)) {
                    $user_id=$row['staff_id'];
                    $fname=$row['fname'];
                    $activity=addslashes("<font><b><u><strong>$fname</strong></u></b> Updated the Login password.</font>");
                    mysqli_query($conn,"INSERT INTO settings(user,user_id,activity,date)
                    VALUES('$person','$user_id','$activity','$date')");
                    if($row['status']==1){
                        mysqli_query($conn,"UPDATE staff set password='$pass',status=3 where username='$user' and role='Event Manager'");
                    }
                   }
            }
                    $youth['status'] = 1;
                    $youth['message'] =  "Password was reset successfully.";
                }
            }else{
                $youth['status'] = 0;
                $youth['message'] = "Account not found.";
            }
    }
}elseif($yak=='R'){
    $fname=addslashes($_POST['fname']);
    $lname=addslashes($_POST['lname']);
    $email=addslashes($_POST['email']);
    $phone=addslashes($_POST['phone']);
    $county=addslashes($_POST['county']);
    $index=$_POST['index'];
    $user=addslashes($_POST['user']);
    $pass=md5(sha1(addslashes($_POST['pass'])));
    $date=$_POST['date'];
    $per=$_POST['per'];
    if($per=='c'){
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        if(mysqli_num_rows(mysqli_query($conn,"SELECT email from client where email='$email'"))>0){
            $youth["status"]=0;
            $youth["message"]="Email Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT username from client where username='$user'"))>0){
            $youth["status"]=0;
            $youth['message']="Username Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT phone from client where phone='$phone'"))>0){
            $youth["status"]=0;
            $youth['message']="Phone Rejected.";
        }else{
            $text="pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values=$yak[0];
            $baseID=$index.$values;
            if(mysqli_query($conn,"INSERT into client(client_id,fname,lname,dob,age,email,username,phone,password,date,county)
            values('$baseID','$fname','$lname','$dob','$age','$email','$user','$phone','$pass','$date','$county')")){
                $youth["status"]=1;
                $youth["message"]="Account Registered Successfully.";
            }else{
                $youth["status"]=0;
                $youth["message"]="Failed to Register!";
            }
        }
    }elseif($per=='m'){
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        if(mysqli_num_rows(mysqli_query($conn,"SELECT email from mentor where email='$email'"))>0){
            $youth["status"]=0;
            $youth["message"]="Email Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT username from mentor where username='$user'"))>0){
            $youth["status"]=0;
            $youth['message']="Username Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT phone from mentor where phone='$phone'"))>0){
            $youth["status"]=0;
            $youth['message']="Phone Rejected.";
        }else{
            $text="pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values=$yak[0];
            $baseID=$index.$values;
            if(mysqli_query($conn,"INSERT into mentor(mentor_id,fname,lname,dob,age,email,username,phone,password,date,address)
            values('$baseID','$fname','$lname','$dob','$age','$email','$user','$phone','$pass','$date','$county')")){
                $youth["status"]=1;
                $youth["message"]="Account Registered Successfully.";
            }else{
                $youth["status"]=0;
                $youth["message"]="Failed to Register!";
            }
        }
    }elseif($per=='t'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT email from trainer where email='$email'"))>0){
            $youth["status"]=0;
            $youth["message"]="Email Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT username from trainer where username='$user'"))>0){
            $youth["status"]=0;
            $youth['message']="Username Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT phone from trainer where phone='$phone'"))>0){
            $youth["status"]=0;
            $youth['message']="Phone Rejected.";
        }else{
            $text="pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values=$yak[0];
            $baseID=$index.$values;
            if(mysqli_query($conn,"INSERT into trainer(trainer_id,fname,lname,email,username,phone,password,date,address)
            values('$baseID','$fname','$lname','$email','$user','$phone','$pass','$date','$county')")){
                $youth["status"]=1;
                $youth["message"]="Account Registered Successfully.";
            }else{
                $youth["status"]=0;
                $youth["message"]="Failed to Register!";
            }
        }
    }elseif($per=='p'){
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        if(mysqli_num_rows(mysqli_query($conn,"SELECT email from partner where email='$email'"))>0){
            $youth["status"]=0;
            $youth["message"]="Email Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT username from partner where username='$user'"))>0){
            $youth["status"]=0;
            $youth['message']="Username Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT phone from partner where phone='$phone'"))>0){
            $youth["status"]=0;
            $youth['message']="Phone Rejected.";
        }else{
            $text="pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values=$yak[0];
            $baseID=$index.$values;
            if(mysqli_query($conn,"INSERT into partner(partner_id,fname,lname,dob,age,email,username,phone,password,date,address)
            values('$baseID','$fname','$lname','$dob','$age','$email','$user','$phone','$pass','$date','$county')")){
                $youth["status"]=1;
                $youth["message"]="Account Registered Successfully.";
            }else{
                $youth["status"]=0;
                $youth["message"]="Failed to Register!";
            }
        }
    }elseif($per=='s'){
        if(mysqli_num_rows(mysqli_query($conn,"SELECT email from staff where email='$email'"))>0){
            $youth["status"]=0;
            $youth["message"]="Email Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT username from staff where username='$user'"))>0){
            $youth["status"]=0;
            $youth['message']="Username Rejected.";
        }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT phone from staff where phone='$phone'"))>0){
            $youth["status"]=0;
            $youth['message']="Phone Rejected.";
        }else{
            $text="pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values=$yak[0];
            $baseID=$index.$values;
            if(mysqli_query($conn,"INSERT into staff(staff_id,fname,lname,email,username,phone,password,date,role)
            values('$baseID','$fname','$lname','$email','$user','$phone','$pass','$date','$county')")){
                $youth["status"]=1;
                $youth["message"]="Account Registered Successfully.";
            }else{
                $youth["status"]=0;
                $youth["message"]="Failed to Register!";
            }
        }
    }
}elseif($yak=='reg_ev'){
    $topic=addslashes($_POST["topic"]);
    $county=addslashes($_POST["county"]);
    $landmark=addslashes($_POST["landmark"]);
    $venue=addslashes($_POST["venue"]);
    $start_date=$_POST["start_date"];
    $end_date=$_POST["end_date"];
    $time=$_POST["time"];
    $computed=$_POST["computed"];
    $date=$_POST["date"];
    $category=addslashes($_POST["category"]);
    $max_guest=$_POST["max_guest"];
    $max_charge=$_POST["max_charge"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from event where category='$category' and topic='$topic' and venue='$venue' and county='$county' and landmark='$landmark' and start_date='$start_date'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! You cannot overwrite an existing event (Same timing, Same Venue)";
    }else{
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values=$yak[0];
        if(mysqli_query($conn,"INSERT into event(event_code,category,topic,county,landmark,venue,start_date,end_date,time,computed,date,max_guest,max_charge)
        values('$values','$category','$topic','$county','$landmark','$venue','$start_date','$end_date','$time','$computed','$date','$max_guest','$max_charge')")){
            $youth["success"]=1;
            $youth["message"]="Event Registered successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to register";
        }
    }
}elseif($yak=='get_ev'){
    $response = mysqli_query($conn,"SELECT * FROM event order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['topic'] = $row['topic'];
            $you['county'] = $row['county'];
            $you['landmark'] = $row['landmark'];
            $you['venue'] = $row['venue'];
            $you['start_date'] = $row['start_date'];
            $you['time'] = $row['time'];
            $you['computed'] = $row['computed'];
            $you['end_date'] = $row['end_date'];
            $you['max_guest'] = $row['max_guest'];
            $you['max_charge'] = $row['max_charge'];
            $you['conf_guest'] = $row['conf_guest'];
            if($row['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($row['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='get_my_ev'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM event where category='$category' and status='$_POST[status]' and max_guest!=0 order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['topic'] = $row['topic'];
            $you['county'] = $row['county'];
            $you['landmark'] = $row['landmark'];
            $you['venue'] = $row['venue'];
            $you['start_date'] = $row['start_date'];
            $you['time'] = $row['time'];
            $you['computed'] = $row['computed'];
            $you['end_date'] = $row['end_date'];
            $you['max_guest'] = $row['max_guest'];
            $you['max_charge'] = $row['max_charge'];
            $you['conf_guest'] = $row['conf_guest'];
            if($row['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($row['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='upt_ev'){
    $topic=addslashes($_POST["topic"]);
    $county=addslashes($_POST["county"]);
    $landmark=addslashes($_POST["landmark"]);
    $venue=addslashes($_POST["venue"]);
    $start_date=$_POST["start_date"];
    $end_date=$_POST["end_date"];
    $time=$_POST["time"];
    $computed=$_POST["computed"];
    $event_code=$_POST["event_code"];
    $category=addslashes($_POST["category"]);
    $max_guest=$_POST["max_guest"];
    $max_charge=$_POST["max_charge"];
    if(mysqli_query($conn,"UPDATE event set category='$category',topic='$topic',county='$county',landmark='$landmark',
    venue='$venue',start_date='$start_date',end_date='$end_date',time='$time',computed='$computed',
    max_guest='$max_guest',max_charge='$max_charge' where event_code='$event_code'")){
        $youth["success"]=1;
        $youth["message"]="Event updated successfully";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to update"; 
    }
}elseif($yak=='end_ev'){
    $event_code=$_POST["event_code"];
    $status=$_POST["status"];
    if(mysqli_query($conn,"UPDATE event set status='$status' where event_code='$event_code'")){
        $youth["success"]=1;
        $youth["message"]="Event Ended successfully";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to end event";
    }
}elseif($yak=='del_ev'){
    $event_code=$_POST["event_code"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from presenter where event_code='$event_code' and status=1 and approval=1"))>0){
        $youth["success"]=0;
        $youth["message"]="Oops!! You cannot Delete this Event. There are some Mentors/Trainers perfoming. Adjourn instead.";
    }else{
        if(mysqli_query($conn,"DELETE from event where event_code='$event_code'")){
            $youth["success"]=1;
            $youth["message"]="Event Deleted successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to delete Event";
        }
    }
}elseif($yak=='send_ev'){
    $presenter_id=$_POST["presenter_id"];
    $event_code=$_POST["event_code"];
    $date=$_POST["date"];
    $category=addslashes($_POST["category"]);
    $charge=$_POST["charge"];
    $profile=$_POST["profile"];
    $index=$_POST['index'].".jpg";
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from presenter where presenter_id='$presenter_id' and event_code='$event_code' and status=0"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! You have an Existing Request with Pending Approval.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from presenter where presenter_id='$presenter_id' and event_code='$event_code' and status=1"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! You have an Approved Request with Pending Approval.";
    }else{
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values=$yak[0];
        if(mysqli_query($conn,"INSERT into presenter(present_code,event_code,category,presenter_id,charge,profile,date)
        values('$values','$event_code','$category','$presenter_id','$charge','$index','$date')")){
            file_put_contents("img/" . $index, base64_decode($profile));
            mysqli_query($conn,"UPDATE event set max_guest=(max_guest-1),conf_guest=(conf_guest+1) where event_code='$event_code'");
            $youth["success"]=1;
            $youth["message"]="Request sent successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to send";
        }
    }
}elseif($yak=='get_pre'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM presenter where category='$category' and status='$_POST[status]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['profile'] = $row['profile'];
            $you['charge'] = $row['charge'];
            if($_POST['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($_POST['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['category'] = $row['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['computed'] = $event['computed'];
            $you['end_date'] = $event['end_date'];
            $you['max_guest'] = $event['max_guest'];
            $you['max_charge'] = $event['max_charge'];
            $you['conf_guest'] = $event['conf_guest'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Denied';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Performed';
            }
            $you['per_date'] = $row['per_date'];
            if($row['pay']==0){
                $you['pay'] = 'Pending';
            }else{
                $you['pay'] = 'Paid';
            }
            $you['pay_date'] = $row['pay_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='acc_ev'){
    $presenter_id=$_POST["presenter_id"];
    $event_code=$_POST["event_code"];
    $status=$_POST["status"];
    $approval=$_POST["approval"];
    $edition=$_POST["edition"];
    $comment=addslashes($_POST["comment"]);
    $present_code=$_POST["present_code"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    if(mysqli_query($conn,"UPDATE presenter set status='$status',comment='$comment',edition='$edition'
    where present_code='$present_code'")){
            mysqli_query($conn,"UPDATE event set approval='$approval' where event_code='$event_code'");
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$presenter_id','$activity','$edition')");
            $youth["success"]=1;
            $youth["message"]="Acceptance was Successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to render";
        }
}elseif($yak=='den_ev'){
    $presenter_id=$_POST["presenter_id"];
    $event_code=$_POST["event_code"];
    $status=$_POST["status"];
    $edition=$_POST["edition"];
    $comment=addslashes($_POST["comment"]);
    $present_code=$_POST["present_code"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    if(mysqli_query($conn,"UPDATE presenter set status='$status',comment='$comment',edition='$edition'
    where present_code='$present_code'")){
            mysqli_query($conn,"UPDATE event set max_guest=(max_guest+1),conf_guest=(conf_guest-1) where event_code='$event_code'");
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$presenter_id','$activity','$edition')");
            $youth["success"]=1;
            $youth["message"]="Rejection was Successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to deny";
        }
}elseif($yak=='get_not'){
    $response = mysqli_query($conn,"SELECT * FROM notices where user_id='$_POST[user_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['user'] = $row['user'];
            $you['user_id'] = $row['user_id'];
            $you['activity'] = $row['activity'];
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Alert was Found";
    }
}elseif($yak=='my_pre'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM presenter where category='$category' and presenter_id='$_POST[presenter_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['profile'] = $row['profile'];
            $you['charge'] = $row['charge'];
            if($_POST['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($_POST['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['category'] = $row['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['computed'] = $event['computed'];
            $you['end_date'] = $event['end_date'];
            $you['max_guest'] = $event['max_guest'];
            $you['max_charge'] = $event['max_charge'];
            $you['conf_guest'] = $event['conf_guest'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Denied';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Performed';
            }
            $you['per_date'] = $row['per_date'];
            if($row['pay']==0){
                $you['pay'] = 'Pending';
            }else{
                $you['pay'] = 'Paid';
            }
            $you['pay_date'] = $row['pay_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Request was Found";
    }
}elseif($yak=='spo_ev'){
    $response = mysqli_query($conn,"SELECT * FROM event where status='$_POST[status]' and approval='$_POST[approval]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['topic'] = $row['topic'];
            $you['county'] = $row['county'];
            $you['landmark'] = $row['landmark'];
            $you['venue'] = $row['venue'];
            $you['start_date'] = $row['start_date'];
            $you['time'] = $row['time'];
            $you['computed'] = $row['computed'];
            $you['end_date'] = $row['end_date'];
            $you['max_guest'] = $row['max_guest'];
            $you['max_charge'] = $row['max_charge'];
            $you['conf_guest'] = $row['conf_guest'];
            if($row['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($row['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='view_ev'){
    $category=addslashes($_POST["category"]);
    $event_code=addslashes($_POST["event_code"]);
    $response = mysqli_query($conn,"SELECT * FROM presenter where category='$category' and event_code='$event_code' and status=1 order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        if(mysqli_num_rows($response) ==1){
            while ($row = mysqli_fetch_array($response)) {
                if($category=='Mentorship'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
                }elseif($category=='Training'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
                }
                $you['counter'] =1;
                $you['one'] = $row['profile'];
                $you['two'] = 'profile';
                $you['three'] = 'profile';
                $you['four'] = 'profile';
                $you['fone']=$profile['fname'];
                $you['ftwo']='name';
                $you['fthree']='name';
                $you['ffour']='name';
                array_push($youth['alive'], $you);
            }
        }elseif(mysqli_num_rows($response) ==2){
            while ($row = mysqli_fetch_array($response)) {
                $idA=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as ida from presenter where category='$category' and event_code='$event_code' and status=1"));
                $idB=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as idb from presenter where category='$category' and event_code='$event_code' and status=1 and id!='$idA[ida]'"));
                $first=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idA[ida]'"));
                $seconder=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idB[idb]'"));
                if($category=='Mentorship'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$first[presenter_id]'"));
                    $person=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$seconder[presenter_id]'"));
                }elseif($category=='Training'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$first[presenter_id]'"));
                    $person=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$seconder[presenter_id]'"));
                }
                $you['counter'] =2;
                $you['one'] = $first['profile'];
                $you['two'] = $seconder['profile'];
                $you['three'] = 'profile';
                $you['four'] = 'profile';
                $you['fone']=$profile['fname'];
                $you['ftwo']=$person['fname'];
                $you['fthree']='name';
                $you['ffour']='name';
                array_push($youth['alive'], $you);
            }
        }elseif(mysqli_num_rows($response) ==3){
            while ($row = mysqli_fetch_array($response)) {
                $idA=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as ida from presenter where category='$category' and event_code='$event_code' and status=1"));
                $idB=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as idb from presenter where category='$category' and event_code='$event_code' and status=1 and id!='$idA[ida]'"));
                $idC=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as idc from presenter where category='$category' and event_code='$event_code' and status=1 and id!='$idA[ida]' and id!='$idB[idb]'"));
                $first=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idA[ida]'"));
                $seconder=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idB[idb]'"));
                $third=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idC[idc]'"));
                if($category=='Mentorship'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$first[presenter_id]'"));
                    $person=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$seconder[presenter_id]'"));
                    $true=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$third[presenter_id]'"));
                }elseif($category=='Training'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$first[presenter_id]'"));
                    $person=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$seconder[presenter_id]'"));
                    $true=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$third[presenter_id]'"));
                }
                $you['counter'] =3;
                $you['one'] = $first['profile'];
                $you['two'] = $seconder['profile'];
                $you['three'] = $third['profile'];
                $you['four'] = 'profile';
                $you['fone']=$profile['fname'];
                $you['ftwo']=$person['fname'];
                $you['fthree']=$true['fname'];
                $you['ffour']='name';
                array_push($youth['alive'], $you);
            } 
        }else{
            while ($row = mysqli_fetch_array($response)) {
                $idA=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as ida from presenter where category='$category' and event_code='$event_code' and status=1"));
                $idB=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as idb from presenter where category='$category' and event_code='$event_code' and status=1 and id!='$idA[ida]'"));
                $idC=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as idc from presenter where category='$category' and event_code='$event_code' and status=1 and id!='$idA[ida]' and id!='$idB[idb]'"));
                $idD=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as idd from presenter where category='$category' and event_code='$event_code' and status=1 and id!='$idA[ida]' and id!='$idB[idb]' and id!='$idC[idc]'"));
                $first=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idA[ida]'"));
                $seconder=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idB[idb]'"));
                $third=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idC[idc]'"));
                $four=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from presenter where category='$category' and event_code='$event_code' and status=1 and id='$idD[idd]'"));
                if($category=='Mentorship'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$first[presenter_id]'"));
                    $person=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$seconder[presenter_id]'"));
                    $true=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$third[presenter_id]'"));
                    $okay=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$four[presenter_id]'"));
                }elseif($category=='Training'){
                    $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$first[presenter_id]'"));
                    $person=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$seconder[presenter_id]'"));
                    $true=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$third[presenter_id]'"));
                    $okay=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$four[presenter_id]'"));
                }
                $you['counter'] =4;
                $you['one'] = $first['profile'];
                $you['two'] = $seconder['profile'];
                $you['three'] = $third['profile'];
                $you['four'] = $four['profile'];
                $you['fone']=$profile['fname'];
                $you['ftwo']=$person['fname'];
                $you['fthree']=$true['fname'];
                $you['ffour']=$okay['fname'];
                array_push($youth['alive'], $you);
            } 
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Presenter was Found";
    }
}elseif($yak=='sen_aid'){
    $payer_id=addslashes($_POST["payer_id"]);
    $date=$_POST["date"];
    $category=addslashes($_POST["category"]);
    $mode=addslashes($_POST["mode"]);
    $code=addslashes($_POST["code"]);
    $amount=$_POST["amount"];
    $event_code=$_POST["event_code"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from payment where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from disburse where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }else{
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values=$yak[0];
        if(mysqli_query($conn,"INSERT into payment(pay_code,payer_id,category,mode,code,amount,date)
        values('$values','$payer_id','$category','$mode','$code','$amount','$date')")){
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values2=$yak[0];
            mysqli_query($conn,"INSERT into sponsorly(sponsor_code,pay_code,partner_id,event_code,amount,date)
            values('$values2','$values','$payer_id','$event_code','$amount','$date')");
            $youth["success"]=1;
            $youth["message"]="AID submitted successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to send";
        }
    }
}elseif($yak=='view_spo'){
    $response = mysqli_query($conn,"SELECT * FROM payment where payer_id='$_POST[payer_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['pay_code'] = $row['pay_code'];
            $you['category'] = $row['category'];
            $you['payer_id'] = $row['payer_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM partner where partner_id='$row[payer_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM sponsorly where pay_code='$row[pay_code]'"));
            $fortune=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$event[event_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $event['event_code'];
            $you['cate'] = $fortune['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Rejected';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='all_spo'){
    $response = mysqli_query($conn,"SELECT * FROM payment where category='$_POST[category]' and status='$_POST[status]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['pay_code'] = $row['pay_code'];
            $you['category'] = $row['category'];
            $you['payer_id'] = $row['payer_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM partner where partner_id='$row[payer_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM sponsorly where pay_code='$row[pay_code]'"));
            $fortune=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$event[event_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $event['event_code'];
            $you['cate'] = $fortune['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Rejected';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='part_eve'){
    $response = mysqli_query($conn,"SELECT * FROM event where event_code='$_POST[event_code]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['topic'] = $row['topic'];
            $you['county'] = $row['county'];
            $you['landmark'] = $row['landmark'];
            $you['venue'] = $row['venue'];
            $you['start_date'] = $row['start_date'];
            $you['time'] = $row['time'];
            $you['computed'] = $row['computed'];
            $you['end_date'] = $row['end_date'];
            $you['max_guest'] = $row['max_guest'];
            $you['max_charge'] = $row['max_charge'];
            $you['conf_guest'] = $row['conf_guest'];
            if($row['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($row['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='app_spo'){
    $payer_id=$_POST["payer_id"];
    $status=$_POST["status"];
    $edition=$_POST["edition"];
    $sponsor=$_POST["sponsor"];
    $comment=addslashes($_POST["comment"]);
    $pay_code=$_POST["pay_code"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    if(mysqli_query($conn,"UPDATE payment set status='$status',comment='$comment',edition='$edition'
    where pay_code='$pay_code'")){
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$payer_id','$activity','$edition')");
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from records"))>0){
                mysqli_query($conn,"UPDATE records set sponsor=(sponsor+$sponsor),amount=(amount+$sponsor),
                balance=(balance+$sponsor),edition='$edition'");
            }else{
                mysqli_query($conn,"INSERT into records(sponsor,amount,balance,date,edition)
                values('$sponsor','$sponsor','$sponsor','$edition','$edition')");
            }
            $youth["success"]=1;
            $youth["message"]="Approval was Successful";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to approve";
        }
}elseif($yak=='rej_spo'){
    $payer_id=$_POST["payer_id"];
    $status=$_POST["status"];
    $edition=$_POST["edition"];
    $comment=addslashes($_POST["comment"]);
    $pay_code=$_POST["pay_code"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    if(mysqli_query($conn,"UPDATE payment set status='$status',comment='$comment',edition='$edition'
    where pay_code='$pay_code'")){
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$payer_id','$activity','$edition')");
            $youth["success"]=1;
            $youth["message"]="Rejection was Successful";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to reject";
        }
}elseif($yak=='reg_tic'){
    $category=addslashes($_POST["category"]);
    $event_code=addslashes($_POST["event_code"]);
    $type_orc=addslashes($_POST["type_orc"]);
    $options_orc=$_POST["options_orc"];
    $charge_orc=$_POST["charge_orc"];
    $seat_orc=$_POST["seat_orc"];
    $type_box=addslashes($_POST["type_box"]);
    $options_box=$_POST["options_box"];
    $charge_box=$_POST["charge_box"];
    $seat_box=$_POST["seat_box"];
    $type_mez=addslashes($_POST["type_mez"]);
    $options_mez=$_POST["options_mez"];
    $charge_mez=$_POST["charge_mez"];
    $seat_mez=$_POST["seat_mez"];
    $type_bal=addslashes($_POST["type_bal"]);
    $options_bal=$_POST["options_bal"];
    $charge_bal=$_POST["charge_bal"];
    $seat_bal=$_POST["seat_bal"];
    $date=$_POST["date"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from ticket where category='$category' and event_code='$event_code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! You cannot overwrite an existing Event Ticket Category. Update Ticket instead.";
    }else{
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values=$yak[0];
        if(mysqli_query($conn,"INSERT into ticket(ticket_code,event_code,category,type,options,charge,current_seat,adjusted_seat,date)
        values('$values','$event_code','$category','$type_orc','$options_orc','$charge_orc','$seat_orc','$seat_orc','$date')")){
            $text="pullar.txt";
            $yak=file($text);
            $yak[0]++;
            $fp=fopen($text, "w");
            fputs($fp, "$yak[0]");
            fclose($fp);
            $values2=$yak[0];
            if(mysqli_query($conn,"INSERT into ticket(ticket_code,event_code,category,type,options,charge,current_seat,adjusted_seat,date)
            values('$values2','$event_code','$category','$type_box','$options_box','$charge_box','$seat_box','$seat_box','$date')")){
                $text="pullar.txt";
                $yak=file($text);
                $yak[0]++;
                $fp=fopen($text, "w");
                fputs($fp, "$yak[0]");
                fclose($fp);
                $values3=$yak[0];
                if(mysqli_query($conn,"INSERT into ticket(ticket_code,event_code,category,type,options,charge,current_seat,adjusted_seat,date)
                values('$values3','$event_code','$category','$type_mez','$options_mez','$charge_mez','$seat_mez','$seat_mez','$date')")){
                    $text="pullar.txt";
                    $yak=file($text);
                    $yak[0]++;
                    $fp=fopen($text, "w");
                    fputs($fp, "$yak[0]");
                    fclose($fp);
                    $values4=$yak[0];
                    if(mysqli_query($conn,"INSERT into ticket(ticket_code,event_code,category,type,options,charge,current_seat,adjusted_seat,date)
                    values('$values4','$event_code','$category','$type_bal','$options_bal','$charge_bal','$seat_bal','$seat_bal','$date')")){
                       $youth["success"]=1;
                       $youth["message"]="Ticket uploaded successfully"; 
                    }
                }
            }
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to render";
        }
    }
}elseif($yak=='tic_event'){
    $response = mysqli_query($conn,"SELECT distinct event_code FROM ticket order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['id'] = $tick['id'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $tick['category'];
            $you['topic'] = $tick['topic'];
            $you['county'] = $tick['county'];
            $you['landmark'] = $tick['landmark'];
            $you['venue'] = $tick['venue'];
            $you['start_date'] = $tick['start_date'];
            $you['time'] = $tick['time'];
            $you['computed'] = $tick['computed'];
            $you['end_date'] = $tick['end_date'];
            $you['max_guest'] = $tick['max_guest'];
            $you['max_charge'] = $tick['max_charge'];
            $you['conf_guest'] = $tick['conf_guest'];
            if($tick['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($tick['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $tick['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='cli_event'){
    $response = mysqli_query($conn,"SELECT distinct event_code FROM ticket where adjusted_seat!=0 order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $maxId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as mx FROM presenter where status=1 and event_code='$row[event_code]'"));
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT profile as pro FROM presenter where status=1 and event_code='$row[event_code]' and id='$maxId[mx]'"));
            $you['id'] = $tick['id'];
            $you['event_code'] = $row['event_code'];
            $you['profile'] = $profile['pro'];
            $you['category'] = $tick['category'];
            $you['topic'] = $tick['topic'];
            $you['county'] = $tick['county'];
            $you['landmark'] = $tick['landmark'];
            $you['venue'] = $tick['venue'];
            $you['start_date'] = $tick['start_date'];
            $you['time'] = $tick['time'];
            $you['computed'] = $tick['computed'];
            $you['end_date'] = $tick['end_date'];
            $you['max_guest'] = $tick['max_guest'];
            $you['max_charge'] = $tick['max_charge'];
            $you['conf_guest'] = $tick['conf_guest'];
            if($tick['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($tick['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $tick['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Event was Found";
    }
}elseif($yak=='grou_tic'){
    $event_code=addslashes($_POST["event_code"]);
    $response = mysqli_query($conn,"SELECT distinct category FROM ticket where event_code='$event_code' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $min=mysqli_fetch_assoc(mysqli_query($conn,"SELECT min(charge) as minChar FROM ticket where event_code='$event_code' and category='$row[category]' and options!=0"));
            $minId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT id as idO FROM ticket where charge='$min[minChar]' and event_code='$event_code' and category='$row[category]' and options!=0"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where id='$minId[idO]'"));
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as ct FROM ticket where event_code='$event_code' and category='$row[category]' and options!=0"));
            $you['category'] = $row['category'];
            $you['counter'] = $count['ct'];
            $you['type'] = $tick['type'];
            $you['price'] = $tick['charge'];
            $you['seats'] = $tick['adjusted_seat'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Ticket was Found";
    }
}elseif($yak=='cli_tic'){
    $event_code=addslashes($_POST["event_code"]);
    $response = mysqli_query($conn,"SELECT distinct category FROM ticket where event_code='$event_code' and adjusted_seat!=0 order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $min=mysqli_fetch_assoc(mysqli_query($conn,"SELECT min(charge) as minChar FROM ticket where event_code='$event_code' and category='$row[category]' and adjusted_seat!=0 and options!=0"));
            $minId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT id as idO FROM ticket where charge='$min[minChar]' and event_code='$event_code' and category='$row[category]' and adjusted_seat!=0 and options!=0"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where id='$minId[idO]'"));
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as ct FROM ticket where event_code='$event_code' and category='$row[category]' and adjusted_seat!=0 and options!=0"));
            $you['category'] = $row['category'];
            $you['counter'] = $count['ct'];
            $you['type'] = $tick['type'];
            $you['price'] = $tick['charge'];
            $you['seats'] = $tick['adjusted_seat'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Ticket was Found";
    }
}elseif($yak=='temp_tic'){
    $event_code=addslashes($_POST["event_code"]);
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM ticket where event_code='$event_code' and category='$category' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['type'] = $row['type'];
            $you['options'] = $row['options'];
            $you['charge'] = $row['charge'];
            $you['current_seat'] = $row['current_seat'];
            $you['adjusted_seat'] = $row['adjusted_seat'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='tic_orc'){
    $event_code=addslashes($_POST["event_code"]);
    $category=addslashes($_POST["category"]);
    $type=addslashes($_POST["type"]);
    $response = mysqli_query($conn,"SELECT * FROM ticket where event_code='$event_code' and category='$category' and type='$type' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['type'] = $row['type'];
            $you['options'] = $row['options'];
            $you['charge'] = $row['charge'];
            $you['current_seat'] = $row['current_seat'];
            $you['adjusted_seat'] = $row['adjusted_seat'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='tic_box'){
    $event_code=addslashes($_POST["event_code"]);
    $category=addslashes($_POST["category"]);
    $type=addslashes($_POST["type"]);
    $response = mysqli_query($conn,"SELECT * FROM ticket where event_code='$event_code' and category='$category' and type='$type' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['type'] = $row['type'];
            $you['options'] = $row['options'];
            $you['charge'] = $row['charge'];
            $you['current_seat'] = $row['current_seat'];
            $you['adjusted_seat'] = $row['adjusted_seat'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='tic_mez'){
    $event_code=addslashes($_POST["event_code"]);
    $category=addslashes($_POST["category"]);
    $type=addslashes($_POST["type"]);
    $response = mysqli_query($conn,"SELECT * FROM ticket where event_code='$event_code' and category='$category' and type='$type' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['type'] = $row['type'];
            $you['options'] = $row['options'];
            $you['charge'] = $row['charge'];
            $you['current_seat'] = $row['current_seat'];
            $you['adjusted_seat'] = $row['adjusted_seat'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='tic_bal'){
    $event_code=addslashes($_POST["event_code"]);
    $category=addslashes($_POST["category"]);
    $type=addslashes($_POST["type"]);
    $response = mysqli_query($conn,"SELECT * FROM ticket where event_code='$event_code' and category='$category' and type='$type' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['type'] = $row['type'];
            $you['options'] = $row['options'];
            $you['charge'] = $row['charge'];
            $you['current_seat'] = $row['current_seat'];
            $you['adjusted_seat'] = $row['adjusted_seat'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='upt_tic'){
    $category=addslashes($_POST["category"]);
    $event_code=addslashes($_POST["event_code"]);
    $orc_code=addslashes($_POST["orc_code"]);
    $options_orc=$_POST["options_orc"];
    $charge_orc=$_POST["charge_orc"];
    $current_orc=$_POST["current_orc"];
    $seat_orc=$_POST["seat_orc"];
    $box_code=addslashes($_POST["box_code"]);
    $options_box=$_POST["options_box"];
    $charge_box=$_POST["charge_box"];
    $current_box=$_POST["current_box"];
    $seat_box=$_POST["seat_box"];
    $mez_code=addslashes($_POST["mez_code"]);
    $options_mez=$_POST["options_mez"];
    $charge_mez=$_POST["charge_mez"];
    $current_mez=$_POST["current_mez"];
    $seat_mez=$_POST["seat_mez"];
    $bal_code=addslashes($_POST["bal_code"]);
    $options_bal=$_POST["options_bal"];
    $charge_bal=$_POST["charge_bal"];
    $current_bal=$_POST["current_bal"];
    $seat_bal=$_POST["seat_bal"];
    $edition=$_POST["edition"];
    if(mysqli_query($conn,"UPDATE ticket set options='$options_orc',charge='$charge_orc',current_seat='$current_orc',
    adjusted_seat='$seat_orc',edition='$edition' where ticket_code='$orc_code'")){
        if(mysqli_query($conn,"UPDATE ticket set options='$options_box',charge='$charge_box',current_seat='$current_box',
        adjusted_seat='$seat_box',edition='$edition' where ticket_code='$box_code'")){
            if(mysqli_query($conn,"UPDATE ticket set options='$options_mez',charge='$charge_mez',current_seat='$current_mez',
            adjusted_seat='$seat_mez',edition='$edition' where ticket_code='$mez_code'")){
                if(mysqli_query($conn,"UPDATE ticket set options='$options_bal',charge='$charge_bal',current_seat='$current_bal',
                adjusted_seat='$seat_bal',edition='$edition' where ticket_code='$bal_code'")){
                    $youth["success"]=1;
                    $youth["message"]="Ticket updated successfully";
                }
            }
        }
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to update";
    }
}elseif($yak=='del_tic'){
    $orc_code=addslashes($_POST["orc_code"]);
    $box_code=addslashes($_POST["box_code"]);
    $mez_code=addslashes($_POST["mez_code"]);
    $bal_code=addslashes($_POST["bal_code"]);
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from booking where ticket_code='$orc_code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed! Cannot Delete. We have a Booking with a similar Orchestra Ticket. Check NO instead.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from booking where ticket_code='$box_code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed! Cannot Delete. We have a Booking with a similar Box Ticket. Check NO instead.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from booking where ticket_code='$mez_code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed! Cannot Delete. We have a Booking with a similar Mezzanine Ticket. Check NO instead.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from booking where ticket_code='$bal_code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed! Cannot Delete. We have a Booking with a similar Balcony Ticket. Check NO instead.";
    }else{
        if(mysqli_query($conn,"DELETE from ticket where ticket_code='$orc_code'")){
            if(mysqli_query($conn,"DELETE from ticket where ticket_code='$box_code'")){
                if(mysqli_query($conn,"DELETE from ticket where ticket_code='$mez_code'")){
                    if(mysqli_query($conn,"DELETE from ticket where ticket_code='$bal_code'")){
                        $youth["success"]=1;
                        $youth["message"]="Ticket Deleted successfully";
                    }
                }
            }
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to Delete";
        }
    }
}elseif($yak=='first_tic'){
    $event_code=addslashes($_POST["event_code"]);
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM ticket where event_code='$event_code' and category='$category' and adjusted_seat!=0 order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['type'] = $row['type'];
            $you['options'] = $row['options'];
            $you['charge'] = $row['charge'];
            $you['current_seat'] = $row['current_seat'];
            $you['adjusted_seat'] = $row['adjusted_seat'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='sen_bok'){
    $payer_id=addslashes($_POST["payer_id"]);
    $date=$_POST["date"];
    $category=addslashes($_POST["category"]);
    $ticket_code=addslashes($_POST["ticket_code"]);
    $seats=$_POST["seats"];
    $unit_charge=addslashes($_POST["unit_charge"]);
    $mode=addslashes($_POST["mode"]);
    $code=addslashes($_POST["code"]);
    $amount=$_POST["amount"];
    $event_code=$_POST["event_code"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from payment where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from disburse where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from booking where ticket_code='$ticket_code'and client_id='$payer_id' and finance=0"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! We have noted you have another booking with Approval Pending. Kindly be Patient";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from booking where ticket_code='$ticket_code'and client_id='$payer_id' and finance=1"))>1){
        $youth["success"]=0;
        $youth["message"]="Failed!! You are only limited to 2 such approved Bookings.";
    }else{
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values=$yak[0];
        if(mysqli_query($conn,"INSERT into payment(pay_code,payer_id,category,mode,code,amount,date)
        values('$values','$payer_id','$category','$mode','$code','$amount','$date')")){
        $text="pullar.txt";
        $yak=file($text);
        $yak[0]++;
        $fp=fopen($text, "w");
        fputs($fp, "$yak[0]");
        fclose($fp);
        $values2=$yak[0];
            mysqli_query($conn,"INSERT into booking(book_code,pay_code,client_id,ticket_code,event_code,seats,unit_charge,amount,date)
            values('$values2','$values','$payer_id','$ticket_code','$event_code','$seats','$unit_charge','$amount','$date')");
            mysqli_query($conn,"UPDATE ticket set adjusted_seat=(adjusted_seat-$seats) where ticket_code='$ticket_code'");
            $youth["success"]=1;
            $youth["message"]="Reservation sent successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to send";
        }
    }
}elseif($yak=='all_bok'){
    $response = mysqli_query($conn,"SELECT * FROM payment where category='$_POST[category]' and status='$_POST[status]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['pay_code'] = $row['pay_code'];
            $you['category'] = $row['category'];
            $you['payer_id'] = $row['payer_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[payer_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM booking where pay_code='$row[pay_code]'"));
            $fortune=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$event[event_code]'"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where ticket_code='$event[ticket_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $event['event_code'];
            $you['ticket_code'] = $event['ticket_code'];
            $you['seats'] = $event['seats'];
            $you['unit_charge'] = $event['unit_charge'];
            $you['tick_type'] = $tick['type'];
            $you['tick_category'] = $tick['category'];
            $you['cate'] = $fortune['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Rejected';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='app_bok'){
    $payer_id=$_POST["payer_id"];
    $status=$_POST["status"];
    $edition=$_POST["edition"];
    $booking=$_POST["booking"];
    $comment=addslashes($_POST["comment"]);
    $pay_code=$_POST["pay_code"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    if(mysqli_query($conn,"UPDATE payment set status='$status',comment='$comment',edition='$edition'
    where pay_code='$pay_code'")){
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$payer_id','$activity','$edition')");
        mysqli_query($conn,"UPDATE booking set finance='$status',fin_date='$edition' where pay_code='$pay_code'");
            if(mysqli_num_rows(mysqli_query($conn,"SELECT * from records"))>0){
                mysqli_query($conn,"UPDATE records set booking=(booking+$booking),amount=(amount+$booking),
                balance=(balance+$booking),edition='$edition'");
            }else{
                mysqli_query($conn,"INSERT into records(booking,amount,balance,date,edition)
                values('$booking','$booking','$booking','$edition','$edition')");
            }
            $youth["success"]=1;
            $youth["message"]="Approval was Successful";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to approve";
        }
}elseif($yak=='rej_bok'){
    $payer_id=$_POST["payer_id"];
    $status=$_POST["status"];
    $edition=$_POST["edition"];
    $comment=addslashes($_POST["comment"]);
    $pay_code=$_POST["pay_code"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    $seat=$_POST["seat"];
    $ticket_code=$_POST["ticket_code"];
    if(mysqli_query($conn,"UPDATE payment set status='$status',comment='$comment',edition='$edition'
    where pay_code='$pay_code'")){
        mysqli_query($conn,"UPDATE ticket set adjusted_seat=(adjusted_seat+$seat) where ticket_code='$ticket_code'");
        mysqli_query($conn,"UPDATE booking set finance='$status',fin_date='$edition' where pay_code='$pay_code'");
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$payer_id','$activity','$edition')");
            $youth["success"]=1;
            $youth["message"]="Rejection was Successful";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to reject";
        }
}elseif($yak=='my_bok'){
    $response = mysqli_query($conn,"SELECT * FROM payment where payer_id='$_POST[payer_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['pay_code'] = $row['pay_code'];
            $you['category'] = $row['category'];
            $you['payer_id'] = $row['payer_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[payer_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM booking where pay_code='$row[pay_code]'"));
            $fortune=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$event[event_code]'"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where ticket_code='$event[ticket_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $event['event_code'];
            $you['ticket_code'] = $event['ticket_code'];
            $you['seats'] = $event['seats'];
            $you['unit_charge'] = $event['unit_charge'];
            $you['tick_type'] = $tick['type'];
            $you['tick_category'] = $tick['category'];
            $you['cate'] = $fortune['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Rejected';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='many'){
    $response = mysqli_query($conn,"SELECT * FROM records order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['sponsor'] = $row['sponsor'];
            $you['booking'] = $row['booking'];
            $you['mentor'] = $row['mentor'];
            $you['trainer'] = $row['trainer'];
            $you['amount'] = $row['amount'];
            $you['balance'] = $row['balance'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='rec_gen'){
    $response = mysqli_query($conn,"SELECT * FROM payment where payer_id='$_POST[payer_id]' and status='$_POST[status]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['pay_code'] = $row['pay_code'];
            $you['category'] = $row['category'];
            $you['payer_id'] = $row['payer_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM partner where partner_id='$row[payer_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM sponsorly where pay_code='$row[pay_code]'"));
            $fortune=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$event[event_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $event['event_code'];
            $you['cate'] = $fortune['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Rejected';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='rec_cli'){
    $response = mysqli_query($conn,"SELECT * FROM payment where payer_id='$_POST[payer_id]' and status='$_POST[status]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['pay_code'] = $row['pay_code'];
            $you['category'] = $row['category'];
            $you['payer_id'] = $row['payer_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[payer_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM booking where pay_code='$row[pay_code]'"));
            $fortune=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$event[event_code]'"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where ticket_code='$event[ticket_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $event['event_code'];
            $you['ticket_code'] = $event['ticket_code'];
            $you['seats'] = $event['seats'];
            $you['unit_charge'] = $event['unit_charge'];
            $you['tick_type'] = $tick['type'];
            $you['tick_category'] = $tick['category'];
            $you['cate'] = $fortune['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Rejected';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='booked'){
    $response = mysqli_query($conn,"SELECT distinct event_code FROM booking where finance=1 and manage='$_POST[manage]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $maxId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as mx FROM presenter where status=1 and event_code='$row[event_code]'"));
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT profile as pro FROM presenter where status=1 and event_code='$row[event_code]' and id='$maxId[mx]'"));
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as ct FROM booking where finance=1 and manage='$_POST[manage]' and event_code='$row[event_code]'"));
            $you['id'] = $tick['id'];
            $you['event_code'] = $row['event_code'];
            $you['profile'] = $profile['pro'];
            $you['counter'] = $count['ct'];
            $you['category'] = $tick['category'];
            $you['topic'] = $tick['topic'];
            $you['county'] = $tick['county'];
            $you['landmark'] = $tick['landmark'];
            $you['venue'] = $tick['venue'];
            $you['start_date'] = $tick['start_date'];
            $you['time'] = $tick['time'];
            $you['computed'] = $tick['computed'];
            $you['end_date'] = $tick['end_date'];
            $you['max_guest'] = $tick['max_guest'];
            $you['max_charge'] = $tick['max_charge'];
            $you['conf_guest'] = $tick['conf_guest'];
            if($tick['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($tick['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $tick['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='view_bk'){
    $response = mysqli_query($conn,"SELECT * FROM booking where event_code='$_POST[event_code]' and finance=1 and manage='$_POST[manage]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['book_code'] = $row['book_code'];
            $you['pay_code'] = $row['pay_code'];
            $you['client_id'] = $row['client_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[client_id]'"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where ticket_code='$row[ticket_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['seats'] = $row['seats'];
            $you['unit_charge'] = $row['unit_charge'];
            $you['tick_type'] = $tick['type'];
            $you['tick_category'] = $tick['category'];
            $you['amount'] = $row['amount'];
            $you['date'] = $row['date'];
            if($row['finance']==0){
                $you['finance'] = 'Pending';
            }elseif($row['finance']==1){
                $you['finance'] = 'Cleared';
            }else{
                $you['finance'] = 'Declined';
            }
            $you['fin_date'] = $row['fin_date'];
            if($row['manage']==0){
                $you['manage'] = 'Pending';
            }else{
                $you['manage'] = 'Reserved';
            }
            $you['man_date'] = $row['man_date'];
            if($row['client']==0){
                $you['client'] = 'Pending';
            }else{
                $you['client'] = 'Confirmed';
            }
            $you['cli_date'] = $row['cli_date'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Confirmed';
            }
            $you['per_date'] = $row['per_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='pro_tick'){
    $event_code=$_POST["event_code"];
    $manage=$_POST["manage"];
    $man_date=$_POST["man_date"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    if(mysqli_query($conn,"UPDATE booking set manage='$manage',man_date='$man_date'
    where finance=1 and manage=0 and event_code='$event_code'")){
        $sql = mysqli_query($conn,"SELECT * FROM booking where finance=1 and manage=1
         and man_date='$man_date' and event_code='$event_code'");
        if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_array($sql)){
                $client_id = $row['client_id'];
                $pro=mysqli_fetch_assoc(mysqli_query($conn,"SELECT fname as fm from client where client_id='$client_id'"));
                $person="Hi ".$pro['fm'].$activity;
                mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
                values('$user','$client_id','$person','$man_date')");
            }
        }
        $youth["success"]=1;
        $youth["message"]="Procession was Successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to process";
        }
}elseif($yak=='one_tick'){
    $book_code=$_POST["book_code"];
    $manage=$_POST["manage"];
    $man_date=$_POST["man_date"];
    $activity=addslashes($_POST["activity"]);
    $user=$_POST["user"];
    $client_id=$_POST["client_id"];
    if(mysqli_query($conn,"UPDATE booking set manage='$manage',man_date='$man_date'
    where book_code='$book_code'")){
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$client_id','$activity','$man_date')");
            $youth["success"]=1;
            $youth["message"]="Procession was Successfully";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to process";
        }
}elseif($yak=='my_cli'){
    $response = mysqli_query($conn,"SELECT distinct event_code FROM booking where manage='$_POST[manage]'
     and client='$_POST[client]' and client_id='$_POST[client_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $maxId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as mx FROM presenter where status=1 and event_code='$row[event_code]'"));
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT profile as pro FROM presenter where status=1 and event_code='$row[event_code]' and id='$maxId[mx]'"));
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as ct FROM booking where manage='$_POST[manage]' 
             and client='$_POST[client]' and client_id='$_POST[client_id]' and event_code='$row[event_code]'"));
            $you['id'] = $tick['id'];
            $you['event_code'] = $row['event_code'];
            $you['profile'] = $profile['pro'];
            $you['counter'] = $count['ct'];
            $you['category'] = $tick['category'];
            $you['topic'] = $tick['topic'];
            $you['county'] = $tick['county'];
            $you['landmark'] = $tick['landmark'];
            $you['venue'] = $tick['venue'];
            $you['start_date'] = $tick['start_date'];
            $you['time'] = $tick['time'];
            $you['computed'] = $tick['computed'];
            $you['end_date'] = $tick['end_date'];
            $you['max_guest'] = $tick['max_guest'];
            $you['max_charge'] = $tick['max_charge'];
            $you['conf_guest'] = $tick['conf_guest'];
            if($tick['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($tick['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $tick['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='my_senior'){
    $response = mysqli_query($conn,"SELECT * FROM booking where event_code='$_POST[event_code]' and manage='$_POST[manage]'
    and client='$_POST[client]' and client_id='$_POST[client_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['book_code'] = $row['book_code'];
            $you['pay_code'] = $row['pay_code'];
            $you['client_id'] = $row['client_id'];
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[client_id]'"));
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM ticket where ticket_code='$row[ticket_code]'"));
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['seats'] = $row['seats'];
            $you['unit_charge'] = $row['unit_charge'];
            $you['tick_type'] = $tick['type'];
            $you['tick_category'] = $tick['category'];
            $you['amount'] = $row['amount'];
            $you['date'] = $row['date'];
            if($row['finance']==0){
                $you['finance'] = 'Pending';
            }elseif($row['finance']==1){
                $you['finance'] = 'Cleared';
            }else{
                $you['finance'] = 'Declined';
            }
            $you['fin_date'] = $row['fin_date'];
            if($row['manage']==0){
                $you['manage'] = 'Pending';
            }else{
                $you['manage'] = 'Reserved';
            }
            $you['man_date'] = $row['man_date'];
            if($row['client']==0){
                $you['client'] = 'Pending';
            }else{
                $you['client'] = 'Confirmed';
            }
            $you['cli_date'] = $row['cli_date'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Confirmed';
            }
            $you['per_date'] = $row['per_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='con_tick'){
    $message=addslashes($_POST["message"]);
    $rate=$_POST["rate"];
    $user_one=$_POST["user_one"];
    $user_one_id=addslashes($_POST["user_one_id"]);
    $book_code=addslashes($_POST["book_code"]);
    $cli_date=$_POST["cli_date"];
    $activity=addslashes($_POST["activity"]);
    $client=$_POST["client"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user_two=$_POST["user_two"];
    $user_two_id=$_POST["user_two_id"];
    if(mysqli_query($conn,"UPDATE booking set client='$client',cli_date='$cli_date'
    where book_code='$book_code'")){
        mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
        values('$user_one','$user_one_id','$activity','$cli_date')");
        mysqli_query($conn,"INSERT into feedback(user_one,user_one_id,message,date,time,rate,user_two,user_two_id)
        values('$user_one','$user_one_id','$message','$date','$time','$rate','$user_two','$user_two_id')");
        $youth["success"]=1;
        $youth["message"]="Confirmation was Successful";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to Confirm";
    }
}elseif($yak=='see_attend'){
    $response = mysqli_query($conn,"SELECT distinct event_code FROM presenter where status=1 and category='$_POST[category]'
    and presenter_id='$_POST[presenter_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $tick=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as ct FROM booking where finance=1 
            and manage=1 and event_code='$row[event_code]'"));
            $seats=mysqli_fetch_assoc(mysqli_query($conn,"SELECT sum(seats) as st FROM booking where finance=1 
            and manage=1 and event_code='$row[event_code]'"));
            $maxId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as mx FROM presenter where status=1 and event_code='$row[event_code]'"));
            $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT profile as pro FROM presenter where status=1 and event_code='$row[event_code]' and id='$maxId[mx]'"));
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as ct FROM booking where finance=1 and manage=1 and event_code='$row[event_code]'"));
            $you['id'] = $tick['id'];
            $you['event_code'] = $row['event_code'];
            $you['profile'] = $profile['pro'];
            $you['counter'] = $count['ct'];
            $you['seats'] = $seats['st'];
            $you['category'] = $tick['category'];
            $you['topic'] = $tick['topic'];
            $you['county'] = $tick['county'];
            $you['landmark'] = $tick['landmark'];
            $you['venue'] = $tick['venue'];
            $you['start_date'] = $tick['start_date'];
            $you['time'] = $tick['time'];
            $you['computed'] = $tick['computed'];
            $you['end_date'] = $tick['end_date'];
            $you['max_guest'] = $tick['max_guest'];
            $you['max_charge'] = $tick['max_charge'];
            $you['conf_guest'] = $tick['conf_guest'];
            if($tick['status']==1){
                $you['status'] = 'Active';
            }else{
                $you['status'] = 'Ended';
            }
            if($tick['approval']==0){
                $you['approval'] = 'Closed';
            }else{
                $you['approval'] = 'Open';
            }
            $you['date'] = $tick['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='my_feed'){
    $response = mysqli_query($conn,"SELECT * FROM feedback where user_one_id='$_POST[user_one_id]' order by id asc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            if($row['user_one']=='Client'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from client where client_id='$_POST[user_one_id]'"));
            }elseif($row['user_one']=='Partner'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from partner where partner_id='$_POST[user_one_id]'"));
            }elseif($row['user_one']=='Mentor'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from mentor where mentor_id='$_POST[user_one_id]'"));
            }elseif($row['user_one']=='Trainer'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from trainer where trainer_id='$_POST[user_one_id]'"));
            }
            if($row['user_two']=='Service Mgr'){
                $two=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from staff where role='Service Manager' and status=1"));
            }elseif($row['user_two']=='Trainer'){
                $two=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from trainer where trainer_id='$row[user_two_id]'"));
            }
            $you['user_one'] = $row['user_one'];
            $you['user_one_id'] = $row['user_one_id'];
            $you['fname'] = $user['fname'];
            $you['phone'] = $user['phone'];
            $you['user_two'] = $row['user_two'];
            $you['user_two_id'] = $row['user_two_id'];
            $you['rfname'] = $two['fname'];
            $you['rphone'] = $two['phone'];
            $you['rate'] = $row['rate'];
            $you['message'] = $row['message'];
            $you['status'] = $row['status'];
            $you['time'] = $row['time'];
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Message was Found";
    }
}elseif($yak=='send_fee'){
    $message=addslashes($_POST["message"]);
    $user_one=$_POST["user_one"];
    $user_one_id=addslashes($_POST["user_one_id"]);
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user_two=$_POST["user_two"];
    $user_two_id=$_POST["user_two_id"];
    $status=$_POST["status"];
    if(mysqli_query($conn,"INSERT into feedback(user_one,user_one_id,message,date,time,user_two,user_two_id,status)
        values('$user_one','$user_one_id','$message','$date','$time','$user_two','$user_two_id','$status')")){
        $youth["success"]=1;
        $youth["message"]="Message Sent.";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to Send";
    }
}elseif($yak=='all_feed'){
    $response = mysqli_query($conn,"SELECT distinct user_one_id FROM feedback where user_two_id='$_POST[user_two_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $maxId=mysqli_fetch_assoc(mysqli_query($conn,"SELECT max(id) as id from feedback where user_one_id='$row[user_one_id]'
            and user_two_id='$_POST[user_two_id]'"));
            $all=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from feedback where id='$maxId[id]'"));
            if($all['user_one']=='Client'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from client where client_id='$all[user_one_id]'"));
            }elseif($all['user_one']=='Partner'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from partner where partner_id='$all[user_one_id]'"));
            }elseif($all['user_one']=='Mentor'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from mentor where mentor_id='$all[user_one_id]'"));
            }elseif($all['user_one']=='Trainer'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from trainer where trainer_id='$all[user_one_id]'"));
            }
            if($all['user_two']=='Service Mgr'){
                $two=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from staff where role='$_POST[user_two_id]' and status=1"));
            }elseif($all['user_two']=='Trainer'){
                $two=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from trainer where trainer_id='$all[user_two_id]'"));
            }
            $you['user_one'] = $all['user_one'];
            $you['user_one_id'] = $row['user_one_id'];
            $you['fname'] = $user['fname'];
            $you['phone'] = $user['phone'];
            $you['user_two'] = $all['user_two'];
            $you['user_two_id'] = $all['user_two_id'];
            $you['rfname'] = $two['fname'];
            $you['rphone'] = $two['phone'];
            $you['rate'] = $all['rate'];
            $you['message'] = $all['message'];
            $you['status'] = $all['status'];
            $you['time'] = $all['time'];
            $you['date'] = $all['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Message was Found";
    }
}elseif($yak=='pri_feed'){
    $response = mysqli_query($conn,"SELECT * FROM feedback where user_one_id='$_POST[user_one_id]' and user_two_id='$_POST[user_two_id]' order by id asc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            if($row['user_one']=='Client'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from client where client_id='$_POST[user_one_id]'"));
            }elseif($row['user_one']=='Partner'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from partner where partner_id='$_POST[user_one_id]'"));
            }elseif($row['user_one']=='Mentor'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from mentor where mentor_id='$_POST[user_one_id]'"));
            }elseif($row['user_one']=='Trainer'){
                $user=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from trainer where trainer_id='$_POST[user_one_id]'"));
            }
            if($row['user_two']=='Service Mgr'){
                $two=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from staff where role='Service Manager' and status=1"));
            }elseif($row['user_two']=='Trainer'){
                $two=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from trainer where trainer_id='$_POST[user_two_id]'"));
            }
            $you['user_one'] = $row['user_one'];
            $you['user_one_id'] = $row['user_one_id'];
            $you['fname'] = $user['fname'];
            $you['phone'] = $user['phone'];
            $you['user_two'] = $row['user_two'];
            $you['user_two_id'] = $row['user_two_id'];
            $you['rfname'] = $two['fname'];
            $you['rphone'] = $two['phone'];
            $you['rate'] = $row['rate'];
            $you['message'] = $row['message'];
            $you['status'] = $row['status'];
            $you['time'] = $row['time'];
            $you['date'] = $row['date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Message was Found";
    }
}elseif($yak=='countCl'){
    $response = mysqli_query($conn,"SELECT * FROM client where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $cnt=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cn from client where status=1"));
            $you['counter'] = $cnt['cn'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Client was Found";
    }
}elseif($yak=='countMn'){
    $response = mysqli_query($conn,"SELECT * FROM mentor where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $cnt=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cn from mentor where status=1"));
            $you['counter'] = $cnt['cn'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No mentor was Found";
    }
}elseif($yak=='countTr'){
    $response = mysqli_query($conn,"SELECT * FROM trainer where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $cnt=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cn from trainer where status=1"));
            $you['counter'] = $cnt['cn'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No trainer was Found";
    }
}elseif($yak=='countPr'){
    $response = mysqli_query($conn,"SELECT * FROM partner where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $cnt=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cn from partner where status=1"));
            $you['counter'] = $cnt['cn'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No partner was Found";
    }
}elseif($yak=='checkCl'){
    $response = mysqli_query($conn,"SELECT * FROM client where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['baseId']=$row['client_id'];
            $you['fname']=$row['fname'];
            $you['lname']=$row['lname'];
            $you['phone']=$row['phone'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Client was Found";
    }
}elseif($yak=='checkMn'){
    $response = mysqli_query($conn,"SELECT * FROM mentor where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['baseId']=$row['mentor_id'];
            $you['fname']=$row['fname'];
            $you['lname']=$row['lname'];
            $you['phone']=$row['phone'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No mentor was Found";
    }
}elseif($yak=='checkTr'){
    $response = mysqli_query($conn,"SELECT * FROM trainer where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['baseId']=$row['trainer_id'];
            $you['fname']=$row['fname'];
            $you['lname']=$row['lname'];
            $you['phone']=$row['phone'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No trainer was Found";
    }
}elseif($yak=='checkPr'){
    $response = mysqli_query($conn,"SELECT * FROM partner where status=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['baseId']=$row['partner_id'];
            $you['fname']=$row['fname'];
            $you['lname']=$row['lname'];
            $you['phone']=$row['phone'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No partner was Found";
    }
}elseif($yak=='che_pay'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM presenter where category='$category' and presenter_id='$_POST[presenter_id]'
    and status='$_POST[status]' and perfomer='$_POST[perfomer]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['profile'] = $row['profile'];
            $you['charge'] = $row['charge'];
            if($_POST['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($_POST['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['category'] = $row['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['computed'] = $event['computed'];
            $you['end_date'] = $event['end_date'];
            $you['max_guest'] = $event['max_guest'];
            $you['max_charge'] = $event['max_charge'];
            $you['conf_guest'] = $event['conf_guest'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Denied';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Performed';
            }
            $you['per_date'] = $row['per_date'];
            if($row['pay']==0){
                $you['pay'] = 'Pending';
            }else{
                $you['pay'] = 'Paid';
            }
            $you['pay_date'] = $row['pay_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Request was Found";
    }
}elseif($yak=='sum_seat'){
    $response = mysqli_query($conn,"SELECT * FROM booking where event_code='$_POST[event_code]' and finance='$_POST[finance]'
    and manage='$_POST[manage]'");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT sum(seats) as sm from booking where event_code='$_POST[event_code]'
            and finance='$_POST[finance]' and manage='$_POST[manage]'"));
            $you['seated'] = $count['sm'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='con_pres'){
    $message=addslashes($_POST["message"]);
    $rate=$_POST["rate"];
    $user_one=$_POST["user_one"];
    $category=$_POST["category"];
    $event_code=$_POST["event_code"];
    $user_one_id=addslashes($_POST["user_one_id"]);
    $present_code=addslashes($_POST["present_code"]);
    $per_date=$_POST["per_date"];
    $activity=addslashes($_POST["activity"]);
    $perfomer=$_POST["perfomer"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user_two=$_POST["user_two"];
    $user_two_id=$_POST["user_two_id"];
    $sign=$_POST["sign"];
    $index=$_POST['index'].".jpg";
    if(mysqli_query($conn,"UPDATE presenter set perfomer='$perfomer',per_date='$per_date'
    where present_code='$present_code'")){
        mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
        values('$user_one','$user_one_id','$activity','$per_date')");
        mysqli_query($conn,"INSERT into feedback(user_one,user_one_id,message,date,time,rate,user_two,user_two_id)
        values('$user_one','$user_one_id','$message','$date','$time','$rate','$user_two','$user_two_id')");
        $sql=mysqli_query($conn,"SELECT * FROM booking where event_code='$event_code' and finance=1 and manage=1");
       if(mysqli_num_rows($sql) > 0) {
           while ($row = mysqli_fetch_array($sql)){
               $client_id = $row['client_id'];
               $book_code = $row['book_code'];
               $ticket_code = $row['ticket_code'];
               if(!(mysqli_num_rows(mysqli_query($conn,"SELECT * from certificates where book_code='$book_code'"))>0)){
               mysqli_query($conn,"INSERT into certificates(category,client_id,book_code,ticket_code,event_code,presenter_id,presenter_sign,date)
               values('$category','$client_id','$book_code','$ticket_code','$event_code','$user_one_id','$index','$per_date')");
               }
           }
       }
       file_put_contents("img/" . $index, base64_decode($sign));
        $youth["success"]=1;
        $youth["message"]="Confirmation was Successful";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to Confirm";
    }
}elseif($yak=='che_cer'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT distinct event_code FROM presenter where category='$category'
    and presenter_id='$_POST[presenter_id]' and status=1 and perfomer=1 order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($latter = mysqli_fetch_array($response)) {
            $sql=mysqli_query($conn,"SELECT * FROM certificates where category='$category' and status='$_POST[status]'
             and (presenter_id='$_POST[presenter_id]' or event_code='$latter[event_code]')");
       if(mysqli_num_rows($sql) > 0) {
           while ($row = mysqli_fetch_array($sql)){
            if($category=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($category=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $profile3=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[client_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['cert_id'] = $row['cert_id'];
            $you['category'] = $row['category'];
            $you['client_id'] = $row['client_id'];
            $you['cfname']=$profile3['fname'];
            $you['clname']=$profile3['lname'];
            $you['cphone']=$profile3['phone'];
            $you['book_code'] = $row['book_code'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['event_code'] = $row['event_code'];
            $you['event_category'] = $event['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['end_date'] = $event['end_date'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['pfname']=$profile['fname'];
            $you['plname']=$profile['lname'];
            $you['pphone']=$profile['phone'];
            $you['psign'] = $row['presenter_sign'];
            $you['date'] = $row['date'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }else{
                $you['status'] = 'Issued';
            }
            if($row['status']==0){
                $you['issuer_id'] ='0';
                $you['ifname']='0';
                $you['ilname']='0';
                $you['iphone']='0';
            }else{
                if($category=='Mentorship'){
                    $profile2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[issuer_id]'"));
                }elseif($category=='Training'){
                    $profile2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[issuer_id]'"));
                }
                $you['issuer_id'] = $row['issuer_id'];
                $you['ifname']=$profile2['fname'];
                $you['ilname']=$profile2['lname'];
                $you['iphone']=$profile2['phone'];
            }
            $you['isign'] = $row['issuer_sign'];
            $you['idate'] = $row['issue_date'];
            if($row['client']==0){
                $you['client'] = 'Pending';
            }else{
                $you['client'] = 'Confirmed';
            }
            $you['cli_date'] = $row['cli_date'];
            array_push($youth['alive'], $you);
           }
       } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record to show";
    }
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='single_cer'){
    $message=addslashes($_POST["message"]);
    $rate=$_POST["rate"];
    $user_one=$_POST["user_one"];
    $user_id=$_POST["user_id"];
    $type_one=$_POST["type_one"];
    $user_one_id=addslashes($_POST["user_one_id"]);
    $cert_id=$_POST["cert_id"];
    $issue_date=$_POST["issue_date"];
    $activity=addslashes($_POST["activity"]);
    $activity2=addslashes($_POST["activity2"]);
    $status=$_POST["status"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user_two=$_POST["user_two"];
    $user_two_id=$_POST["user_two_id"];
    $issuer_sign=$_POST["issuer_sign"];
    $index=$_POST['index'].".jpg";
    if(mysqli_query($conn,"UPDATE certificates set status='$status',issue_date='$issue_date',
    issuer_sign='$index',issuer_id='$user_one_id' where cert_id='$cert_id'")){
        mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
        values('$user_one','$user_one_id','$activity','$issue_date')");
        mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
        values('$type_one','$user_id','$activity2','$issue_date')");
        mysqli_query($conn,"INSERT into feedback(user_one,user_one_id,message,date,time,rate,user_two,user_two_id)
        values('$user_one','$user_one_id','$message','$date','$time','$rate','$user_two','$user_two_id')");
       file_put_contents("img/" . $index, base64_decode($issuer_sign));
        $youth["success"]=1;
        $youth["message"]="Conferment was Successful";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to confer";
    }
}elseif($yak=='grouped_cer'){
    $message=addslashes($_POST["message"]);
    $rate=$_POST["rate"];
    $user_one=$_POST["user_one"];
    $type_one=$_POST["type_one"];
    $user_one_id=addslashes($_POST["user_one_id"]);
    $issue_date=$_POST["issue_date"];
    $activity=addslashes($_POST["activity"]);
    $status=$_POST["status"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user_two=$_POST["user_two"];
    $user_two_id=$_POST["user_two_id"];
    $issuer_sign=$_POST["issuer_sign"];
    $index=$_POST['index'].".jpg";
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT distinct event_code FROM presenter where category='$category'
    and presenter_id='$user_one_id' and status=1 and perfomer=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($latter = mysqli_fetch_array($response)) {
            $sql1 = mysqli_query($conn,"SELECT * FROM certificates where category='$category' and status=0
            and (presenter_id='$user_one_id' or event_code='$latter[event_code]')");
               if (mysqli_num_rows($sql1) > 0) {
                   while ($row = mysqli_fetch_array($sql1)){
                       $pro=mysqli_fetch_assoc(mysqli_query($conn,"SELECT fname as fm from client where client_id='$row[client_id]'"));
                       $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
                       $person=addslashes("Hi ".$pro['fm'].', Your Certificate for the '.$event['category'].' Program held on '.$event['start_date'].' at the '.$event['venue'].' ~ '.$event['landmark'].' ~ '.$event['county']. ' County is Ready.');
                       mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
                       values('$type_one','$row[client_id]','$person','$issue_date')");
                   }
               }
            if(mysqli_query($conn,"UPDATE certificates set status='$status',issue_date='$issue_date',
            issuer_sign='$index',issuer_id='$user_one_id' where category='$category' and status=0
             and (presenter_id='$user_one_id' or event_code='$latter[event_code]')")){
        mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
        values('$user_one','$user_one_id','$activity','$issue_date')");
        mysqli_query($conn,"INSERT into feedback(user_one,user_one_id,message,date,time,rate,user_two,user_two_id)
        values('$user_one','$user_one_id','$message','$date','$time','$rate','$user_two','$user_two_id')");
       file_put_contents("img/" . $index, base64_decode($issuer_sign));
        $youth["success"]=1;
        $youth["message"]="Conferment was Successful";
             }else{
                $youth["success"]=0;
                $youth["message"]="Failed to render";
            }
        }
    }
}elseif($yak=='check_tr'){
    $presenter_id=$_POST["presenter_id"];
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT distinct event_code FROM presenter where category='$category'
    and presenter_id='$presenter_id' and status=1 and perfomer=1");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($latter = mysqli_fetch_array($response)) {
            $sql1 = mysqli_query($conn,"SELECT * FROM certificates where category='$category' and status=0
            and (presenter_id='$presenter_id' or event_code='$latter[event_code]')");
               if (mysqli_num_rows($sql1) > 0) {
                   while ($row = mysqli_fetch_array($sql1)){
                    $guoko=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cn from certificates where category='$category' and status=0
                    and (presenter_id='$presenter_id' or event_code='$latter[event_code]')"));
                    $you['counter'] = $guoko['cn'];
                    array_push($youth['alive'], $you);
                   }
               }else{
                $youth["success"]=0;
                $youth["message"]="We didn't Find a Group.";
            }
        }
    }else{
        $youth["success"]=0;
        $youth["message"]="No Record.";
    }
}elseif($yak=='my_cert'){
    $response=mysqli_query($conn,"SELECT * FROM certificates where client_id='$_POST[client_id]' and client='$_POST[client]' order by cert_id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            if($row['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($row['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $profile3=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[client_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['cert_id'] = $row['cert_id'];
            $you['category'] = $row['category'];
            $you['client_id'] = $row['client_id'];
            $you['cfname']=$profile3['fname'];
            $you['clname']=$profile3['lname'];
            $you['cphone']=$profile3['phone'];
            $you['book_code'] = $row['book_code'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['event_code'] = $row['event_code'];
            $you['event_category'] = $event['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['end_date'] = $event['end_date'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['pfname']=$profile['fname'];
            $you['plname']=$profile['lname'];
            $you['pphone']=$profile['phone'];
            $you['psign'] = $row['presenter_sign'];
            $you['date'] = $row['date'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }else{
                $you['status'] = 'Issued';
            }
            if($row['status']==0){
                $you['issuer_id'] ='0';
                $you['ifname']='0';
                $you['ilname']='0';
                $you['iphone']='0';
            }else{
                if($row['category']=='Mentorship'){
                    $profile2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[issuer_id]'"));
                }elseif($row['category']=='Training'){
                    $profile2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[issuer_id]'"));
                }
                $you['issuer_id'] = $row['issuer_id'];
                $you['ifname']=$profile2['fname'];
                $you['ilname']=$profile2['lname'];
                $you['iphone']=$profile2['phone'];
            }
            $you['isign'] = $row['issuer_sign'];
            $you['idate'] = $row['issue_date'];
            if($row['client']==0){
                $you['client'] = 'Pending';
            }else{
                $you['client'] = 'Confirmed';
            }
            $you['cli_date'] = $row['cli_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='my_aff'){
    $message=addslashes($_POST["message"]);
    $rate=$_POST["rate"];
    $user_one=$_POST["user_one"];
    $user_one_id=addslashes($_POST["user_one_id"]);
    $cert_id=$_POST["cert_id"];
    $cli_date=$_POST["cli_date"];
    $activity=addslashes($_POST["activity"]);
    $client=$_POST["client"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $user_two=$_POST["user_two"];
    $user_two_id=$_POST["user_two_id"];
    if(mysqli_query($conn,"UPDATE certificates set client='$client',cli_date='$cli_date'
    where cert_id='$cert_id'")){
        mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
        values('$user_one','$user_one_id','$activity','$cli_date')");
        mysqli_query($conn,"INSERT into feedback(user_one,user_one_id,message,date,time,rate,user_two,user_two_id)
        values('$user_one','$user_one_id','$message','$date','$time','$rate','$user_two','$user_two_id')");
        $youth["success"]=1;
        $youth["message"]="Confirmation was Successful";
    }else{
        $youth["success"]=0;
        $youth["message"]="Failed to Confirm";
    }
}elseif($yak=='all_cert'){
    $response=mysqli_query($conn,"SELECT * FROM certificates where status='$_POST[status]' order by cert_id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            if($row['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($row['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $profile3=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM client where client_id='$row[client_id]'"));
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['cert_id'] = $row['cert_id'];
            $you['category'] = $row['category'];
            $you['client_id'] = $row['client_id'];
            $you['cfname']=$profile3['fname'];
            $you['clname']=$profile3['lname'];
            $you['cphone']=$profile3['phone'];
            $you['book_code'] = $row['book_code'];
            $you['ticket_code'] = $row['ticket_code'];
            $you['event_code'] = $row['event_code'];
            $you['event_category'] = $event['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['end_date'] = $event['end_date'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['pfname']=$profile['fname'];
            $you['plname']=$profile['lname'];
            $you['pphone']=$profile['phone'];
            $you['psign'] = $row['presenter_sign'];
            $you['date'] = $row['date'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }else{
                $you['status'] = 'Issued';
            }
            if($row['status']==0){
                $you['issuer_id'] ='0';
                $you['ifname']='0';
                $you['ilname']='0';
                $you['iphone']='0';
            }else{
                if($row['category']=='Mentorship'){
                    $profile2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[issuer_id]'"));
                }elseif($row['category']=='Training'){
                    $profile2=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[issuer_id]'"));
                }
                $you['issuer_id'] = $row['issuer_id'];
                $you['ifname']=$profile2['fname'];
                $you['ilname']=$profile2['lname'];
                $you['iphone']=$profile2['phone'];
            }
            $you['isign'] = $row['issuer_sign'];
            $you['idate'] = $row['issue_date'];
            if($row['client']==0){
                $you['client'] = 'Pending';
            }else{
                $you['client'] = 'Confirmed';
            }
            $you['cli_date'] = $row['cli_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Record was Found";
    }
}elseif($yak=='real_deni'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM presenter where category='$category' and pay='$_POST[pay]'
    and perfomer='$_POST[perfomer]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['profile'] = $row['profile'];
            $you['charge'] = $row['charge'];
            if($_POST['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($_POST['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['category'] = $row['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['computed'] = $event['computed'];
            $you['end_date'] = $event['end_date'];
            $you['max_guest'] = $event['max_guest'];
            $you['max_charge'] = $event['max_charge'];
            $you['conf_guest'] = $event['conf_guest'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Denied';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Performed';
            }
            $you['per_date'] = $row['per_date'];
            if($row['pay']==0){
                $you['pay'] = 'Pending';
            }else{
                $you['pay'] = 'Paid';
            }
            $you['pay_date'] = $row['pay_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Request was Found";
    }
}elseif($yak=='men_dis'){
    $present_code=addslashes($_POST["present_code"]);
    $pay_date=$_POST["pay_date"];
    $category=addslashes($_POST["category"]);
    $event_code=addslashes($_POST["event_code"]);
    $activity=addslashes($_POST["activity"]);
    $pay=$_POST["pay"];
    $user=$_POST["user"];
    $mentor=$_POST["mentor"];
    $mode=addslashes($_POST["mode"]);
    $code=addslashes($_POST["code"]);
    $amount=$_POST["amount"];
    $presenter_id=$_POST["presenter_id"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from payment where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from disburse where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }else{
        if(mysqli_query($conn,"UPDATE presenter set pay='$pay',pay_date='$pay_date' where present_code='$present_code'")){
            mysqli_query($conn,"INSERT into disburse(present_code,event_code,presenter_id,category,mode,code,amount,date)
            values('$present_code','$event_code','$presenter_id','$category','$mode','$code','$mentor','$pay_date')");
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$presenter_id','$activity','$pay_date')");
            mysqli_query($conn,"UPDATE records set mentor=(mentor+$mentor),balance=(balance-$mentor),edition='$pay_date'");
            $youth["success"]=1;
            $youth["message"]="Mentor Disbursement was successful.";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to send";
        }
    }
}elseif($yak=='tra_dis'){
    $present_code=addslashes($_POST["present_code"]);
    $pay_date=$_POST["pay_date"];
    $category=addslashes($_POST["category"]);
    $event_code=addslashes($_POST["event_code"]);
    $activity=addslashes($_POST["activity"]);
    $pay=$_POST["pay"];
    $user=$_POST["user"];
    $trainer=$_POST["trainer"];
    $mode=addslashes($_POST["mode"]);
    $code=addslashes($_POST["code"]);
    $amount=$_POST["amount"];
    $presenter_id=$_POST["presenter_id"];
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * from payment where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * from disburse where code='$code'"))>0){
        $youth["success"]=0;
        $youth["message"]="Failed!! The Reference CODE was not recognized. We know where you got it from.";
    }else{
        if(mysqli_query($conn,"UPDATE presenter set pay='$pay',pay_date='$pay_date' where present_code='$present_code'")){
            mysqli_query($conn,"INSERT into disburse(present_code,event_code,presenter_id,category,mode,code,amount,date)
            values('$present_code','$event_code','$presenter_id','$category','$mode','$code','$trainer','$pay_date')");
            mysqli_query($conn,"INSERT into notices(user,user_id,activity,date)
            values('$user','$presenter_id','$activity','$pay_date')");
            mysqli_query($conn,"UPDATE records set trainer=(trainer+$trainer),balance=(balance-$trainer),edition='$pay_date'");
            $youth["success"]=1;
            $youth["message"]="Trainer Disbursement was successful.";
        }else{
            $youth["success"]=0;
            $youth["message"]="Failed to send";
        }
    }
}elseif($yak=='cool_deni'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM presenter where category='$category' and pay='$_POST[pay]'
    and perfomer='$_POST[perfomer]' and presenter_id='$_POST[presenter_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['profile'] = $row['profile'];
            $you['charge'] = $row['charge'];
            if($_POST['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($_POST['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['category'] = $row['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['computed'] = $event['computed'];
            $you['end_date'] = $event['end_date'];
            $you['max_guest'] = $event['max_guest'];
            $you['max_charge'] = $event['max_charge'];
            $you['conf_guest'] = $event['conf_guest'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Denied';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Performed';
            }
            $you['per_date'] = $row['per_date'];
            if($row['pay']==0){
                $you['pay'] = 'Pending';
            }else{
                $you['pay'] = 'Paid';
            }
            $you['pay_date'] = $row['pay_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Disbursement was Found";
    }
}elseif($yak=='all_presen'){
    $response = mysqli_query($conn,"SELECT * FROM presenter where status='$_POST[status]' and perfomer='$_POST[perfomer]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['profile'] = $row['profile'];
            $you['charge'] = $row['charge'];
            if($row['category']=='Mentorship'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mentor where mentor_id='$row[presenter_id]'"));
            }elseif($row['category']=='Training'){
                $profile=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$row[presenter_id]'"));
            }
            $you['fname']=$profile['fname'];
            $you['lname']=$profile['lname'];
            $you['email']=$profile['email'];
            $you['phone']=$profile['phone'];
            $you['event_code'] = $row['event_code'];
            $event=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM event where event_code='$row[event_code]'"));
            $you['category'] = $row['category'];
            $you['topic'] = $event['topic'];
            $you['county'] = $event['county'];
            $you['landmark'] = $event['landmark'];
            $you['venue'] = $event['venue'];
            $you['start_date'] = $event['start_date'];
            $you['time'] = $event['time'];
            $you['computed'] = $event['computed'];
            $you['end_date'] = $event['end_date'];
            $you['max_guest'] = $event['max_guest'];
            $you['max_charge'] = $event['max_charge'];
            $you['conf_guest'] = $event['conf_guest'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Approved';
            }else{
                $you['status'] = 'Denied';
            }
            $you['comment'] = $row['comment'];
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            if($row['perfomer']==0){
                $you['perfomer'] = 'Pending';
            }else{
                $you['perfomer'] = 'Performed';
            }
            $you['per_date'] = $row['per_date'];
            if($row['pay']==0){
                $you['pay'] = 'Pending';
            }else{
                $you['pay'] = 'Paid';
            }
            $you['pay_date'] = $row['pay_date'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Request was Found";
    }
}elseif($yak=='real_thot'){
    $category=addslashes($_POST["category"]);
    $response = mysqli_query($conn,"SELECT * FROM disburse where category='$category' and present_code='$_POST[present_code]'
    and presenter_id='$_POST[presenter_id]' order by id desc");
    if (mysqli_num_rows($response) > 0) {
        $youth['success'] = 1;
        $youth['alive'] = array();
        while ($row = mysqli_fetch_array($response)) {
            $you['id'] = $row['id'];
            $you['present_code'] = $row['present_code'];
            $you['event_code'] = $row['event_code'];
            $you['presenter_id'] = $row['presenter_id'];
            $you['event_code'] = $row['event_code'];
            $you['category'] = $row['category'];
            $you['mode'] = $row['mode'];
            $you['code'] = $row['code'];
            $you['amount'] = $row['amount'];
            if($row['status']==0){
                $you['status'] = 'Pending';
            }elseif($row['status']==1){
                $you['status'] = 'Confirmed';
            }else{
                $you['status'] = 'Denied';
            }
            $you['date'] = $row['date'];
            $you['edition'] = $row['edition'];
            array_push($youth['alive'], $you);
        }
    } else {
        $youth['success'] = 0;
        $youth['message'] = "No Disbursement was Found";
    }
}
echo json_encode($youth);
mysqli_close($conn);