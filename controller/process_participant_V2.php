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
        
       

    }

    public function checkUserName(){
           
           foreach($this-> $allUser as $user){
               if($this->$username == $user['email']){

                  $userName_dup = "Email Already Exist" ; 
               }else {

                return FALSE ; 
               }
               
           }


    }

    public function addUser(){




            


    }






}

?>
