






<?php


if(    isset(  $_FILES['avatar'] )   ) {
    $path= "uploads/".  $_FILES['avatar']['name'];
    
   if(move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
       echo "File successfully uploaded! <br>";

        echo" <img src='$path' width='40%'>";

   } else {
       echo '<p>Something went wrong! </p> <br> <br>';
   }



    // // Testing
    // foreach($_FILES['avatar'] as $name => $value ){
    // echo " $name  :  $value  <br>";
    // }






}


?>
