<?php
$data = array(
    'postal_regCode' => "'" . $_POST['inp_region'] . "'",
    'postal_provCode' => "'" . $_POST['inp_province'] . "'",
    'postal_citymunCode' => "'" . $_POST['inp_ctymun'] . "'",
    'postal_code' => "'" . $_POST['inp_posCode'] . "'"
);

save($data);

function save($data)
{
    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO ph_postalcode (postal_regCode, postal_provCode, postal_citymunCode, postal_code) VALUES ($values)";


    if($conn->query($query) === TRUE){
        header('location: ../postal_code.php?success');
    }else{
        header('location: ../postal_code.php?invalid');
    }

    $conn->close();
}
 