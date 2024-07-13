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
                Event Tickets
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tSortable22">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>TicketCode</th>
                                <th>Event</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Charge</th>
                                <th>EntrySeats</th>
                                <th>Remainder</th>
                                <th>RegDate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $q = $conn->query("select * from ticket order by id desc");
                  $i=1;
                  while($r = $q->fetch_assoc())
                  {     ?> 
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $r['ticket_code'];?></td>
                    <?php $sql=mysqli_query($conn,"SELECT * from event where event_code='$r[event_code]'");
                            while($event=$sql->fetch_assoc()){?>
                                <td><b style="color:#FF0000;">EventCode:&nbsp;<?php echo $r['event_code'];?></b><br><?php echo $event['category'];?>&nbsp;Program<br>
                                Theme:&nbsp;<?php echo $event['topic'];?><br>
                                Venue:&nbsp;<?php echo $event['venue'];?>,&nbsp;<?php echo $event['landmark'];?><br><?php echo $event['county'];?>&nbsp;County</td>
                            <?php
                            } ?>
                    <td><?php echo $r['category'];?></td>
                    <td><?php echo $r['type'];?></td>
                    <td><?php if($r['charge']==0){echo '0';}else{?>KShs&nbsp;<?php echo $r['charge'];}?></td>
                    <td><?php if($r['current_seat']==0){echo '0';}else{echo $r['current_seat'];?><br>Seats<?php }?></td>
                    <td><?php if($r['adjusted_seat']==0){echo '0';}else{echo $r['adjusted_seat'];?><br>Seats<?php }?></td>
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