<?php
    include('db.php');
    include('header.php');
?>
<!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Students</h1>
</div>

<!-- Content Row -->
<div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form name="form" id="form_val" method="post">
                        <div class="text-center" style="background: #e7f957;color: #000;"></div>
                        <div class="form-group row input_fields_wrap">
                            <div class="col-sm-6 mb-3 form-group">
                                <input type="text" class="form-control form-control-user" name="name" id="name"
                                    placeholder="Student Name" required>
                            </div> 
                            <div class="col-sm-6 mb-3 ">
                                  <select name="gender" class="form-control custom-select browser-default" required>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                      <option value="others">others</option>
                                  </select>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" name="standard" id="standard"
                                    placeholder="Standard" required>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="email" class="form-control form-control-user" name="email" id="email"
                                    placeholder="Enter Your Email" required>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="date" class="form-control form-control-user" name="dob" id="dob"
                                    placeholder="Date of Birth" required>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" name="age" id="age"
                                    placeholder="Age"  readonly>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" name="father_name" id="father_name"
                                    placeholder="Father Name" required>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <input type="number" class="form-control form-control-user" name="father_mobile" id="father_mobile"
                                    placeholder="Father Mobile" required>
                            </div>
                        </div>
                        
                        
                        <input type="submit" style="border-radius:2rem;" class="btn btn-primary btn-user btn-block w-auto" name="submit" value="Add Student">
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
                <h6 class="m-0 font-weight-bold text-primary">Student Overview</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">S.No</th>
                                <th class="text-center">Student Name</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Standard</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">D.O.B</th>
                                <th class="text-center">Age</th>
                                <th class="text-center">Father Name</th>
                                <th class="text-center">Father Mobile</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
								$i = 1;
								$student_details  = $conn->query("SELECT * FROM student_details order by id asc");
                                foreach ($student_details as $student_detail) {  ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?>.</td>
                                    <td class="text-center"><?php echo $student_detail['name']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['gender']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['standard']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['email']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['dob']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['age']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['father_name']; ?></td>
                                    <td class="text-center"><?php echo $student_detail['father_mobile']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    <script>
        $(document).ready(function() {
            $('input[name="dob"]').on('change',function() {
                var dob = new Date($(this).val());
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('input[name="age"]').val(age);
            })
        });
    </script>                                    
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/jquery/jquery.validate.js"></script>
    <script>
        jQuery.validator.setDefaults({
            submitHandler: function(){
                $.ajax({
                    type : "POST",
                    url : "process.php",
                    data : $('#form_val').serialize(),
                    success : function (data) {
                        $('#form_val input[name=name]').val('');
                        $('#form_val input[name=dob]').val('');
                        $('#form_val input[name=standard]').val('');
                        $('#form_val input[name=email]').val('');
                        $('#form_val input[name=father_name]').val('');
                        $('#form_val input[name=father_mobile]').val('');
                        $('#form_val input[name=age]').val('');
                        $("#dataTable").load(window.location + " #dataTable");
                        
                    }
                });
            }
        });

        $("#form_val").validate({
            rules:{
                name: "required",
                dob:{
                    required:true,
                    date:true
                },
                standard: "required",
                father_name:"required",
                father_mobile:{
                    required:true,
                    digits:true,
                    maxlength:10,
                    minlength:10
                },
                email:{
                    required:true,
                    email:true
                }
            },
            messages:{
                name: "Please Enter Your Name",
                dob: {
                    required:"Please Enter Your D.O.B",
                    date:"Please Enter currect Date"
                },
                standard:"Please Enter standard",
                father_name:"Please Enter Father Name",
                father_mobile:{
                    required:"Please Enter Mobile No",
                    digits:"Please Enter Numeric Value",
                    maxlength:"Please Enter 10 digits",
                    minlength:"Please Enter 10 digits"
                },
                email: {
                    required:"Please Enter Your Email",
                    email:"Please Enter Valid Email"
                }
            }
        });
      
    </script>

    


<?php include('footer.php') ?>