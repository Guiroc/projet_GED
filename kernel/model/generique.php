<?php
	
	abstract class generique{
		
		//variable
		protected $table;
		protected $pk;
		
		public function __construct(){
		
			$this->table="";
			$this->pk="";
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
				echo $e;
				die();
			}
			return($connexion);
		}
		
		protected function create(){
			
			
		}
		
		protected function read($id){
			$req="SELECT * FROM {$this->table} where {$this->pk}={$id}";
			//echo $sql;
			$connexion=$this->connexion();
			$sql=$connexion->query($req);
			$res=$sql->fetch();
		}
		
		protected function update(){
			
			
		}
		
		protected function delete($id){
			$req="DELETE FROM {$this->table} where {$this->pk}={$id}";
			//echo $sql;
			$connexion=$this->connexion();
			$sql=$connexion->exec($req);
			
			
		}
	}
?>