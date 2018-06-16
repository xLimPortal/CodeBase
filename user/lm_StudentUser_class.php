<?php

  class lm_BaseUser_class extends lm_BaseUser_class
 {
     
        protected $grade;
        protected $studentnumber;
        protected $numberofsubjects;
        protected $subjects[];
        protected $marks;
        protected $averagemarks;
        // this will be a notice directed to an individual student by a teacher or a principal
        protected $notice;

        // this will update each an every term dipicting the students feedback on academic perfomance
        protected $academicstanding;


   // adding subject to an array that will later dump to a database
   //it first validates if the subject has been added or not ,if it is added it will return "Subject exists" else it will return success 
    private selectsubject($subjectname,$index){

      for ($i=0; $i < $numberofsubjects; $i++) { 

          if ($subjects[$i] == $subjectname) {
             return "Subject exist";
          }

      }
      if (isset($subjects[$index])) {
         $index = $index + 1;
      }
     
        $subjects[$index] = $subjectname;
         return "success"

    }
   

   // a method that determines the academic standing of the student
    private academicstanding($average)
    {
      if ($average <= 30) {
        $value = "Danger attention is required student is not doing well" ;
        __set($academicstanding,$value)
      }
    if ($average >= 31 && $average <=40) {
        $value = "Attention is required";
        __set($academicstanding,$value)
      }
      if ($average >= 41 && $average < 50) {
        $value = "Put more effot";
        __set($academicstanding,$value)
      }
      if ($average >= 51 && $average )  {
        $value = "Danger attention is required";
        __set($academicstanding,$value)
      }
    }

    
    // this function takes an array of marks and return the average
    private calculateaveragemarks($marks[])
    {
        $total = 0;
        $average = 0;
        $index = 0;
      foreach ($marks as $key => $value) {
          $total = $total + $value;
          $index = $index + 1;
      }
      $average = $total / $index;
      return $average;
    }

   // a method that capture two variables and return a string
    // it adds marks of the student to his table
    private entermarks($subjectname,$marks)
    {
       $exe_status = "Failed"; 
      if(isset($subjectname) || isset($marks))
      {
         /** here goes the code which needs to execute when the subject name and marks are valid else the function should exit with an error code**/
      }
    }

    // public getter for all the variables of the class
    public function __get($property) {
      if (property_exists($this, $property)) {
          return $this->property;
        }
      }

    // public setter for all the variables in the class
     public function __set($property, $value) {
        if (property_exists($this, $property)) {
          $this->property = $value;
        }

        return $this;
      }
 }

?>