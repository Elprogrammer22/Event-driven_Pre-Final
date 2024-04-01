

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./assets/js/search.js"></script>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/logo.png" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="h2 mt-3">Registration</p>
        <p>You can add record for student here.</p>
        <div class="card mt-3">

            <form action="./models/save.php" method="POST">
                <div class="card-header">Registration Form</div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['success'])) {
                        ?>Congrats. Thank you!
                        <div class="alert alert-success">
                            <b>New Student Added.</b>. 
                        </div>
                        <hr>
                        <?php
                    } elseif (isset($_GET['invalid'])) {
                        ?>
                        <div class="alert alert-danger">
                            <b>Existed Learning Reference Number</b>. Please try another. Thank you.
                        </div>
                        <hr>
                        <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <label> Student ID : <b class="text-danger">*</b></label>
                            <input name="inp_sid" required type="text" placeholder="Enter student ID here.."
                                class="form-control mt-2">
                        </div>
                        <div class="col-md-6">
                            <label> Learning Reference Number(LRN): <b class="text-danger">*</b></label>
                            <input name="inp_lrn" required type="text" placeholder="Enter LRN here.."
                                class="form-control mt-2">
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label>First Name : <b class="text-danger">*</b></label>
                            <input name="inp_fname" required type="text" placeholder="Enter first name here.."
                                class="form-control mt-2">
                        </div>
                        <div class="col-md-4">
                            <label>Last Name : <b class="text-danger">*</b></label>
                            <input name="inp_lname" required type="text" placeholder="Enter last name here.."
                                class="form-control mt-2">
                        </div>
                        <div class="col-md-3">
                        <label>Middle Name : <small>(Optional)</small></label>
                            <input name="inp_mname" type="text" placeholder="Enter middle name here.."
                                class="form-control mt-2">
                            
                        </div>
                        <div class="col-md-2">
                        <label>Ext. Name : <small>(Optional)</small></label>
                            <input name="inp_ename" type="text" placeholder="Ext. name here.."
                                class="form-control mt-2">
                           
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label>Gender : <b class="text-danger">*</b></label>
                            <select name="inp_gender" required class="form-control mt-2">
                                <option value="" disabled selected>-- SELECT GENDER --</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Contact Number : <b class="text-danger">*</b></label>
                            <input name="inp_contact" required type="text" placeholder="09 XXXX XXXX"
                                class="form-control mt-2">
                        </div>
                        <div class="col-md-3">
                            <label>Email Address : <b class="text-danger">*</b></label>
                            <input name="inp_email" required type="email" placeholder="Email Address"
                                class="form-control mt-2">
                        </div>
                        <div class="col-md-2">
                            <label>Status : <small>(Optional)</small></label>
                            <input name="inp_status" type="text" placeholder="Enter the student status here.."
                                class="form-control mt-2">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <span style="float: right">
                        <button class="btn btn-success">
                            Add New Student
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>