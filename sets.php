<?php
include("home/caution.php");
if (empty($_SESSION['YAK'])) {
    header('location:login');
} else {
?>
<!DOCTYPE html>
<?php include("header.php");?>
<?php include("home/sidebar.php");?>
<div id="page-wrapper" style="background:#96E696;">
<a href="" class="btn btn-danger" id="print" onclick="printContent('examples')">Pdf Report</a>
    <div id="page-inner">
        <div class="panel panel-default" id="examples">
            <div class="panel-heading">
                Passwords Reseting.
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>UserID</th>
                                <th>Fullname</th>
                                <th>Phone</th>
                                <th>Activity</th>
                                <th>Account<br>Status</th>
                                <th>RegDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from settings");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['user'];?></td>
                    <?php
                    $user=$r['user'];
                    if($user=='CLIENT'){
                        $get=mysqli_fetch_assoc(mysqli_query($conn,"select * from client where client_id='".$r['user_id']."'"));
                        ?>
                        <td><?php echo $r['user_id'];?></td>
                    <td><?php echo $get['fname'].' '.$get['lname'];?></td>
                    <td><?php echo $get['phone'];?></td>
                    <td><?php echo $r['activity'];?></td>
                    <td><?php
                    if($get['status']==0){echo 'Pending';}elseif($get['status']==1){echo 'Approved';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                        <?php
                    }elseif($user=='MENTOR'){
                        $get=mysqli_fetch_assoc(mysqli_query($conn,"select * from mentor where mentor_id='".$r['user_id']."'"));
                        ?>
                        <td><?php echo $r['user_id'];?></td>
                    <td><?php echo $get['fname'].' '.$get['lname'];?></td>
                    <td><?php echo $get['phone'];?></td>
                    <td><?php echo $r['activity'];?></td>
                    <td><?php
                    if($get['status']==0){echo 'Pending';}elseif($get['status']==1){echo 'Approved';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                        <?php
                    }elseif($user=='PARTNER'){
                        $get=mysqli_fetch_assoc(mysqli_query($conn,"select * from partner where partner_id='".$r['user_id']."'"));
                        ?>
                        <td><?php echo $r['user_id'];?></td>
                    <td><?php echo $get['fname'].' '.$get['lname'];?></td>
                    <td><?php echo $get['phone'];?></td>
                    <td><?php echo $r['activity'];?></td>
                    <td><?php
                    if($get['status']==0){echo 'Pending';}elseif($get['status']==1){echo 'Approved';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                        <?php
                    }elseif($user=='TRAINER'){
                        $get=mysqli_fetch_assoc(mysqli_query($conn,"select * from trainer where trainer_id='".$r['user_id']."'"));
                        ?>
                        <td><?php echo $r['user_id'];?></td>
                    <td><?php echo $get['fname'].' '.$get['lname'];?></td>
                    <td><?php echo $get['phone'];?></td>
                    <td><?php echo $r['activity'];?></td>
                    <td><?php
                    if($get['status']==0){echo 'Pending';}elseif($get['status']==1){echo 'Approved';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                        <?php
                    }else{
                        $get=mysqli_fetch_assoc(mysqli_query($conn,"select * from staff where staff_id='".$r['user_id']."'"));
                        ?>
                        <td><?php echo $r['user_id'];?></td>
                    <td><?php echo $get['fname'].' '.$get['lname'];?></td>
                    <td><?php echo $get['phone'];?></td>
                    <td><?php echo $r['activity'];?></td>
                    <td><?php
                    if($get['status']==0){echo 'Pending';}elseif($get['status']==1){echo 'Approved';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                        <?php
                    }
                    ?>
                      </tr>
                      <?php $i++;}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('home/footer.php');?>
</div>
</div>
<script src="js/dataTable/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
         $('#tSortable22').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": true
        });
    });
    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/custom1.js"></script>
</body>
</html>
<?php }?>