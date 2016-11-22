<?php 
	
	/**
	*Document - class
	*	extends Generique
	*
	*@constructor : $doc=new Document(null,null,null,null,null);
	*@atribute id_Hdocument
	*@atribute nom_Hdocument
	*@atribute verrouille_Hdocument
	*@atribute date_creationH
	*@atribute date_suppressionH
	*@atribute id_creationH
	*@atribute id_suppressionH
	*@see all getters & setters
	*@author BERGERON NATHANAEL
	*@date 22/11/2016
	*/
	class Histo_Document extends Generique{
		
		//initialisation
		protected $id_Hdocument;
		protected $nom_Hdocument;
		protected $verrouille_Hdocument;
		protected $date_creationH;
		protected $date_suppressionH;
		protected $id_creationH;
		protected $id_suppressionH;
	
		
		//constructor
		public function __construct($id_Hdocument, $nom_Hdocument, $verrouille_Hdocument, $date_creationH, $date_suppressionH, $id_creationH, $id_suppressionH){
			parent::__construct('Document','id_Hdocument', true);
			$this->id_Hdocument=$id_Hdocument;
			$this->nom_Hdocument=$nom_Hdocument;
			$this->verrouille_Hdocument=$verrouille_Hdocument;
			$this->date_creationH=$date_creationH;
			$this->date_suppressionH=date_suppressionH;
			$this->id_creationH=$id_creationH;
			$this->id_suppressionH=id_suppressionH;
		}
	
		//getters & setters
		public function get_id_Hdocument(){
		return $this->id_Hdocument;
		}
		public function get_nom_Hdocument(){
			return $this->nom_Hdocument;
		}
		public function get_verrouille_Hdocument(){
			return $this->verrouille_Hdocument;
		}
		public function get_date_creationH(){
			return $this->date_creationH;
		}
		public function get_date_suppressionH(){
			return $this->date_suppressionH;
		}
		public function get_id_creationH(){
			return $this->id_creationH;
		}
		public function get_id_suppressionH(){
			return $this->id_suppressionH;
		}
		public function set_id_Hdocument($id_Hdocument){
			$this->id_Hdocument=$id_Hdocument;
		}
		public function set_nom_Hdocument($nom_Hdocument){
			$this->nom_Hdocument=$nom_Hdocument;
		}
		public function set_verrouille_Hdocument($verrouille_Hdocument){
			$this->verrouille_Hdocument=$verrouille_Hdocument;
		}
		public function set_date_creationH($date_creationH){
			$this->date_creationH=$date_creationH;
		}
		public function set_date_suppressionH($date_suppressionH){
			$this->date_suppressionH=$date_suppressionH;
		}
		public function set_id_creationH($id_creationH){
			$this->id_creationH=$id_creationH;
		}
		public function set_id_suppressionH($id_suppressionH){
			$this->id_suppressionH=$id_suppressionH;
		}
	}
?>