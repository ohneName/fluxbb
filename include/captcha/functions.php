<?php
if (!defined('PUN_ROOT'))
	exit('The constant PUN_ROOT must be defined and point to a valid FluxBB installation root directory.');

require_once PUN_ROOT.'include/common.php';	
require_once PUN_ROOT.'include/functions.php';

class Captcha {

	const LONGUEUR_CLE = 50;
	
	private $token;
	private $tableauDePermutation;
	private $cle;
	
	private function getReferer () {
		return (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
	}
	
	private function getIP () {
		return (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '';
	}
	
	private function getRandom () {
		return uniqid ('',true).rand();
	}
	
	private function validationReferer () {
		$scripts = array('login.php','post.php','register.php','viewtopic.php');
		
		// There is no referrer
		if (empty($_SERVER['HTTP_REFERER']))
			return false;
			
		$referrer = parse_url(strtolower($_SERVER['HTTP_REFERER']));
		
		// Remove www subdomain if it exists
		if (strpos($referrer['host'], 'www.') === 0)
			$referrer['host'] = substr($referrer['host'], 4);
			
		foreach ($scripts as $script) {
			$valid = parse_url(strtolower(get_base_url().'/'.$script));
			
			// Remove www subdomain if it exists
			if (strpos($valid['host'], 'www.') === 0)
				$valid['host'] = substr($valid['host'], 4);

			// Check the host and path match. Ignore the scheme, port, etc.
			if ($referrer['host'] == $valid['host'] && $referrer['path'] == $valid['path'])
				return true;
		}
		
		return false;
	}
	
	private function validationToken () {
		$retour = false;
		if (!empty($this->token) AND !empty($_POST['tokenCaptcha']) AND $_POST['tokenCaptcha'] == $this->token) {
			$retour = true;
		}
		return $retour;
	}
	
	public function validerCle () {
		$retour = false;
		$permutationCle = $this->permutationCle ();
		if (!empty($permutationCle) AND !empty($_POST['cleCaptcha']) AND $_POST['cleCaptcha'] == $permutationCle) {
			$retour = true;
		} 
		return $retour;
	}
	
	private function creerHash ($longueur) {
		$hash = '';
		if ($longueur > 0) {
			$referer = $this->getReferer ();
			$ip = $this->getIP ();
			do {
				$chaineAleatoire = $referer.$ip.$this->getRandom();
				$hash .= hash('sha256',$chaineAleatoire);
			}
			while (strlen($hash) < $longueur);
			//On découpe le hash à la bonne longueur.
			$hash = substr($hash,0,$longueur);
		}
		return $hash;
	}
	
	private function initTableauDePermutation () {
		$this->tableauDePermutation = array();
		for ($i = 0; $i < Captcha::LONGUEUR_CLE; $i++) {
			$this->tableauDePermutation[] = rand(0, Captcha::LONGUEUR_CLE - 1);
		}
	}
	
	public function formatterTableauDePermutation () {
		//On initialise la permutation.
		$this->initTableauDePermutation ();
		//On formatte la permutation.
		$formattage = '';
		if (!empty($this->tableauDePermutation)) {
			$i = 0;
			foreach ($this->tableauDePermutation as $permutation) {
				if ($i) {
					$formattage .= ',';
				}
				$formattage .= $permutation;
				$i = 1;
			}
		}
		$formattage = '['.$formattage.']';
		return $formattage;
	}	
	
	public function initToken () {
		$this->token = $this->creerHash (Captcha::LONGUEUR_CLE + 1);
		return $this->token;
	}
	
	private function initCle () {
		$this->cle = $this->creerHash (Captcha::LONGUEUR_CLE);
		return $this->cle;
	}
	
	private function permutationCle () {
		$permutationCle = '';
		if (!empty($this->cle) AND !empty($this->tableauDePermutation)) {
			$cleEnTableau = str_split ($this->cle);
			$longueurCleEnTableau = sizeof($cleEnTableau);
			foreach ($this->tableauDePermutation as $permutation) {
				$permutationCle .= $cleEnTableau[$permutation%$longueurCleEnTableau];
			}
		}
		return $permutationCle;
	}
	
	public function retournerCleSiTokenValide () {
		$retour = '';
		if ($this->validationReferer() AND $this->validationToken()) {
			$retour = $this->initCle ();
		}
		return $retour;
	}
}

session_start();
if (empty($_SESSION['captcha'])) {
	$_SESSION['captcha'] = new Captcha ();
}

