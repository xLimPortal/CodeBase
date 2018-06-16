<?php

 abstract class lm_BaseUser_class
 {
     protected $firstname;
     protected $lastname;
     protected $idnumber;
     protected $phonenumber;
     protected $email;
     protected $postaladdress;
     protected $residentialaddress;
     protected $dateofbirth;
     protected $status;
     protected $othername;
     protected $initials;
     protected $username;
     protected $password;

     public function __get($property) {
	  if (property_exists($this, $property)) {
	      return $this->property;
	    }
	  }

	 public function __set($property, $value) {
	    if (property_exists($this, $property)) {
	      $this->property = $value;
	    }

	    return $this;
	  }

	 function generateSalt($max = 64) {
         $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
         $i = 0;
         $salt = "";
        while ($i < $max) {
          $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
          $i++;
          }
          return $salt;
     }
         
         public function hashed_password(){
          $salt_hash = generateSalt();
         $combo = $salt_hash . $password;
         $hashed_password = hash('sha512', $combo);

         return $hashed_password;
         }
        

 }

?>