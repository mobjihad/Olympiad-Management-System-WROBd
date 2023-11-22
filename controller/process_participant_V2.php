<?php 

class addParticipant{


    private $newUser ; 
    private $raw_password ; 
    private $encrypted_password ; 
    public  $userName_dup ; 
    public  $user_add_success ; 
    private $storagePath = "../data/jsondata.json" ; 
    private $allUser ; 
    public $firstnameError ; 
    public $lastnameError ;
    public $emailError ; 
    public $passwordError;
    public $genderError ;
    public $divisionError ;
    public $pnoError ;
    public $enoError ;  
    public $imageError; 
    public $institutionError ="";


    public function __construct($username , $password){

        $this-> newUser = $username ; 
        $this-> raw_password  = $password; 

        $raw_password = trim($raw_password) ; 
        $raw_password = filter_var($raw_password , FILTER_SANITIZE_STRING) ;
        $encrypted_password = password_hash($raw_password, PASSWORD_DEFAULT) ;
        $this-> allUser = json_decode((file_get_contents($this->storagePath)),true);
        
        this->addUser();
        
       

    }

    public function checkUserName(){
           
           foreach($this-> $allUser as $user){
               if($this->$username == $user['email']){

                  $userName_dup = "Email Already Exist" ; 
                  return true;
               }else {

                return FALSE ; 
               }
               
           }


    }

    public function addUser(){

 if(checkUserName()==false){ 
        if (isset($_REQUEST["submit_button"])) {
            if (empty($_REQUEST["first_name"])) {
                $firstnameError = "First name cannot be empty";
            } elseif (strlen($_REQUEST["first_name"]) < 2) {
                $firstnameError = "First name cannot be less than 2 charecters";
            } else {
                $firstnameError = "First name is " . $_REQUEST["first_name"];
            }
            if (empty($_REQUEST["last_name"])) {
                $lastnameError = "Last name cannot be empty";
            } elseif (strlen($_REQUEST["last_name"]) < 2) {
                $lastnameError = "Last name cannot be less than 2 charecters";
            } else {
                $lastnameError = "Last name is " . $_REQUEST["last_name"];
            }
        
            if (!empty($_REQUEST["email"])) {
                if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["email"])) {
                    $emailError = "Please enter a valid email address";
                } else {
                    $emailError = "Your email is " . $_REQUEST["email"];
                }
            } else {
                $emailError = "Email address cannot be empty";
            }
        
            if (!empty($_REQUEST["password"])) {
                if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]
                {6,15}$/', $_REQUEST["password"])) {
                    $passwordError = "Password must contain 6 characters of letters, numbers and at least one special character.";
                }
            } else{
                $passwordError = "Password cannot be empty.";
            }
            
        
            if (empty($_REQUEST["gender"])) {
                $genderError = "<br>Please select a Gender .";
            } else {
                $genderError = "Your Gender is " . $_REQUEST["gender"];
            }
            if (empty($_REQUEST["institution"])) {
                $institutionError="Please enter your institution name.";
            }
            else{
                $institutionError = "Your institution name is " .$_REQUEST["institution"];
            }
            if (empty($_REQUEST["division"])) {
                $divisionError = "Please select a division.";
            } else {
                $divisionError = "You are from " . $_REQUEST["division"];
            }
            if (!empty($_REQUEST["pno"])) {
                if (!preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/", $_REQUEST["pno"])) {
                    $pnoError = "Please enter a valid phone number";
                } else {
                    $pnoError = "Your Number is " . $_REQUEST["pno"];
                }
            }
            else{
                $pnoError ="Please enter your Personal contact.";
            }
            if (!empty($_REQUEST["eno"])) {
                if (!preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/", $_REQUEST["eno"])) {
                    $enoError = "Please enter a valid phone number";
                } 
                else {
                    $enoError = "Your Number is " . $_REQUEST["eno"];
                }
            }else{
                $enoError = "Please enter your Emergency contact .";
            }
            if(empty($_FILES["image"]["name"]))
        {
            $imageError = "Enter a file";
        }
        else{
            $image = $_FILES['image']['name'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp_name,'../uploads/'.$_REQUEST["email"] . ".jpg");
        }
        
        $Image_Name = '../uploads/'.$_REQUEST["email"] . ".jpg" ; 
        $existingdata=file_get_contents("../data/jsondata.json");
        $phpdata=json_decode($existingdata);
            $formdata=array(
                "fname"=>$_REQUEST["first_name"],
                "lname"=>$_REQUEST["last_name"],
                "email"=>$_REQUEST["email"],
                "password"=>$_REQUEST["password"],
                "DOB"=>$_REQUEST["bdate"],
                "gender"=>$_REQUEST["gender"],
                "institution"=>$_REQUEST["institution"],
                "division"=>$_REQUEST["division"],
                "pno"=>$_REQUEST["pno"],
                "eno"=>$_REQUEST["eno"],
                "file"=>$Image_Name,
            );
            $phpdata[]=$formdata;
        
            $jsondata=json_encode($phpdata,JSON_PRITTY_PRINT);
        
        if(file_put_contents("../data/jsondata.json",$jsondata))
        {
            echo "file written successfully";
        }
        else{
            echo "file written failed";
        }
        }


            


    }



    }


}

?>
