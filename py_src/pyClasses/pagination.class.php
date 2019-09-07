<?php
class Pagination extends DBRequest{

	public function __construct(){
		//inherit all methods of parent class
		parent::__construct();
		$this->sql = "";
		$this->perPage = "";
		$this->db = $this->con;
	}

	public function getPages(){

		$this->total_list = $this->db->getData($this->sql);

        $count = $this->db->countRows($sql);
        
                
        $number_of_pages = ceil($count/$this->perPage);
        
        if($number_of_pages < 1){

            $number_of_pages = 1;

        }
        
        $this->page = 1;
        
        if(isset($_GET['page'])){
            $this->page = preg_replace('#[^0-9]#', '', $_GET['page']);
        }
        
        if($this->page > $number_of_pages){
            $this->page = $number_of_pages;
        }else if($this->page < 1){
            $this->page = 1;
        }
        
        $pagination = "";
        
        if($number_of_pages != 1){
        
        if($this->page > 1){
            $previous = $this->page-1;
            $pagination.='<a href="?page='.$previous.'"><button class="w3-btn w3-green w3-text-white">Previous</button></a>&nbsp;';
            
            for($x = $this->page-4; $x < $this->page; $x++) {
                
                if($x > 0){
                    
                	$pagination.='<a href="?page='.$x.'"><button class="w3-btn w3-green w3-text-white">'.$x.'</button></a>&nbsp;';
                
                	}
            	}
        	}
    	}

        $pagination.= '<a href="?page='.$this->page.'">'.$this->page.'</a>&nbsp;';
        
        for($x = $this->page+1; $x <= $number_of_pages; $x++){
            $pagination.='<a href="?page='.$x.'"><button class="w3-btn w3-green w3-text-white">'.$x.'</button></a>&nbsp;';
            if($x >= $this->page+4){
            break;
            }
        }
        
        if($this->page != $number_of_pages){
            $next = $this->page+1;
            $pagination.='<a href="?page='.$next.'"><button class="w3-btn w3-green w3-text-white">Next</button></a>';
        }

        return $pagination;
        
	}

	public function paginationLimit(){
		$this->limit = ($this->page - 1)*$this->perPage.",".$this->perPage;
		return $this->limit;
	}

}