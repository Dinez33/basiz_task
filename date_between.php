<?php
    
    include('header.php');
?>
<!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-gray-800">Students</h1> -->
</div>

<!-- Content Row -->
<div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Days Between Date</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form name="form" id="form_val" method="post" action="">
                        <div class="text-center" style="background: #e7f957;color: #000;"></div>
                        <div class="form-group row input_fields_wrap">
                            <div class="col-sm-6 mb-3 form-group">
                                <lable>Start date</lable>
                                <input type="date" class="form-control form-control-user" name="start" id="start"
                                    placeholder="Date" required>
                            </div> 
                            <div class="col-sm-6 mb-3 ">
                               <lable>End date</lable>
                                <input type="date" class="form-control form-control-user" name="end" id="end"
                                    placeholder="Enter Your Date" required>
                            </div>
                            
                        </div>
                        
                        
                        <input type="submit" style="border-radius:2rem;" class="btn btn-primary btn-user btn-block w-auto" name="submit" value="submit">
                        <hr>
                        
                    </form>
                     
                </div>
            </div>
        </div>
    
</div>


<?php
    if(isset($_POST['submit'])){ 
    $start = $_POST['start'];
    $end = $_POST['end'];
    
    
    $startTimeStamp = strtotime($start);
    $endTimeStamp = strtotime($end);

    $timeDiff = abs($endTimeStamp - $startTimeStamp);

    $numberDays = $timeDiff/86400;  // 86400 seconds in one day

    // and you might want to convert to integer
    $numberDays = intval($numberDays);

    //enable extension=intl for NumberFormatter
	$numtostring = new NumberFormatter("en", NumberFormatter::SPELLOUT);
	$word = $numtostring->format($numberDays);

?>                
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Output</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body" id="output">
                
                <p><?php echo $numberDays; ?> Days</p>
                <p><?php echo $word; ?> Days</p>
            </div>
        </div>
    </div>
    
</div>
<?php } ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
                                        
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/jquery/jquery.validate.js"></script>
    

<?php include('footer.php') ?>