<?php
require_once 'db_connect.php';
require_once 'file_upload.php';
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

if ($_POST) {   
    $title = $_POST['title'];
    $isbn = $_POST['isbnean'];
    $type= $_POST['type'];
    $firstname = $_POST['autor_first_name'];
    $lastname = $_POST['autor_last_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddres = $_POST['publisher_addres'];
    $publisherdate = $_POST['publisher_date'];
    $availability = $_POST['availability'];
    $shortdescription = $_POST['short_description'];
    $uploadError = '';
    
  $photo= file_upload($_FILES['photo']);  
  
  $sql = "INSERT INTO Library (title, photo, isbnean, type, autor_first_name, autor_last_name, publisher_name, publisher_addres, publisher_date, availability, short_description ) VALUES ('$title','$photo->fileName', $isbn, '$type', '$firstname', '$lastname', '$publishername', '$publisheraddres', $publisherdate, '$availability', '$shortdescription' )";

  if (mysqli_query($conn, $sql) === true) {
      $class = "success";
      $message = " 
        <div class='container text-center justify-content-center'>
            <div class='row text-center justify-content-center'>
                <h3 class='col-12 text-danger'>$title</h3>
                

            </div>
      
          <table class='table text-center'><tr>
          <td> $title </td>
          <td> $isbn </td>
          <td> $type </td>
          <td> $firstname </td>
          <td> $lastname </td>
          <td> $publishername </td>
          <td> $publisheraddres </td>
          <td> $publisherdate </td>
          <td> $availability </td>
          <td> $shortdescription </td>
          </tr></table><hr>
        </div>";
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
      header("refresh: 5; url= ../index.php");
  } else {
      $class = "danger";
      $message = "Error while creating record. Try again: <br>" . $conn->error;
      $uploadError = ($photo->error !=0)? $photo->ErrorMessage :'';
  }
  mysqli_close($conn);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <link rel="stylesheet" href="../css/style.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>
    <body>
        <?php require_once '../components/boot.php' ?>
            <div class="row text-center justify-content-center">
                <div class="nsl"></div>
                <div class="col-12 nsl">
                    <h3>You have created</h3>
            </div>
        <div class="container">

            <div class="text-center justify-content-center alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>