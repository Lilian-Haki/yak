<?php
include("home/caution.php");
if (empty($_SESSION['YAK'])) {
    header('location:login');
} else {
    if (isset($_GET['qid'])) {
        $id=$_GET['qid']/99970;
        if(mysqli_query($conn, "UPDATE partner set status=1,remarks='' where id='".$id."'")){
        echo "<script>alert('Account Approved.')</script>";
        echo "<script>setTimeout(\"location.href = 'parx';\",50);</script>";
        }else{
            echo "<script>alert('Failed.')</script>"; 
        }
    }
?>
<!DOCTYPE html>
<?php include("header.php");?>
<?php include("home/sidebar.php");?>
<div id="page-wrapper" style="background:#96E696;">
<a href="" class="btn btn-danger" id="print" onclick="printContent('examples')">Pdf Report</a>
    <div id="page-inner">
        <div class="panel panel-default" id="examples">
            <div class="panel-heading">
                Manage Rejected Partners
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PartnerNO</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Username</th>
                                <th>Dob</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>status</th>
                                <th>RegDate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from partner where status=2");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['partner_id'];?></td>
                    <td><?php echo $r['fname'];?></td>
                    <td><?php echo $r['lname'];?></td>
                    <td><?php echo $r['username'];?></td>
                    <td><?php echo $r['dob'];?><br>Age:&nbsp;<?php echo $r['age'];?>yrs</td>
                    <td><?php echo $r['email'];?></td>
                    <td><?php echo $r['phone'];?></td>
                    <td><?php echo $r['address'];?></td>
                    <td><?php
                    if($r['status']==0){echo 'Pending';}elseif($r['status']==1){echo 'Approved';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                    <td>
                      <a href="parx?qid=<?php echo ($r['id']*99970); ?>"
                      onclick="return confirm('Click Ok to Approve the Account.');">
                      <button class="btn btn-success" type="button">
                        <span class="glyphicon glyphicon-ok"></span></button></a>
                    </td>
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