<!DOCTYPE html>
<?php
require_once "action/db_connect.php";

$sql = "SELECT * FROM library";
$result = mysqli_query($conn, $sql);
$body = "";
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);// mysqli_fetch_assoc()
if (mysqli_num_rows($result) == 0) {
    $body = "No results";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $body .= "<div class='card' style='width: 22rem; margin: 5% 0 5% 5%; text-align: center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);'>
  <div class='card-body'>
  <img class='card-img' src='pictures/" . $row['photo'] . "'>
    <h4 class='card-title' style='margin-top:4%'>{$row["title"]}</h4>
    <p class='card-text'>{$row["type"]}</p>
    <a href='details.php?id={$row["id"]}' class='btn btn-primary' style='width: 75%; margin-bottom: 10px'>Show details</a>
    <a href='update.php?id={$row["id"]}' class='btn btn-success'>Update</a>
    <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
  </div>
</div>";
    }
}

mysqli_close($conn);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Library</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        

        .card-img {
            width: 300px !important;
            height: 300px !important;
        }
        .card-text{
            text-transform: uppercase;
            color: red;
        }
        .hero-img{
            width:100%;
            size:cover;
        }
        #find-id{
            text-align: center;
            margin-top: 2%;
            font-size:2.5rem;
        }
        a {
            text-decoration: none !important;
        }
        @media (max-width: 780px) {
    .heroh {
      display: none;
    }
    #find-id {
        font-size: 1rem;
    }
    
}
       
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 30px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BigLibrary</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="create.php">Add to Library</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class=" text-center align-items-center" style="width:100%">
<img src="pictures/hero.jpg" alt="" class="hero-img">
<h1 class="heroh" style="color:white;position: absolute; top: 40%; left: 25%; font-size:6rem">Welcome to our Library</h1>
  </div>
    <div class="container">
        <h3 id="find-id">Find you favorite book, movie or music: </h3>
        <div class="row rows-col-lg-4 rows-col-md-2 rows-col-sm-1">
            <?= $body ?>
        </div>
        <div class='mb-3'>
                <a href= "create.php"><button class='mediabtn btn btn-success d-flex 'type="button" style="width:20%; justify-content:center; margin:auto" >ADD TO LIBRARY</button></a>
            </div>
    </div>
    <footer class="text-center" style="margin-top: 3%;">

<div class="text-center text-light p-3" style="background-color: #212529;">
    © 2020 Copyright:
    <a class="text-light" href="">Islam Saleh Big Library</a>
</div>

</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>