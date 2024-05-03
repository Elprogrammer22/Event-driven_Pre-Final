<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="./assets/js/search.js"></script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="javascript:void(0)">
  <img src="./assets/img/Tcc-Logo.png" height="30"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active"> 
          <a class="nav-link" href="#dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registration.php">Registration</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class= "form-control me-2" onkeyup="search(this.value)" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
      </div>
  </div>
</nav>

<body>
<div class="container padding:2px">
  <p class= "h2 mt-3">Dashboard</p>
  <p>You can view all the Records here</p>
  <div class= "card mt-2">
  <div class="card-body">
    <div class="row">
    <table class= "table table-bordered table-hover">
      <thead >
        <tr>
          <th width= "150" style="text-align: center">Student ID</th>
          <th style = "text-align: left; padding-left: 10px" >Student Name</th>
          <th width= "50" style= "text-align:center">Action</th>
        </tr>
      </thead>
      <tbody id="results">
      </tbody>
     </table>
    </div>
    </div>
    <div class= "card-footer">
      ---
     </div>
  </div>
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Modal header</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        Modal body..
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>