<?php
	
	/**
	*Generique - class
	*	abstract
	*
	*@constructor : parent::__construct('message','id_message', true);
	*@atribute table
	*@atribute pk
	*@atribute autoIncrement
	*@atribute attTech
	*@see connect()
	*@see create()
	*@see read($id)
	*@see update()
	*@see deleted($id)
	*@see find($condition)
	*@author BERGERON NATHANAEL
	*@date 18/10/2016
	*/
	abstract class Generique{
		
		//initialisation
		protected $table;
		protected $pk;
		protected $autoIncrement;
		protected $attTech=array();
		
		//constructor
		public function __construct($table,$pk,$autoIncrement){
		
			$this->table=$table;
			$this->pk=$pk;
			$this->autoIncrement=$autoIncrement;
			$this->attTech=array('table', 'pk', 'attTech', 'autoIncrement');
		}
		
		/**
		*connect() - create connection to database
		*	protected
		*
		*@function_call $this->connect();
		*@return $pdo or display $e, a PDO exception
		*@see PDO($host,$base,$id,$password)
		*@author BERGERON NATHANAEL
		*@date 18/10/2016
		*/
		protected function connect(){
			$host='localhost';
			$dbname='projetGED';
			$dbid='postgres';
			$dbmdp='pgadmin';
			
			try{
				$pdo = new PDO("pgsql:host=".$host.";dbname=".$dbname,$dbid,$dbmdp);
				echo 'connexion réussie<br/>';
			}catch(PDOException $e){
				echo 'Exception reçue : ',$e->getMessage(),"\n";
				die();
			}
			return $pdo;
		}
		
		/**
		*create - save the current object in database
		*	public
		*
		*@function_call $object->create();
		*@see in_array($att1,$att2)
		*@see substr($string,$nb1,$nb2)
		*@see connect()
		*@see query($sql)
		*@author BERGERON NATHANAEL
		*@date 18/10/2016
		*/
		public function create(){
			$property="";
			$val="";
			if($this->autoIncrement && !in_array($this->pk, $this->attTech)){
				$this->attTech[]=$this->pk;
			}
			//print_r($this);
			foreach($this as $key=>$value){
					if(!in_array($key, $this->attTech) && $value!=''){
							$property=$property."$key ,";
							$val=$val."'$value' ,";
					}
						
			}
			$property=substr($property, 0, -1);
			$val=substr($val, 0, -1);
			$req="INSERT INTO {$this->table} ($property) VALUES ($val);";
			echo $req;
			$connexion=$this->connect() or die('Erreur SQL, requete invalide! <br/>'.$req.'<br/>Checker la requete, et les parametress de connexion!');
			$sql=$connexion->query($req);
			$connexion=null;
		}
		
		/**
		*read - fill the current object with database's data
		*	public
		*
		*@function_call $object->read(1);
		*@param $id id of the record we want to read
		*@see connect()
		*@see query($sql)
		*@see fetch($option)
		*@author BERGERON NATHANAEL
		*@date 18/10/2016
		*/
		public function read($id){
			$chaine;
			if(is_array($id)){
				foreach($id as $key=>val){
					$chaine=$chaine." {$this->pk}={$id} and";
				}
				$chaine=substr($chaine,0,-4);
			}else{
					$chaine=$chaine." {$this->pk}={$id}";
				}
			$req = "select * from {$this->table} where $chaine";
			//echo $req;
			$connexion = $this->connect();
			$sql = $connexion->query($req) or die('Erreur SQL, requete invalide! <br/>'.$req.'<br/>Checker la requete, et les parametress de connexion!');
			$connexion =null;
			$sql = $sql->fetch(PDO::FETCH_ASSOC);
			//print_r($sql);
			foreach($sql as $key=>$val){
				$this->$key=$val;
			}
		}
		
		/**
		*update - modify database with the current object
		*	public
		*
		*@function_call $object->update();
		*@see in_array($att1,$att2)
		*@see substr($string,$nb1,$nb2)
		*@see connect()
		*@see query($sql)
		*@see fetch($option)
		*@author BERGERON NATHANAEL
		*@date 18/10/2016
		*/
		public function update(){
			$chaine="";
			$att=$this->attTech;
			$att[]=$this->pk;
			foreach($this as $key=>$val){
				if(!in_array($key,$att) && $val!=''){
					$chaine=$chaine."$key='$val',";
				}
			}
			$chaine=substr($chaine,0,-1);
			$req="UPDATE {$this->table} SET $chaine WHERE {$this->pk}={$this->{$this->pk}}";
			echo $req;
			$connexion=$this->connect();
			$sql=$connexion->query($req) or die('Erreur SQL, requete invalide! <br/>'.$req.'<br/>Checker la requete, et les parametress de connexion!');
			$connexion =null;
		}
		
		
		
		/**
		*deleted - delete the record corresponding to the declared id
		*	public
		*
		*@function_call $object->deleted(1);
		*@param $id id of the record we want to delete
		*@see connect()
		*@see query($sql)
		*@author BERGERON NATHANAEL
		*@date 18/10/2016
		*/
		public function deleted($id){
			$req = "DELETE FROM {$this->table} WHERE {$this->pk}=$id;";
			//echo $req;
			$connexion=$this->connect();
			$sql=$connexion->query($req) or die('Erreur SQL, requete invalide! <br/>'.$req.'<br/>Checker la requete, et les parametress de connexion!');
			$connexion =null;
		}
		
		/**
		*find - search the record list corresponding to the declared condition
		*	public
		*
		*@function_call $object->deleted(1);
		*@param $condition SQL condition required to etablish the list
		*@see connect()
		*@see query($sql)
		*@see fetch($option)
		*@author BERGERON NATHANAEL
		*@date 18/10/2016
		*/
		public function find($condition){
			$req = "SELECT * From {$this->table} WHERE $condition;";
			//echo($sql);
			$connexion=$this->connect();
			$sql=$connexion->query($req) or die('Erreur SQL, requete invalide! <br/>'.$req.'<br/>Checker la requete, et les parametress de connexion!');
			$connexion =null;
			$tab="";
			while($res = $sql->fetch(PDO::FETCH_ASSOC)){
				$tab[]=$res;
			}
			return $tab;
		}
		
	}
?>