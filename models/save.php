<?php

$registration = array(
    's_LRN' => "'" . $_POST['inp_lrn'] . "'",
    's_student_id' => "'" . $_POST['inp_sid'] . "'",
    's_first_name' => "'" . $_POST['inp_fname'] . "'",
    's_middle_name' => "'" . $_POST['inp_mname'] . "'",
    's_last_name' => "'" . $_POST['inp_lname'] . "'",
    's_extension_name' => "'" . $_POST['inp_ename'] . "'",
    's_sex	' => "'" . $_POST['inp_gender'] . "'",
    's_status' => "'" . $_POST['inp_contact'] . "'",
    's_contact_no' => "'" . $_POST['inp_email'] . "'",
    's_email' => "'" . $_POST['inp_status'] . "'",
);



save($registration);

function save($data)
{
    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO std_students ($attributes) VALUES ($values)";

    if($conn->query($query) === TRUE){
        header('location: /registration.php?success');
    }else{
        header('location: /registration.php?invalid');
    }

    $conn->close();
}
 