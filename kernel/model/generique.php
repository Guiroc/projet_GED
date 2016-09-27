<?php
	
	abstract class generique{
		
		//variable
		protected $table;
		protected $pk;
		
		public function __construct(){
		
			$this->table="";
			$thid->pk="";
		}
		
		//connexion base
		protected function connexion(){
		
			$adresse="localhost";
			$identifiant="";//"postgres" pour phppgadmin et "mysql" pour phpmyadmin
			$mdp="";
			$base="";
		
			try{
				$connexion=new PDO('pgsql:host='.$adresse.';dbname='.$base,$identifiant,$mdp);
			}
			catch (PDOException $e){
				
				die();
			}
			return($connexion);
		}
		
		protected function create(){
			
			
		}
		
		protected function read(){
			
			
		}
		
		protected function update(){
			
			
		}
		
		protected function delete(){
			
		}
	}
?>