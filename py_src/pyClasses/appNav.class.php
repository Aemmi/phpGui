<?php
/**
 * wrriten by Ayeh Emmanuel
 * Date:
 */
class appNav
{
	
	function __construct(){
		$this->error = "";
		$this->errorDiv = "appData";
	}
	
	//function to load requested app page
	function loadPage($pg,$mthd){
		$this->page = $pg;
		$ajax = "";
		if($mthd == "POST"){
			$ajax .= 'var xml = new XMLHttpRequest();';
        	$ajax .= 'xml.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                document.getElementById("'.$this->errorDiv.'").innerHTML = this.responseText;
            }
        };';

        $ajax .= 'xml.open("POST", "'.$this->page.'", true);';
        $ajax .= 'xml.send();';

        echo $ajax;

		}else{
			if($mthd == "GET"){
				$ajax .= 'var xml = new XMLHttpRequest();';
				$ajax .= 'xml.onreadystatechange = function(){
				if(this.readyState==4 && this.status==200){
					document.getElementById("'.$this->errorDiv.'").innerHTML = this.responseText;
				}
			};';

            $ajax .= 'xml.open("GET", "'.$this->page.'", true);';
            $ajax .= 'xml.send();';
    
            print $ajax;
	        }
        }
    }

}