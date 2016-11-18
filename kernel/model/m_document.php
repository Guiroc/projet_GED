<?php 
	
	/**
	*Document - class
	*	extends Generique
	*
	*@constructor : $doc=new Document(null,null,null,null,null);
	*@atribute id_document
	*@atribute nom_document
	*@atribute verrouille_document
	*@atribute date_creation
	*@atribute date_suppression
	*@atribute id_creation
	*@atribute id_suppression
	*@see all getters & setters
	*@author BERGERON NATHANAEL
	*@date 18/10/2016
	*/
	class Document extends Generique{
		
		//initialisation
		protected $id_document;
		protected $nom_document;
		protected $verrouille_document;
		protected $date_creation;
		protected $date_suppression;
		protected $id_creation;
		protected $id_suppression;
	
		
		//constructor
		public function __construct($id_document, $nom_document, $verrouille_document, $date_creation, $id_creation){
			parent::__construct('Document','id_document', true);
			$this->id_document=$id_document;
			$this->nom_document=$nom_document;
			$this->verrouille_document=$verrouille_document;
			$this->date_creation=$date_creation;
			$this->date_suppression='';
			$this->id_creation=$id_creation;
			$this->id_suppression='';
		}
	
		//getters & setters
		public function get_id_document(){
		return $this->id_document;
		}
		public function get_nom_document(){
			return $this->nom_document;
		}
		public function get_verrouille_document(){
			return $this->verrouille_document;
		}
		public function get_date_creation(){
			return $this->date_creation;
		}
		public function get_date_suppression(){
			return $this->date_suppression;
		}
		public function get_id_creation(){
			return $this->id_creation;
		}
		public function get_id_suppression(){
			return $this->id_suppression;
		}
		public function set_id_document($id_document){
			$this->id_document=$id_document;
		}
		public function set_nom_document($nom_document){
			$this->nom_document=$nom_document;
		}
		public function set_verrouille_document($verrouille_document){
			$this->verrouille_document=$verrouille_document;
		}
		public function set_date_creation($date_creation){
			$this->date_creation=$date_creation;
		}
		public function set_date_suppression($date_suppression){
			$this->date_suppression=$date_suppression;
		}
		public function set_id_creation($id_creation){
			$this->id_creation=$id_creation;
		}
		public function set_id_suppression($id_suppression){
			$this->id_suppression=$id_suppression;
		}
	}
?>