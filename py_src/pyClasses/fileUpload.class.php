<?php
class FileUpload{
	
	public function __construct(){
		$this->dir = "";
		$this->storageName = "";
		$this->uploadSize = "";
	}

	public function upload(){

		$doc = $this->dir.basename($_FILES['file']['name']);

		$type = pathinfo($doc, PATHINFO_EXTENSION);

		$this->fileName = $this->dir.$name.".".$type;

		$this->storageName = $name.".".$type;

		if(file_exists($this->fileName)){

			return 0;

		}elseif($_FILES['file']['size'] > $this->uploadSize){

			return 0;

		}else{

			if(move_uploaded_file($_FILES['file']['tmp_name'], $this->fileName)){

				return $this->storageName ;

			}else{

			    return 0;

			}

		}

	}
}