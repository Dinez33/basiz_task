<?php
    include('db.php');

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $standard = $_POST['standard'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $father_name = $_POST['father_name'];
    $father_mobile = $_POST['father_mobile'];
    
    $data = " name = '$name' ";
    $data .= ", gender = '$gender' ";
    $data .= ", standard = '$standard' ";
    $data .= ", dob = '$dob' ";
    $data .= ", age = '$age' ";
    $data .= ", email = '$email' ";
    $data .= ", father_name = '$father_name' ";
    $data .= ", father_mobile = '$father_mobile' ";
    $save = $conn->query("INSERT INTO student_details set ".$data); 
    
		