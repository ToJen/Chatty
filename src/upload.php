

<?php

/*
  CS3715 FINAL PROJECT
  MEMBERS: KELWIN JOANES, OLUWATOMISIN JENROLA, SAAHIL BUDHRANI
  DATE SUBMITTED: 29/03/16
  WEB APP NAME: CHATTY
 */

    // start session
    session_start();

    // get username from session array
    $user = $_SESSION['uName'];

      // match and return image's extension
    function GetImageExtension($imagetype) {
        if(empty($imagetype)) return false;
        switch($imagetype)
        {
            case 'image/bmp': return '.bmp';
            case 'image/gif': return '.gif';
            case 'image/jpeg': return '.jpg';
            case 'image/png': return '.png';
            default: return false;
        }
    }
      
      // if file is available for upload, then transfer file to server
      if (!empty($_FILES["fileToUpload"]["name"])) {
        // retrieve file name
          $file_name = $_FILES["fileToUpload"]["name"];
          // file temp name
           $temp_name = $_FILES["fileToUpload"]["tmp_name"];
          // retrieve image mime type
          $imgtype = $_FILES["fileToUpload"]["type"];
          // retreive image extension
          $ext =  GetImageExtension($imgtype);
          // set image's name as the current date and time and append the extension
          $imagename = date("d-m-Y")."-".time().$ext;

          // store the current path of the uploaded image
          $target_path = "uploads/".$imagename;

          $date = date("Y-m-d");

          // finally, transfer the file to the server
          move_uploaded_file($temp_name, $target_path);
      }

      // append current username with img tag pointing to uploaded image 
      $img = "<span class=\"user\">$user: </span><img src=\"" . $target_path ."\" height=\"200px\" >\n"; 

      // location of chat log file
      $src = "data/log.txt";

      // append the string to the chat log file
      file_put_contents($src, $img, FILE_APPEND);

      // retrieve all lines of text from the file
      $history = file($src);

      // echo each line as a paragraph
      foreach($history as $msg)
        echo "<p>$msg</p>";    

?>

