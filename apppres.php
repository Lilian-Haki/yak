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
                Presenter Requests
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>EntryCode</th>
                                <th>Event</th>
                                <th>Presenter</th>
                                <th>Profile</th>
                                <th>Charge</th>
                                <th>Status</th>
                                <th>RegDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from presenter order by id desc");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['present_code'];?></td>
                    <?php $sql=mysqli_query($conn,"SELECT * from event where event_code='$r[event_code]'");
                            while($event=$sql->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">EventCode:&nbsp;<?php echo $r['event_code'];?><br></b><?php echo $event['category'];?>&nbsp;Program<br>
                                Theme:&nbsp;<?php echo $event['topic'];?><br>
                                Venue:&nbsp;<?php echo $event['venue'];?>,&nbsp;<?php echo $event['landmark'];?><br><?php echo $event['county'];?>&nbsp;County</td>
                            <?php
                            } ?>
                    <?php if($r['category']=='Mentorship'){
                    $sql=mysqli_query($conn,"SELECT * from mentor where mentor_id='$r[presenter_id]'");
                            while($profile=$sql->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['presenter_id'];?><br></b><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                            <?php
                            }}else{?>
                            <?php
                            $sql1=mysqli_query($conn,"SELECT * from trainer where trainer_id='$r[presenter_id]'");
                            while($profile=$sql1->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['presenter_id'];?></b><br><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                            <?php }}?>
                            <td><img src="home/img/<?php echo $r['profile'];?>" width="105px" height="105px"></td>
                    <td>KShs&nbsp;<?php echo $r['charge'];?></td>
                    <td><?php
                    if($r['status']==0){echo 'Pending';}elseif($r['status']==1){echo 'Approved';}else{echo 'Denied';}?></td>
                    <td><?php echo $r['date'];?></td>
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