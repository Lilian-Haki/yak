<?php
include("home/caution.php");
if (empty($_SESSION['YAK'])) {
    header('location:login');
} else {
    if (isset($_GET['qid'])) {
        $id=$_GET['qid']/99970;
        if(mysqli_query($conn, "UPDATE trainer set status=1 where id='".$id."'")){
        echo "<script>alert('Account Approved.')</script>";
        echo "<script>setTimeout(\"location.href = 'tran';\",50);</script>";
        }else{
            echo "<script>alert('Failed.')</script>"; 
        }
    }
    if (isset($_POST['btnRe'])) {
        if(mysqli_query($conn, "UPDATE trainer set status=2,remarks='".$_POST['remarks']."' where id='".$_POST['id']."'")){
        echo "<script>alert('Rejection was Successful.')</script>";
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
                Manage New Trainers
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>TrainerNO</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Username</th>
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
                  $q = $conn->query("select * from trainer where (status=0 or status=3)");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['trainer_id'];?></td>
                    <td><?php echo $r['fname'];?></td>
                    <td><?php echo $r['lname'];?></td>
                    <td><?php echo $r['username'];?></td>
                    <td><?php echo $r['email'];?></td>
                    <td><?php echo $r['phone'];?></td>
                    <td><?php echo $r['address'];?></td>
                    <td><?php
                    if($r['status']==0){echo 'Pending';}elseif($r['status']==1){echo 'Approved';}elseif($r['status']==3){echo 'Password Resetting';}else{echo 'Rejected';}?></td>
                    <td><?php echo $r['date'];?></td>
                    <td>
                        <?php if($r['status']==0){
                            ?>
                      <a href="tran?qid=<?php echo ($r['id']*99970); ?>"
                      onclick="return confirm('Click Ok to Approve the Account.');">
                      <button class="btn btn-success" type="button">
                        <span class="glyphicon glyphicon-ok"></span></button></a>
                      <div class="dropdown">
                                <button class="btn btn-danger" type="button"
                                    data-toggle="dropdown"><span class="glyphicon glyphicon-remove"></span></button>
                                <ul class="dropdown-menu alert panel-footer">
                                    <li>
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?php echo $r['id'];?>"/>
                                            <textarea class="form-control" rows="5" name="remarks"
                                                placeholder="Why do you Reject" required></textarea>
                                            <input type="submit" name="btnRe" value="Reject" class="btn btn-danger" />
                                        </form>
                                    </li>
                                </ul>
                            </div>
                       <?php }elseif($r['status']==3){
                            ?>
                      <a href="tran?qid=<?php echo ($r['id']*99970); ?>"
                      onclick="return confirm('Click Ok to Approve Password Resetting.');">
                      <button class="btn btn-primary" type="button">
                        <span class="glyphicon glyphicon-ok"></span></button></a>
                      <div class="dropdown">
                                <button class="btn btn-danger" type="button"
                                    data-toggle="dropdown"><span class="glyphicon glyphicon-remove"></span></button>
                                <ul class="dropdown-menu alert panel-footer">
                                    <li>
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?php echo $r['id'];?>"/>
                                            <textarea class="form-control" rows="5" name="remarks"
                                                placeholder="Why do you Reject Password Resetting." required></textarea>
                                            <input type="submit" name="btnRe" value="Reject" class="btn btn-danger" />
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        <?php }?>
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