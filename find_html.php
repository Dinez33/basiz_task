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
                    <h6 class="m-0 font-weight-bold text-primary">Html Replace</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form name="form" id="form_val" method="post" action="">
                        <div class="text-center" style="background: #e7f957;color: #000;"></div>
                        <div class="form-group row input_fields_wrap">
                            <div class="col-sm-6 mb-3 form-group">
                                <input type="text" class="form-control form-control-user" name="find" id="find"
                                    placeholder="Find" required>
                            </div> 
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" name="replace" id="replace"
                                    placeholder="Replace" required>
                            </div>
                            <div class="col-sm-6 mb-3 form-group">
                                <input type="text" class="form-control form-control-user" name="find1" id="find1"
                                    placeholder="Find" required>
                            </div> 
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" name="replace1" id="replace1"
                                    placeholder="Replace" required>
                            </div>
                        </div>
                        
                        
                        <input type="submit" style="border-radius:2rem;" class="btn btn-primary btn-user btn-block w-auto" name="submit" value="submit">
                        <hr>
                        
                    </form>
                     
                </div>
            </div>
        </div>
    
</div>

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

                <?php
                $string = '<p align ="justify" style="orphans: 0; widows: 0; margin-left: 0.39cm;
                margin-bottom: 0cm; border: none; padding: 0cm"><b>PARTY</b>2NAME<i>, </i>a
                company incorporated under the laws of ROC2LAW having its Registered Office at
                P1OFFICEADD. which expression, shall unless it be repugnant to the context or
                meaning thereof, mean and include its successors and assigns (hereinafter referred
                to as ‘‘ Service Provider’) of the ONE PART</p>';
                if(isset($_POST['submit'])){ 
                $find = $_POST['find'];
                $replace = $_POST['replace'];
                $find1 = $_POST['find1'];
                $replace1 = $_POST['replace1'];
                
                $finstring = strip_tags($string,"<p><i>");

                $string1 = str_replace($find, $replace, $finstring);
                
                $string = str_replace($find1, $replace1, $string1);
                }    
                ?>
                <?php echo $string; ?>
                 
            </div>
        </div>
    </div>
    
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
                                        
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/jquery/jquery.validate.js"></script>
    

<?php include('footer.php') ?>