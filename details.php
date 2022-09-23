<?php


require_once "action/db_connect.php";

$id = $_GET['id'];
$sql = "SELECT * FROM Library WHERE id = {$id}";
// var_dump($sql);
$result = mysqli_query($conn, $sql);
$body="";



if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $body .= "
        
        <div class='row text-center justify-content-center' style='background-color:beige'>
            <div class='col-12 '>
                <h1 style='color:green; margin:5% auto 2%'>
                
                  ".$row['title']."
                </h1>
                <div>
                    <img style='width:300px; height:350px' src='./pictures/".$row['photo']."' >
      
                </div>
            </div>
            <div class='col-6 '>
                <p style='margin:5% auto 4% auto'>
                
                     ".$row['short_description']."
                </p>
            </div>
            <div class='col-12 '>
                <p class='dit'> 
                    ISBN/EAN: ".$row['isbnean']."
                </p>
                <p class='dit'>  
                    Autor: ".$row['autor_first_name']."
                     ".$row['autor_last_name']."
                </p>
                
                <p class='dit'> 
                   Availability:  ".$row['availability']."
                </p>
            </div>
            <div class='col-12 '>
                <p class='dit'> <a class='eddt' href='publisher.php?publisher_name=".$row['publisher_name']."'>
                    Publisher: ".$row['publisher_name']."</a>
                </p>
                <p class='dit'> 
                    Country: ".$row['publisher_addres']."
                </p>
                <p class='dit'> 
                  Published: ".$row['publisher_date']."
                </p>
            </div>
            <div class='col-12' style='margin-bottom:5%'>
            <a href='update.php?id=".$row['id']."'><button class='btn btn-primary' type='button'>Edit</button></a>
            <a href='delete.php?id=".$row['id']."'><button class='btn btn-danger' type='button'>Delete</button></a>
            <a href='index.php'><button class='btn btn-warning' type='button'>Back to Home</button></a>

            </div>
        </div>
        
        
        
        ";
    };
}else {
    $body="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    
    ";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body class="bbc">
    
  <?php require_once 'components/boot.php' ?>
      <div class="container">   
        <?php  
           echo $body;
        ?>   
      </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
