<?php

if(isset($_POST['submit'])){

        $Username = $_POST['uname'];
        $password = $_POST['password'];


    $data = file_get_contents('../data/jsondata.json');
    
    $parsed_data = json_decode($data,true);

   $uStatus = FALSE ; 
    foreach ($parsed_data as $entry) {
        // Access array elements using square brackets
       // echo $entry['email'] . " " . $entry['password'] . "</br>";
        if(($entry['email'])==$Username && ($entry['password'])==$password){

            $uStatus = TRUE ; 
            break; 
        }
    
    }

  
   
    
if($uStatus==TRUE){

    echo "Success" ; 
}else {

    echo "Error" ; 
}
    


}

?>

