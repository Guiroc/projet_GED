<?php
	include ("generique.php");
	
	class modification extends generique{
		
		//variable
		private $id_consultation;
		private $date_consultation;
		
		//constructeur
		public function __construct($id_consultation, $date_consultation){
			
			$this->id_consultation = $id_consultation;
			$this->date_consultation = $date_consultation;
		}
		
		//destructeur
		public function __destruct(){
			
			unset($id_consultation);
			unset($date_consultation);
		}
		
		//set
		public function set_id_consultation(){
			
			$this->id_consultation = $id_consultation;
		}
		
		public function set_date_consultation(){
			
			$this->date_consultation = $date_consultation;
		}
		
		//get
		public function get_id_consultation($id_consultation){
			
			return($id_consultation);
		}
		
		public function get_date_consultation($date_consultation){
			
			return($date_consultation);
		}
	}
?>