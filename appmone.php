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
                Finance Record
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sponsorship</th>
                                <th>Booking</th>
                                <th>Total</th>
                                <th>Mentor<br>Payment</th>
                                <th>Trainer<br>Payment</th>
                                <th>Balance</th>
                                <th>Dated</th>
                                <th>Edition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from records order by id desc");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php if($r['sponsor']==0){echo '0';}else{ echo 'KShs&nbsp;'.$r['sponsor'];}?></td>
                    <td><?php if($r['booking']==0){echo '0';}else{ echo 'KShs&nbsp;'.$r['booking'];}?></td>
                    <td>KShs&nbsp;<?php echo $r['amount'];?></td>
                    <td><?php if($r['mentor']==0){echo '0';}else{ echo 'KShs&nbsp;'.$r['mentor'];}?></td>
                    <td><?php if($r['trainer']==0){echo '0';}else{ echo 'KShs&nbsp;'.$r['trainer'];}?></td>
                    <td>KShs&nbsp;<?php echo $r['balance'];?></td>
                    <td><?php echo $r['date'];?></td>
                    <td><?php echo $r['edition'];?></td>
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