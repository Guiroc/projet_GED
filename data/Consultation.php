<?php
include'generique.php';

class consultation extends generique {
 private $id_consultation;
 private $date_consultation;
 private $id_utilisateur;
 private $id_document;
 //Variable
 
  public function __construct ($id_consultation,$date_consultation,$id_utilisateur,$id_document)
  {
		$this->id_consultation = $id;
		$this->date_consultation = $consultation;
		$this->id_utilisateur = $utilisateur;
		$this->id_document = $document;
}
//Constucteur
//______________________________________________________________

//GET
public function get_id_consultation ()
{
		return($this->id_consultation);
}

public function get_date_consultation ()
	{
		return($this->date_consultation);
	}

	
public function get_id_utilisateur ()
	{
		return($this->id_utilisateur);
	}
	
public function get_id_document ()
	{
		return($this->id_document);
	}

//______________________________________________________________

//SET
public function set_id_consultation ($id_consultation)
	{
		$this -> id_consultation = $id_consultation;
	}
	
public function set_date_consultation ($date_consultation)
	{
		$this -> date_consultation = $date_consultation;
	}
	
public function set_id_utilisateur ($id_utilisateur)
	{
		$this -> id_utilisateur = $id_utilisateur;
	}
	
public function set_id_document ($id_document)
	{
		$this -> id_document = $id_document;
	}
	
	?>
