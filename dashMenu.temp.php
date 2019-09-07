<body>
<div class="tgt-dashMenu" id="primary-menu">
	
    <ul style="background: green">
    	<li><div class="tgt-full-width tgt-center tgt-padded">
			<img src="../icons/logopoly.png" class="tgt-medium-icon tgt-rounded w3-spin">
			</div>
		</li>

        <li><a class="active" href="index.php"><img src="../icons/dashIcon.png" class="tgt-icon">&nbsp;Dashboard</a></li>
        
		<li><a href="setFees.php"><img src="../icons/money.png" class="tgt-icon">&nbsp;Set Fees Payable</a></li>
        
        <?php
        if($_SESSION['adminRole'] == 'a'){

            print '<li><a href="administrators.php"><img src="../icons/user.png" class="tgt-icon">&nbsp;Administrators</a></li>
            
            <li class="w3-dropdown-hover tgt-full-width">
    		    <a href="#"><img src="../icons/list.png" class="tgt-icon">&nbsp;Upload Existing Students <i class="fa fa-caret-down"></i></a>
    		    <div class="w3-dropdown-content w3-green w3-card-4">
    		      <a href="uploadStudentsList.php?action=ND">ND</a>
    		      <a href="uploadStudentsList.php?action=HND">HND</a>
    		      <a href="uploadStudentsList.php?action=BSC">BSc</a>
    		    </div>
    		  </li>
    
            <!--<li class="w3-dropdown-hover tgt-full-width">
    		    <a href="#"><img src="../icons/list.png" class="tgt-icon">&nbsp;Upload Admission List <i class="fa fa-caret-down"></i></a>
    		    <div class="w3-dropdown-content w3-green w3-card-4">
    		      <a href="uploadAdmissionList.php?action=ND">ND</a>
    		      <a href="uploadAdmissionList.php?action=HND">HND</a>
    		      <a href="uploadAdmissionList.php?action=BSC">BSc</a>
    		    </div>
    		  </li>-->
    		  
    		  <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/users.png" class="tgt-icon">&nbsp;Update Departments <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="departments.php?action=ND">ND</a>
		      <a href="departments.php?action=HND">HND</a>
		      <a href="departments.php?action=BSC">BSc</a>
		    </div>
		  </li>

        <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/folder.png" class="tgt-icon">&nbsp;Update Courses <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="courses.php?action=ND">ND</a>
		      <a href="courses.php?action=HND">HND</a>
		      <a href="courses.php?action=BSC">BSc</a>
		    </div>
		  </li>

        <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/profile.png" class="tgt-icon">&nbsp;Enroll Staff <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="enrollStaff.php?action=ND">ND</a>
		      <a href="enrollStaff.php?action=HND">HND</a>
		      <a href="enrollStaff.php?action=BSC">BSc</a>
		    </div>
		  </li>
		  
		  <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/list.png" class="tgt-icon">&nbsp;Generate Pins <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="generatePin.php?action=Admission_Letter">Admission Letter Printing</a>
		      <a href="generatePin.php?action=ND_SCHOOl_FEE">ND School Fee</a>
		      <a href="generatePin.php?action=HND_SCHOOl_FEE">HND School Fee</a>
		      <a href="generatePin.php?action=BSC_SCHOOl_FEE">BSC School Fee</a>
		      <a href="generatePin.php?action=FRESH_REG">Fresh Registration</a>
		      <a href="generatePin.php?action=ND_REG">ND Registration</a>
		      <a href="generatePin.php?action=HND_REG">HND Registration</a>
		      <a href="generatePin.php?action=BSC_REG">BSc Registration</a>
		      <a href="generatePin.php?action=RESULT_CHECKER">Result Checker</a>
		    </div>
		  </li>';
        }elseif($_SESSION['adminRole'] == 'd'){
            print '<li class="w3-dropdown-hover tgt-full-width">
    		    <a href="#"><img src="../icons/list.png" class="tgt-icon">&nbsp;Upload Admission List <i class="fa fa-caret-down"></i></a>
    		    <div class="w3-dropdown-content w3-green w3-card-4">
    		      <a href="uploadAdmissionList.php?action=ND">ND</a>
    		      <a href="uploadAdmissionList.php?action=HND">HND</a>
    		      <a href="uploadAdmissionList.php?action=BSC">BSc</a>
    		    </div>
    		  </li>
    		  
    		  <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/users.png" class="tgt-icon">&nbsp;Update Departments <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="departments.php?action=ND">ND</a>
		      <a href="departments.php?action=HND">HND</a>
		      <a href="departments.php?action=BSC">BSc</a>
		    </div>
		  </li>

        <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/folder.png" class="tgt-icon">&nbsp;Update Courses <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="courses.php?action=ND">ND</a>
		      <a href="courses.php?action=HND">HND</a>
		      <a href="courses.php?action=BSC">BSc</a>
		    </div>
		  </li>

        <li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/profile.png" class="tgt-icon">&nbsp;Enroll Staff <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="enrollStaff.php?action=ND">ND</a>
		      <a href="enrollStaff.php?action=HND">HND</a>
		      <a href="enrollStaff.php?action=BSC">BSc</a>
		    </div>
		  </li>';
        }elseif($_SESSION['adminRole'] == 'b'){
            
        }elseif($_SESSION['adminRole'] == 'c'){
            
        }else{
            //do nothing
        }
        ?>

		<li class="w3-dropdown-hover tgt-full-width">
		    <a href="#"><img src="../icons/undergradute.png" class="tgt-icon">&nbsp;View Students <i class="fa fa-caret-down"></i></a>
		    <div class="w3-dropdown-content w3-green w3-card-4">
		      <a href="studentList.php?action=Fresh">Fresh</a>	
		      <a href="studentList.php?action=ND">ND</a>
		      <a href="studentList.php?action=HND">HND</a>
		      <a href="studentList.php?action=BSC">BSc</a>
		    </div>
		  </li>
		  
		  <li>
		    <a href="screen.php"><img src="../icons/undergradute.png" class="tgt-icon">&nbsp;Screen Students</a>
		  </li>

		  <li><a href="logout.php"><img src="../icons/logout.png" class="tgt-icon">&nbsp;Logout</a></li>
		  
		  </ul>
		  
		  <script type="text/javascript">
        	function drawableDash(id){
        		var x = document.getElementById(id);
        		
        		var dashCon = document.getElementById('primary-menu');
        		var dashArea = document.getElementById('dashMain');
        		if(x.style.display == "block"){
        			x.style.display = "none";
        		}else{
        			x.style.display = "block";
        		}
        		
        // 		window.addEventListener("mouseup", function(e){
        		    
        // 		    if(e.target != x && e.target.parentNode != x){
        // 		        x.style.display = "none";
        // 		    }
        		    
        // 		    });
        	}
        </script>

</div>
<!--end of dashmenu-->