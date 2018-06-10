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

 }

?>