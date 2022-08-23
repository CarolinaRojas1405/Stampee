<?php


class Crud extends PDO{

	protected $table;
	protected $primaryKey;


  //Méthode connection avec constructeur

	public function __construct(){
		//parent::__construct("mysql:host=localhost;dbname=e2095376", "e2095376", "osRL5eulwzRqDK438aXz");
		parent::__construct("mysql:host=localhost;dbname=encheres", "root", "");
	}


  //Méthode selection liste de timbres

	public function enchere(){
		$sql = "SELECT enchere.id, timbre.id as idTimbre, nom, pieces, prix_plancher, date_debut, date_fin, url FROM timbre JOIN enchere ON timbre.id = enchere.timbre_id JOIN images ON images.timbre_id = timbre.id";
		$res = $this->query($sql);
		return $res->fetchAll(PDO::FETCH_CLASS);
	}


  //Méthode selection les timbres pour créer l'enchère

	public function timbreEnchere(){
		$sql = "SELECT * FROM timbre WHERE NOT EXISTS (SELECT * FROM enchere WHERE enchere.timbre_id = timbre.id )";
		$res = $this->query($sql);
		return $res->fetchAll(PDO::FETCH_CLASS);
	}


  //Méthode selection usager sans offre

	public function userOffre(){
		$sql = "SELECT * FROM usager WHERE EXISTS (SELECT * FROM offre WHERE offre.usager_id = usager.id )";
		$res = $this->query($sql);
		return $res->fetchAll(PDO::FETCH_CLASS);
	}


	//Méthode selection description timbres

	public function ficheTimbre($id){
		$sql = "SELECT enchere.id, pieces, date_fin, prix_plancher, timbre.id as idTimbre, timbre.nom, date_creation, certificat, pays_origine, couleur, dimensions, url, titre, `condition`, CONCAT(prenom, ' ', usager.nom) AS vendeur, pays_residence, date_register FROM timbre JOIN usager ON timbre.usager_id =usager.id JOIN enchere ON timbre.id = enchere.timbre_id JOIN images ON images.timbre_id = timbre.id JOIN `condition` ON timbre.condition_id = `condition`.id WHERE timbre.id = $id";
		$res = $this->query($sql);
		return $res->fetchAll(PDO::FETCH_CLASS);
	}


	//Méthode selection prix Max

	public function prixMax($id){
		$sql = "SELECT MAX(prix) as prixMax FROM offre JOIN enchere ON enchere.id = offre.enchere_id WHERE enchere.timbre_id = $id";
		$res = $this->query($sql);
		return $res->fetchAll(PDO::FETCH_CLASS);
	}


	//Méthode selection timbres en enchère

	public function listeTimbre(){
		$sql = "SELECT * FROM timbre, enchere WHERE timbre.id = enchere.timbre_id";
		$stmt = $this->query($sql);
		return $stmt->fetchAll(PDO::FETCH_CLASS);

	}


	//Méthode selection timbres en enchère

	public function listeUser(){
		$sql = "SELECT username, usager.id, usager.nom as nom, timbre.nom as titre, prenom, privilege FROM usager, timbre WHERE usager.id = timbre.usager_id";
		$stmt = $this->query($sql);
		return $stmt->fetchAll(PDO::FETCH_CLASS);

	}


   //Méthode insertion

  	public function insert($data){
		$fieldName = implode(", ",array_keys($data));
		$fieldValues = ':'.implode(", :", array_keys($data));

		$sql = "INSERT INTO $this->table ($fieldName) VALUES ($fieldValues)";
		$stmt = $this->prepare($sql);

		foreach ($data as $key => $value) {
		$stmt->bindValue(":$key", $value);
		}

		if($stmt->execute()){
			return $this->lastInsertId();
		}else{
			return $stmt->errorInfo();
		}
	}


	//Méthode pour supprimer image

	public function deleteImage($id){

		$sql="DELETE from images WHERE timbre_id=$id";

		if($this->query($sql)){

		header("Location: /encheres/index.php/listeTimbres");
		}

	}


  //Méthode pour supprimer timbre

	public function deleteTimbre($id){

		$sql="DELETE from timbre WHERE id=$id";

		if($this->query($sql)){

		header("Location: /encheres/index.php/listeTimbres");
		}

	}

	//Méthode pour supprimer utilisateur

	public function deleteUser($id){

		$sql="DELETE from usager WHERE id=$id";

		if($this->query($sql)){

		header("Location: /encheres/index.php/listeUsager");
		}

	}


	//Méthode pour modifier utilisateur

	public function updateUser($id, $nom, $prenom, $privilege, $pays_residence){

		if(isset($_POST["id"]) && $_POST["nom"] && $_POST["prenom"] && $_POST["privilege"]!=null)
		$id=$_POST["id"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$privilege=$_POST["privilege"];
		$pays_residence = $_POST['pays_residence'];

		$stmt = $this->prepare("UPDATE usager SET nom = '$nom', prenom = '$prenom', privilege = '$privilege', pays_residence = '$pays_residence' WHERE id = '$id'");

		if(!$stmt->execute()){
			print_r($stmt->errorInfo());
		}else{
			echo "<div class='result'><p>Réussi !</p></div>";
		}

	}


	//Méthode pour modifier timbre

	public function updateTimbre($id, $date_creation, $pays_origine, $certificat){

		if(isset($_POST["id"]) && $_POST["date_creation"] && $_POST["pays_origine"] && $_POST["certificat"]!=null)
		$id=$_POST["id"];
		$date_creation=$_POST["date_creation"];
		$pays_origine=$_POST["pays_origine"];
		$certificat=$_POST["certificat"];

		$stmt = $this->prepare("UPDATE timbre SET date_creation = '$date_creation', pays_origine = '$pays_origine', certificat = '$certificat' WHERE id = '$id'");

		if(!$stmt->execute()){
			print_r($stmt->errorInfo());
		}else{
			echo "<div><p>Réussi !</p></div>";
		}

	}


	//Méthode selection

	public function select($fieldOrder = null, $order = null){
		if($fieldOrder == null){
		  $sql = "SELECT * FROM $this->table";
		}else{
		  $sql = "SELECT * FROM $this->table ORDER BY $fieldOrder $order";
		}
		$stmt = $this->query($sql);

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}



	//Méthode selection avec id

	public function selectId($id){
		$sql = "SELECT * FROM $this->table WHERE $this->primaryKey = $id";
		$stmt = $this->query($sql);
		return $stmt->fetchAll(PDO::FETCH_CLASS);

	}


	public function selectCondition(){
		$sql = "SELECT * FROM `condition`";
		$stmt = $this->query($sql);
		return $stmt->fetchAll(PDO::FETCH_CLASS);

	}


	public function checkUser($username){

		$sql = "SELECT * FROM $this->table WHERE username = ?";
		$stmt = $this->prepare($sql);
		$stmt->execute(array($username));
		$count=$stmt->rowCount();

		if($count==1){
			//return true;
			return $stmt->fetch();
		}
	}


	public function recherche_timbre($recherche) {

		$reqPrep = "SELECT * FROM timbre JOIN images ON images. timbre_id = timbre.id WHERE nom LIKE ?";
		$stmt = $this->prepare($reqPrep);
		$protectRecherche = "%$recherche%";
		$stmt->bindParam(1, $protectRecherche, PDO::PARAM_STR, 12);
		if(!$stmt->execute()){
			print_r($stmt->errorInfo());
		}else{
			return $stmt->fetchAll(PDO::FETCH_CLASS);
		}
	}

}

?>
