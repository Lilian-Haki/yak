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
                Feedback & Chat
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>UserName</th>
                                <th>Rating</th>
                                <th>Message</th>
                                <th>RegDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from feedback order by id desc");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['user'];?></td>
                    <?php if($r['user']=='Partner'){
                    $sql=mysqli_query($conn,"SELECT * from partner where partner_id='$r[user_id]'");
                            while($profile=$sql->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['user_id'];?><br></b><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                            <?php
                            }}elseif($r['user']=='Mentor'){
                                $sql=mysqli_query($conn,"SELECT * from mentor where mentor_id='$r[user_id]'");
                                        while($profile=$sql->fetch_assoc()){?>
                                            <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['user_id'];?><br></b><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                            Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                                        <?php
                                        }}elseif($r['user']=='Trainer'){
                                            $sql=mysqli_query($conn,"SELECT * from trainer where trainer_id='$r[user_id]'");
                                                    while($profile=$sql->fetch_assoc()){?>
                                                        <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['user_id'];?><br></b><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                                        Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                                                    <?php
                                                    }}else{?>
                            <?php
                            $sql=mysqli_query($conn,"SELECT * from client where client_id='$r[user_id]'");
                            while($profile=$sql->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['user_id'];?></b><br><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                            <?php }}?>
                    <td><?php echo $r['rate'];?><br>/5</td>
                    <td><?php echo $r['message'];?></td>
                    <td><?php echo $r['date'];?><br><?php echo $r['time'];?></td>
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