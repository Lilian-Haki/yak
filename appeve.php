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
                Uploaded Events
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>EventCode</th>
                                <th>Category</th>
                                <th>Theme</th>
                                <th>Venue</th>
                                <th>StartDate</th>
                                <th>EndDate</th>
                                <th>Max~<br>Guests</th>
                                <th>Confirmed<br>Guests</th>
                                <th>Max~<br>Charge</th>
                                <th>Status</th>
                                <th>RegDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from event order by id desc");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['event_code'];?></td>
                    <td><?php echo $r['category'];?></td>
                    <td><?php echo $r['topic'];?></td>
                    <td><?php echo $r['venue'];?>,<br><?php echo $r['landmark'];?><br><?php echo $r['county'];?>&nbsp;County</td>
                    <td><?php echo $r['start_date'];?><br>Time:&nbsp;<?php echo $r['time'];?></td>
                    <td><?php echo $r['end_date'];?></td>
                    <td><?php echo round(($r['max_guest']+$r['conf_guest']),0);?></td>
                    <td><?php echo $r['conf_guest'];?></td>
                    <td>KShs&nbsp;<?php echo $r['max_charge'];?></td>
                    <td><?php
                    if($r['status']==1){echo 'Active';}else{echo 'Ended';}?></td>
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