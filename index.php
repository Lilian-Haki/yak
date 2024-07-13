<?php
ob_start();
error_reporting(0);
session_start();
include("data/conn.php");
if (empty($_SESSION['YAK'])) {
    header('location:login');
} else {
?>
<!DOCTYPE html>
<?php include("header.php");?>
<?php include("home/sidebar.php");?>
<div id="page-wrapper" style="background:#96E696;">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-4">
                <div class="main-box mb-dull" style="background:#38E338">
                    <a href="clin">
                        <i class="fa fa-group fa-5x"></i>
                        <h5>New Clients</h5>
                        <b id="cli"></b>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-pink" style="background:#38E338">
                    <a href="parn">
                        <i class="fa fa-money fa-5x"></i>
                        <h5>New Partners</h5>
                        <b id="par"></b>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-dull" style="background:#38E338">
                    <a href="tran">
                        <i class="fa fa-certificate fa-5x"></i>
                        <h5>New Trainers</h5>
                        <b id="tra"></b>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-red" style="background:#38E338">
                    <a href="even">
                        <i class="fa fa-table fa-5x"></i>
                        <h5>Event Managers</h5>
                        <b id="eve"></b>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-pink" style="background:#38E338">
                    <a href="finn">
                        <i class="fa fa-dollar fa-5x"></i>
                        <h5>Finance Managers</h5>
                        <b id="fin"></b>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-red" style="background:#38E338">
                    <a href="sern">
                        <i class="fa fa-wrench fa-5x"></i>
                        <h5>Service Managers</h5>
                        <b id="ser"></b>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-box mb-red" style="background:#38E338">
                    <a href="menn">
                        <i class="fa fa-star fa-5x"></i>
                        <h5>New Mentors</h5>
                        <b id="men"></b>
                    </a>
                </div>
            </div>
        </div>
        <?php include('home/footer.php');?>
    </div>
</div>
</div>
<?php include('quick.php');?>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/custom1.js"></script>
</body>
</html>
<?php }?>