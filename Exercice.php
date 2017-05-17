 <?php /*class Client {

	// données membres

	private $_id;					// syntaxe spéciale pour déclarer les variables
	private $_adresse;	
	private $_CP;
	private $_ville;

	// méthodes membres

	public function initClient($mid,$madresse,$mcp,$mville) {

		$this->_id=$mid; 				//this pour setter une variable
		$this->_adresse=$madresse; 
		$this->_CP=$mcp; 
		$this->_ville=$mville
	}

	public function afficheClient(){

		echo $this->_id;
		echo $this->_adresse;
		echo $this->_CP;
		echo $this->_ville;
	}

	// Mutateurs

	public function getid(){					//Set & Get pour les 3 points

		return $this->_id;
	}

	public function getadresse=Y(){

		return $this->_adresse;
	}

	

	public function setid($mid){

		$this->_id=$mid;
	}

	

	}
	
	*/
	
	
	
	
	
	
	
	
	
	
<?php

class Client{

	//Données membres
	private $_ID;
	private $_Nom;
	private $_Prenom;
	private $_CP;
	private $_Ville;
	private $_Adresse;
	private $_Fact;

	//Fcts membres

	private function initClient($mID,$mNom,$mPrenom,$mCP,$mVille,$mAdresse){

		$this->_ID=$mID;
		$this->_Nom=$mNom;
		$this->_Prenom=$mPrenom;
		$this->_CP=$mCP;
		$this->_Ville=$mVille;
		$this->_Adresse=$mAdresse;
		$this->_Fact=array();
	}
	public function __construct($mID,$mNom,$mPrenom,$mCP,$mVille,$mAdresse){

		echo "constructeur <br/>";
		$this->initClient($mID,$mNom,$mPrenom,$mCP,$mVille);
	}
	public function __destruct(){

		echo "<br/> Destroy ".$this->_ID;
		echo "<br/> Destroy ".$this->_Nom;
		echo "<br/> Destroy ".$this->_Prenom;
		echo "<br/> Destroy ".$this->_CP;
		echo "<br/> Destroy ".$this->_Ville;
	}
	public function AfficheClient(){

		echo $this->_ID;
		echo $this->_Nom;
		echo $this->_Prenom;
		echo $this->_CP;
		echo $this->_Ville;
		//on affiche les valeurs de l'array précédemment crée en lui donnant les valeurs de facture
		for each($this->_Fact as $f){
			$f->afficheFacture();
		}
	}
	//Mutateurs
	public function getClientID(){

		return $this->_ID;
	}
	public function getClientNom(){

		return $this->_Nom;
	}
	public function getClientPrenom(){

		return $this->_Prenom;
	}
	public function getClientCP(){

		return $this->_CP;
	}
	public function getClientVille(){

		return $this->_Ville;
	}
	
	public function getClientFact(){

		return $this->_Fact;
	}
	public function getClientFact2($mTabID){

		return $this->_TabFact[$mTabID];
	}
	
	
	
	
	
	public function setClientID($mID){

		$this->_ID=$mID;
	}
	public function setClientNom($mNom){

		$this->_Nom=$mNom;
	}
	public function setClientPrenom($mPrenom){

		$this->_Prenom=$mPrenom;
	}
	public function setClientCP($mCP){

		$this->_CP=$mCP;
	}
	public function setClientVille($mVille){

		$this->_Ville=$mVille;
	}
	
	public function setClientFact($mFact){

		$this->_Fact=$mFact;
	}
	
	public function setClientFact2($mFact,$mID){

		$this->_Fact[$mID]=$mFact;
	}
}



class Facture{

	//Données membres
	private $_Idfacture;
	private $_Date;
	private $_kkch;
	

	//Fcts membres

	private function initFacture($mIdFacture,$mDate,$mkkch){

		$this->_Idfacture=$mIdFacture;
		$this->_Date=$mDate;
		$this->_kkch=$mkkch;
	
	}
	public function __construct($mIdFacture,$mDate,$mkkch){

		echo "constructeur <br/>";
		$this->initFacture($mIdFacture,$mDate,$mkkch);
	}
	public function __destruct(){

		echo "<br/> Destroy ".$this->_IdFacture;
		echo "<br/> Destroy ".$this->_Date;
		echo "<br/> Destroy ".$this->_kkch;
		
	}
	public function AfficheFacture(){

		echo $this->_IdFacture;
		echo $this->_Date;
		echo $this->_kkch;
		
	}
	//Mutateurs
	public function getFactureIdFacture(){

		return $this->_IdFacture;
	}
	public function getFactureDate(){

		return $this->_Date;
	}
	public function getkkch(){

		return $this->_kkch;
	}
	
	
	public function setFactureID($mIdFacture){

		$this->_ID=$mIdFacture;
	}
	public function setFactureDate($mDate){

		$this->_Date=$mDate;
	}
	public function setFactureModeReg($mkkch){

		$this->_kkch=$mkkch;
	}
	
	
	
	
	
	
	
}










































?>

<?php
	//Main
	$mClient= new Client(1,"Sutterlin","Sébastien",67100,"Strasbourg");
	$mClient->setClientNom("Nissan");
	echo $mClient->getClientNom();
	
	
	
	
	$mFacture= new Facture(1,"15/06/2012","Lolz");
	$mFacture->setFactureID(1);
	echo "<br/>".$mFacture->getFactureIdFacture();
	
	
	
	
	
	
	
	
	
	
	
	$mClient->setClientFact($mFacture,15);
	$mClient->setClientFact2(2,3);
	echo $mClient->getClientFact2(1);
	echo $mClient->getClientFact();
	//http://laurent-audibert.developpez.com/Cours-UML/?page=diagramme-classes#L3-6-2-g
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	?> 