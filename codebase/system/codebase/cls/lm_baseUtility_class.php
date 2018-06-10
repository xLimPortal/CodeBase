<?php
	class lm_baseUtility_class{
		/********************************************************************************************************
		The utility class creates the base utility stack that will act as a helper object to the system functionality.
		*********************************************************************************************************/
		
		/*the class propery methods*/
		protected $webName;
		protected $defaultMail;
		protected $defualContact;
		protected $defaulHostName;
		protected $defaultDomain;
		protected $systemStatus;

		/*this is a default contract*/
		public _construst(){
			
		}

		public _contruct($webName, $defaultMail, $defualContact){
			if($this->systemStatus == 1){
				$this->webName 			= $webName;
				$this->defaultMail 		= $defaultMail;
				$this->defualContact	= $defualContact;
			}else{
				return "Error: The system is not active";
			}
			return "Error: the system is set up"
		}

		private createSysMail($defaulDomain, $defualtHost){
		
		}

		private createMail(){

		}

		public _destruct(){

		}
	}

?>