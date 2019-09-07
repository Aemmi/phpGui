<?php
/**
 * wrriten by Ayeh Emmanuel
 * Date:
 */
//create the project class for interacting with the database
class DBRequest{
	//contruct the class
	public function __construct(){
		//define db variables as objects
		$this->db_host = "localhost";
		$this->db_user = "";
		$this->db_password = "";
		$this->db_database = "";

		$this->con = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_database);

	}

	//function to check connection error
	public function testConnection(){
		if($this->con->connect_error){
			//print '<script>
			//	alert("Sorry, connection failed");
			//</script>';
			print $this->con->connect_error;
		}else{
			print '<script>
				alert("Connection was successful!");
			</script>';
		}
	}
    
    public function connection_error($sql){
        $query = $this->con->query($sql);
        if(!$query){
            print $this->con->error;
        }else{
            print "No query error!";
        }
    }

	//function to clean up data
	public function cleanInput($input){

		$this->data = $input;

		$this->clean = htmlspecialchars($this->data);

		$this->clean = addslashes($this->data);

		$this->clean = trim($this->data);

		return $this->clean;

	}


	//function to count number of rows from a query
	function countRows($sql){
		$this->sql = $sql;
		
		try{
			$this->count = $this->con->query($this->sql);
			return $this->count->num_rows;
		}catch(Exception $e){
			return 0;
		}
		
	}


	//function to insert data into the db
	function insertData($sql){
		
		$this->sql = $sql;

		$query = $this->con->query($this->sql);

		if(!$query){
			//return false
			return 0;
		}else{
			return 1;
		}
	}

	//function to perform selection queries from db
	public function getData($sql){
		$this->sql = $sql;

		$this->result = array();

		$this->query = $this->con->query($this->sql);

			while($row = $this->query->fetch_assoc()){

				//get data into multi-dimensional array
				$this->result[] = $row;

			}

			return $this->result;

		}

		//=======================================
		//delete query method
		function deleteData($sql){
			$status;
			$this->sql = $sql;
			$this->query = $this->con->query($this->sql);
			if(!$this->query){
				$status = 0;
				return $status;
			}else{
				$status = 1;
				return $status;
			}
		}
		
		//=======================================
		//delete query method
		function updateData($sql){
			$status;
			$this->sql = $sql;
			$this->query = $this->con->query($this->sql);
			if(!$this->query){
				$status = 0;
				return $status;
			}else{
				$status = 1;
				return $status;
			}
		}

	}