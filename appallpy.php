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
                ALL Booking Payments & Sponsorship
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PayCode</th>
                                <th>Category</th>
                                <th>Payer</th>
                                <th>Payment<br>Mode</th>
                                <th>Transaction<br>Code</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>RegDate</th>
                                <th>Comment</th>
                                <th>Edition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from payment order by id desc");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['pay_code'];?></td>
                    <td><?php echo $r['category'];?></td>
                    <?php if($r['category']=='Sponsorship'){
                    $sql=mysqli_query($conn,"SELECT * from partner where partner_id='$r[payer_id]'");
                            while($profile=$sql->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['payer_id'];?><br></b><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                            <?php
                            }}else{?>
                            <?php
                            $sql1=mysqli_query($conn,"SELECT * from client where client_id='$r[payer_id]'");
                            while($profile=$sql1->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">ID:&nbsp;<?php echo $r['payer_id'];?></b><br><?php echo $profile['fname'] ?>&nbsp;<?php echo $profile['lname'] ?><br>
                                Phone:&nbsp;<?php echo $profile['phone'] ?></td>
                            <?php }}?>
                    <td><?php echo $r['mode'];?></td>
                    <td><?php echo $r['code'];?></td>
                    <td>KShs&nbsp;<?php echo $r['amount'];?></td>
                    <td><?php
                    if($r['status']==0){echo 'Pending';}elseif($r['status']==1){echo 'Approved';}else{echo 'Denied';}?></td>
                    <td><?php echo $r['date'];?></td>
                    <td><?php if($r['status']==0){echo '';}else{echo $r['comment'];}?></td>
                    <td><?php if($r['status']==0){echo '';}else{echo $r['edition'];}?></td>
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