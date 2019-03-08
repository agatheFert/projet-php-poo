<?php

namespace Classes\Formulaire;

/**
* Class FormUtility : class permettant de :
* - Generer le HTML du formulaire
* - Effectuer des controles sur les variables POST
*/

class formUtility {
	/**
	*
	* @return string HTML(label et input/textarea)
	*/


	//   ?string $placeholder = ''  signifie :
	//   ?string  signifie de type string ou Rien
	//   = ''     signifie = vide
	public function generateHTML(string $label, string $type, string $id, ?string $placeholder = '' ): string {

	  switch($type){
		case:'text':
		case 'number':
		$widget =   ;
		break;
		case'textarea':
		$widget =  ;
		default:
		die('LE type donné est inconnu');
	  }
		
	 return <<<EOT
<div class="form-group">
  <label for="$id">$label</label>
  $widget
</div>
EOT;

private function getHTMLInput(string ){
 <input type="$type" id="$id" name="$id" placeholder="$placeholder" class="form-control" />

}



}
}



?>