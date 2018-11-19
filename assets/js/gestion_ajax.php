<?php	
require_once('../../config.php');
					
if (isset($_GET['dossier'])){
	$dossier = $_GET['dossier'];
	$result = '';

	$dirs = new RecursiveDirectoryIterator($dossier);
	$dirs->rewind();
					
	while($dirs->valid()){
		if(is_dir($dirs->key())){
			if($dirs->getFilename() != '.' && $dirs->key() != BASE_DIR && $dirs->key() != BASE_DIR . '/.' && $dirs->key() != BASE_DIR . '/..'){
				if($dirs->getFilename() == '..'){
					$path = str_replace('\\', '/', $dirs->key());
					$pathArray = explode ('/', $path);
					array_pop($pathArray);
					array_splice($pathArray,-1);
					$parentPath = implode('/',$pathArray);

					$result .= '<div class="col-md-2 text-center dFlex maxheight125px">
									<a class="dossier" href="#" data-dir="'.$parentPath.'" >
										<img src="assets/medias/png/openfolder.png" width="138px" height="118px" alt="dossier"></br>
										<span> Retour : ' . $dirs->getFilename() . '</span>
									</a>
								</div>';
				} else {
					$result .= '<div class="col-md-2 text-center dFlex maxheight125px ">
									<a class="dossier" href="#" data-dir="'.$dirs->key().'" >
										<img src="assets/medias/png/folder.png" width="138px" height="118px" alt="dossier"></br>
										<span> Dossier : ' . $dirs->getFilename() . '</span>
									</a>
								</div>';
				}
			}
		} else {
			$result .= '<div class="col-md-2  text-center dFlex "><img src="assets/medias/png/file.png"width="118px" height="118px" alt="dossier"><span>Fichier : '.$dirs->getFilename().'</span></div>';
		}

		$dirs->next();
	}
	
	echo $result;

}