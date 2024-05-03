<?php
include ('../config/database.php');

if (isset($_POST["type"])) {
    $type = $_POST["type"];
    $code = $_POST["post_code"];

    if ($type == "region") {
        getprovince($code);

    } elseif ($type == "province") {
        getcitymun($code);
       
    }  elseif ($type == "baranggay") {
        getbaranggy($code);
       
       
    }
}
function getprovince($regCode)
{
    include('../config/database.php');
    
    $sql = "SELECT * FROM `ph_province` WHERE regCode='$regCode'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?= $row['provCode'] ?>"><?= $row['provDesc'] ?></option>
            <?php
        }
    } else {
        echo "0 result";
    }
    $conn->close();
}

function getcitymun($provCode)
{
    include('../config/database.php');
    
    $sql = "SELECT * FROM `ph_citymun` WHERE provCode='$provCode'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?= $row['citymunCode'] ?>"><?= $row['citymunDesc'] ?></option>
            <?php
        }
    } else {
        echo "0 result";
    }
    $conn->close();
}


function getbaranggy($citymunCode)
{
    include('../config/database.php');
    
    $sql = "SELECT * FROM `ph_brgy` WHERE citymunCode='$citymunCode'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?= $row['brgyCode'] ?>"><?= $row['brgyDesc'] ?></option>
            <?php
        }
    } else {
        echo "0 result";
    }
    $conn->close();
}

?>
