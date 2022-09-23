<?php

require_once 'action/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Library WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $photo = $data['photo'];
        $isbn = $data['isbnean'];
        $type= $data['type'];
        $firstname = $data['autor_first_name'];
        $lastname = $data['autor_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddres = $data['publisher_addres'];
        $publisherdate = $data['publisher_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
    } else {
        header("location: error.php");
    }
    mysqli_close($conn);
} else {
   header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title> 
        <link rel="stylesheet" href="css/style.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
        
    </head>
    <body class="bbc">
    
        <?php require_once 'components/boot.php' ?>
        
        <div class="container " style='background-color:beige'>
            <div class="row text-center justify-content-center" style='background-color:beige'>
                <div class="nsl"></div>
                <div class="col-12 nsl">
                    <h1 style="color:green; margin: 5% auto">Update request</h1>
                </div>
                <div class="col-6 nsl">
                    <div>
                        <img style="width:300px; height:400px; margin: 0 auto 10% auto" src='pictures/<?php echo $photo ?>' alt="<?php echo $photo ?>">
                    </div>
                </div>

            </div>
        
        


        <fieldset>
            <form action="action/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark mx-auto" style="width:70%;  ">
                            <tr>
                                <th>Name</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Product Name"  value="<?php echo $title ?>"  /></td>
                            </tr>    
                            <tr>
                                <th>Isbn</th>
                                <td><input class='form-control' type="number" name= "isbnean" placeholder="Price" step="any"   value="<?php echo $isbn ?>"  /></td>
                            </tr>
                            <tr>
                                <th>type</th>
                                <td><input class='form-control' type="text" name="type" placeholder="Type"  value="<?php echo $type ?>"  /></td>
                            </tr> 
                            <tr>
                                <th>autor_first_name</th>
                                <td><input class='form-control' type="text" name="autor_first_name" placeholder="first"   value="<?php echo $firstname ?>"  /></td>
                            </tr>   
                            <tr>
                                <th>autor_last_name</th>
                                <td><input class='form-control' type="text" name="autor_last_name" placeholder="last" value="<?php echo $lastname ?>" /></td>
                            </tr>     
                            <tr>
                                <th>publisher_name</th>
                                <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publishername ?>" /></td>
                            </tr>       
                            <tr>
                                <th>publisher_addres</th>
                                <td><input class='form-control' type="text" name="publisher_addres" placeholder="Publisher Address" value="<?php echo $publisheraddres ?>" /></td>
                            </tr>      
                            <tr>
                                <th>publisher_date</th>
                                <td><input class='form-control' type="number" name="publisher_date" placeholder="Publisher Date" value="<?php echo $publisherdate ?>" /></td>
                            </tr>       
                            <tr>
                                <th>availability</th>
                                <td><input class='form-control' type="text" name="availability" placeholder="Availability" value="<?php echo $availability ?>" /></td>
                            </tr>      
                            <tr>
                                <th>short_description</th>
                                <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" value="<?php echo $shortdescription ?>" /></td>
                            </tr>     
                            <tr>
                                <th>Picture</th>
                                <td><input class='form-control' type="file" name="photo"  /></td>
                            </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" /> 
                        <input type= "hidden" name= "photo" value= "<?php echo $data['photo'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-primary" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset> <br> <br>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
