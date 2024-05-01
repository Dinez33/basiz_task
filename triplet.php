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
                    <h6 class="m-0 font-weight-bold text-primary">Find Triplet</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form name="form" id="form_val" method="post" action="">
                        <div class="text-center" style="background: #e7f957;color: #000;"></div>
                        <div class="form-group row input_fields_wrap">
                            <div class="col-sm-6 mb-3 form-group">
                                <lable>Array value</lable>
                                <input type="text" class="form-control form-control-user" name="number" id="number"
                                    placeholder="ex.1, 32, 21, 4, 8" required>
                            </div> 
                            <div class="col-sm-6 mb-3 ">
                               <lable>Sum Value</lable>
                                <input type="number" class="form-control form-control-user" name="value" id="value"
                                    placeholder="Enter Sum Value" required>
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
    $number = $_POST['number'];
    $value = $_POST['value'];
    
    function getNumbers($string) {
        $string = preg_replace("/[\s]/","",$string); 
        $n = explode(",", $string); 
        return $n;
    }

    $numbers=array_unique(getNumbers($number));
    $count = count($numbers);
    
    for ($i = 0; 
         $i < $count - 2; $i++)
    {
    for ($j = $i + 1; 
         $j < $count - 1; $j++)
    {
        for ($k = $j + 1; 
             $k < $count; $k++)
        {
            if ($numbers[$i] + $numbers[$j] + $numbers[$k] == $value)
            {
                // $result = array($numbers[$i], $numbers[$j], $numbers[$k]);
                echo "Triplet is", " ", $numbers[$i],
                                  ", ", $numbers[$j], 
                                  ", ", $numbers[$k];
                return true;
            }else{
                $result ="no triplet in given array";
            }
        }
    }
    }

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
                
                <p><?php echo $result; ?></p>

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