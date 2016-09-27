<?php
	include ("generique.php");
	
	class compte extends generique{
		
		//variable
		private $id_utilisateur;
		private $pseudo_utilisateur;
		private $mdp_utilisateur;
		
		//constructeur
		public function __construct($id_utilisateur, $pseudo_utilisateur, $mdp_utilisateur){
			
			$this->id_utilisateur = $id_utilisateur;
			$this->pseudo_utilisateur = $pseudo_utilisateur;
			$this->mdp_utilisateur = $mdp_utilisateur;
		}
		
		//destructeur
		public function __destruct(){
			
			unset($id_utilisateur);
			unset($pseudo_utilisateur);
			unset($mdp_utilisateur);
		}
		//set
		public set_id_utilisateur($id_utilisateur){
			
			$this->id_utilisateur = $id_utilisateur;
		}
		
		public set_pseudo_utilisateur($pseudo_utilisateur){
			
			$this->pseudo_utilisateur = $pseudo_utilisateur;
		}
		
		public set_mdp_utilisateur($mdp_utilisateur){
			
			$this->mdp_utilisateur = $mdp_utilisateur;
		}
		
		//get
		public get_id_utilisateur(){
			
			return ($this->id_utilisateur);
		}
		
		public get_pseudo_utilisateur(){
			
			return ($this->pseudo_utilisateur);
		}
		
		public get_mdp_utilisateur(){
			
			return ($this->mdp_utilisateur);
		}
		
	}
?>