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
                    <h6 class="m-0 font-weight-bold text-primary">String Replace</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form name="form" id="form_val" method="post" action="">
                        <div class="text-center" style="background: #e7f957;color: #000;"></div>
                        <div class="form-group row input_fields_wrap">
                            <div class="col-sm-6 mb-3 form-group">
                                <input type="text" class="form-control form-control-user" name="name" id="name"
                                    placeholder="Name" required>
                            </div> 
                            <div class="col-sm-6 mb-3 ">
                                <input type="email" class="form-control form-control-user" name="email" id="email"
                                    placeholder="Enter Your Email" required>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="number" class="form-control form-control-user" name="mobile" id="mobile"
                                    placeholder="Mobile" required >
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" name="designation" id="designation"
                                    placeholder="Designation" required>
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
                
                $string = "@Name@ ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent in mollis magna. Donec eu elit pellentesque, maximus nisl vitae, cursus
                velit. Sed Loremnibh sed elit auctor tincidunt. Donec tempor est id nunc
                ullamcorper rhoncus. Phasellus nec arcu et dui varius ullamcorper commodo quis
                ligula. Etiam ultrices nisi @email@, ut euismod elit tempor sed. Vestibulum ante
                ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor turpis vel
                nisi fermentum, a sodales magna egestas. Vestibulum lobortis elit sed neque
                rhoncus, sit amet @mobile@ magna blandit. @designation@ nec leo ac diam
                euismod fringilla";
                if(isset($_POST['submit'])){ 
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $designation = $_POST['designation']; 
                
                $find = ["@Name@", "@email@", "@mobile@","@designation@"];
                $replace   = [$name, $email, $mobile, $designation];
                // echo $replace;
                // die();

                $string = str_replace($find, $replace, $string);
                }    
                ?>
                <p><?php echo $string; ?></p>
                 
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