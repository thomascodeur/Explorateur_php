<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mdb.lite.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<title>Explorateur de fichiers</title>

</head>

<body class="height100vh bc4 ">
	<header>
		<div class="d-flex  flex-row justify-content-center  align-items-center ">
			<img src="assets/medias/png/dbms.png" width="125px" height="125px" alt="logo">
			<h1 class="fs50  white-text font4"> Explorateur </h1>

		</div>

	</header>
	<!-- <div class="height100vh ">
		<section class="bc3 text-center white-text">
			<div class="margtop">
				<form action="#" methode="post">
					<input type="text" name="search">
					<button type="text" name="search" /><i class="fa fa-search" aria-hidden="true"></button></i> 

				</form>
			</div> -->
	<section>



		<div class="container-fluid">
			<div id="reponse" class="row dFlex justifySE height100vh padtop75px  text-center fs25 font4">

				<?php	

					$dirs = new RecursiveDirectoryIterator(BASE_DIR);
					$dirs->rewind();
					
					while($dirs->valid()){
							if($dirs->getFilename() != '.' && $dirs->getFilename() != '..'){
								if(is_dir($dirs->key())){
									echo '<div class="col-md-2  text-center dFlex maxheight125px "><a class="dossier"   href="#" data-dir="'.$dirs->key().'" ><img src="assets/medias/png/folder.png"width="138px" height="118px" alt="dossier"></br><span> Dossier : ' . $dirs->getFilename() . '</span></a> </div>';
									
								} else {
									echo '<div class="col-md-2  text-center dFlex "><img src="assets/medias/png/file.png"width="118px" height="118px" alt="dossier"><span>Fichier : '.$dirs->getFilename().'</span></div>';
							
								}
							}
							$dirs->next();
					}

				?>
		<!--/*while($dirs->valid()){
		 if(is_dir($dirs->key())){
        echo '<div class="col-md-2  text-center dFlex  "><img src="assets/medias/png/folder.png"width="138px" height="118px" alt="dossier"></br><a  data-dir=" ../" href="index.php?dossier='.$dirs->key().'" ><span> Dossier : ' . $dirs->getFilename() . '</span></a> </div>';
	}
	elseif($dirs->getFilename() == '.'){
	}
	elseif($dirs->getFilename() == '..'){
		echo '<div class="col-md-2  text-center dFlex  "><img src="assets/medias/png/openfolder.png"width="138px" height="118px" alt="dossier"></br><a  data-dir=" ../" href="index.php?dossier='.$dirs->key().'" ><span> Retour : ' . $dirs->getFilename() . '</span></a> </div>';
	}
	else {
		echo '<div class="col-md-2  text-center dFlex "><img src="assets/medias/png/file.png"width="118px" height="118px" alt="dossier"><span>Fichier : '.$dirs->getFilename().'</span></div>';
	}
    $dirs->next();
			
}*/ -->


	</section>


	<footer>
		<!-- Copyright -->
		<div class=" text-center py-3  color0 fs25 font3">© 2018 Copyright: Made by : Aurélien , Thomas , Rija & Pierre Yves

		</div>
		<!-- Copyright -->

	</footer>
	</div>
	<script src="assets/js/traitement_ajax.js"></script>
</body>




</html>