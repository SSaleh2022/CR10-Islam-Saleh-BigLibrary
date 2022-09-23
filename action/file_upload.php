<?php
function file_upload($photo) {
    $result = new stdClass();//this object will carry status from file upload
    $result->fileName = 'product.png';
    $result->error = 1;//it could also be a boolean true/false
    //collect data from object $picture
    $fileName = $photo["name"];
    $fileType = $photo["type"];
    $fileTmpName = $photo["tmp_name"];
    $fileError = $photo["error"];
    $fileSize = $photo["size"];
    $fileExtension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));    
    $filesAllowed = ["png", "jpg", "jpeg"];
    if ($fileError == 4) {       
        $result->ErrorMessage = "No picture was chosen. It can always be updated later.";
        return $result;
    } else {
        if (in_array($fileExtension, $filesAllowed)) {
            if ($fileError == 0) {
                if ($fileSize < 5000000) { 
                    $fileNewName = uniqid('') . "." . $fileExtension; 
                    $destination = "../pictures/$fileNewName";
                    if (move_uploaded_file($fileTmpName, $destination)) {
                        $result->error = 0;
                        $result->fileName = $fileNewName;
                        return $result;
                    } else {    
                        $result->ErrorMessage = "There was an error.";
                        return $result;
                    }
                } else {                                      
                    $result->ErrorMessage = "Exceeded file size.";
                    return $result;
                }
            } else {                              
                $result->ErrorMessage = "There was an error uploading - $fileError code. Check the PHP documentation.";
                return $result;
            }
        } else {                      
            $result->ErrorMessage = "This file type can't be uploaded.";
            return $result;
        }
    }
}