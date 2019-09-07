<?php
/**
 * wrriten by Ayeh Emmanuel
 * Date:
 */
//start the html class
class Html{
	public function __construct(){
		$this->description="";
		$this->keywords="";
		$this->icon="";
		$this->title="";
		$this->author="";
	}

	function startHtml(){
		$layer = "";
		$layer .= '<!doctype html>';
		$layer .= '<html lang="en">';
		$layer .= '<head>';

		echo $layer;
	}
	
	function startHtmlHead(){
		$layer = "";
		$layer .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
		$layer .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
		$layer .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">';
		$layer .= '<meta name="keywords" content="'.$this->keywords.'">';
		$layer .= '<meta name="description" content="'.$this->description.'">';
		$layer .= '<meta name="author" content="'.$this->author.'">';
		$layer .= '<title>'.$this->title.'</title>';

		echo $layer;
	}
	
	//function to add external js script
	function addJs($js){
		echo '<script src="'.$js.'"></script>';
	}
	
	//function to add external css style sheet
	function addCss($css){
		echo '<link rel="stylesheet" type="text/css" href="'.$css.'">';
	}

	//function to add .ico file
	function addIcoFile($ico){
		echo '<!-- Favicon -->
		<link href="'.$ico.'" rel="shortcut icon"/>';
	}

	//function to close renderHtmlConfig
	function endHtmlHead(){
		echo '</head>';
	}
	
	//function to start body
	function startBody(){
		echo '<body>';
	}
	
	//function to set appData environment
	function appData(){
		echo '<div class="w3-container" id="appData"></div>';
	}
	
	//function to set appDiv
	function setDiv($colspan,$class,$id){
		echo '<div class="tgt-col-'.$colspan.'-wrapper '.$class.'" id="'.$id.'">';
	}
	
	//function to render html button
	function setBtn($class,$id,$cmd){
		echo '<button class="'.$class.'" id="'.$id.'" '.$cmd.'></button>';
	}
	
	//function to end div
	function endDiv(){
		echo '</div>';
	}
	
	//function to close body
	function endBody(){
		echo '</body>';
	}
	
	//function to end html
	function endHtml(){

	    echo "</html>";
	}
}