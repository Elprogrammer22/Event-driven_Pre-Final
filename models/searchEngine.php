<?php

include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM std_students WHERE ( s_student_id LIKE '%$value%' OR s_last_name LIKE '%$value%')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align: center;"><?= $row['s_student_id'] ?><br></td>
            <td><?= $row['s_last_name'] ?><br></td>
            <td>
            <button type="button" class="btn btn-sm btn-block btn-success" data-bs-toggle="modal" data-bs-target="#myModal">View</button>
            </td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>