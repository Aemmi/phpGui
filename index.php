<?php
session_start();
include_once("src/dbCon.class.php");
$db = new DBRequest();
include_once("src/functions.inc.php");
import("html.class.php");

$html = new HtmlConfig();

$html->startHtml();
$html->meta_description = "Welcome to Peace Institute of Management and Technology";
$html->title = "PIMT Student Portal::Welcome";
$html->author = "PIMT";
$html->description = "Peace Institute Of Management And technology Mbarakom Abak (An Innovative Polytechnic) Was Established By The Proprietor, Mr. Efefiong Udosen In 2016 On The Basis Of Decree 33 Of 1978 and The Amended Decree 5 Of 1993. The Institution is A Private Innovative Polytechnic.";
$html->keywords = "Peace Institute Of Management And technology, undergradutae, Polytechnic, PIMT, Private Innovative Polytechnic";

$html->addCss("timaCss/tgt-style.css");
$html->addCss("timaCss/w3css.css");
$html->addJs("timaJs/timaJs.js");

$html->renderHtmlHead();
$html->closeHtmlConfig();
?>

<body style="background-color: #383838">

<div class="app">
	
<?php include_once("temp/header.temp.php"); ?>

<div class="tgt-row">

	<?php include_once("temp/slider.temp.php"); ?>

	<div class="tgt-col-4-wrapper tgt-center">
		<div class="tgt-full-width">
			<div style="width: 49%; float: left" class="tgt-padded w3-yellow">
				<a href="#" onclick="hideShow('freshStudentModal');"><span class="tgt-full-width" style="background-image: url('/icons/users.png'); background-size: 100% 100%; background-repeat: no-repeat; height: 100px">
					<b class="w3-white">Fresh Students Portal</b>
				</span></a>
			</div>

			<div  style="width: 49%; float: left; margin-left: 1%" class=" tgt-padded w3-green">
				<a href="#" onclick="hideShow('ndStudentModal');"><span class="tgt-full-width" style="background-image: url('/icons/users.png'); background-size: 100% 100%; background-repeat: no-repeat; height: 100px">
					<b class="w3-white w3-text-black">ND Students Portal</b>
				</span></a>
			</div>
		</div>
		<div class="tgt-clear"></div>
		<div class="tgt-full-width">
			<div style="width: 49%; float: left;" class="tgt-padded w3-yellow">
				<a href="#" onclick="hideShow('hndStudentModal');"><span class="tgt-full-width" style="background-image: url('/icons/users.png'); background-size: 100% 100%; background-repeat: no-repeat; height: 100px">
					<b class="w3-white">HND Students Portal</b>
				</span></a>
			</div>

			<div style="width: 49%; float: left; margin-left: 1%" class="tgt-padded w3-green">
				<a href="#" onclick="hideShow('degreeStudentModal');"><span class="tgt-full-width" style="background-image: url('/icons/users.png'); background-size: 100% 100%; background-repeat: no-repeat; height: 100px">
					<b class="w3-white w3-text-black">BSc/BA/BEd Portal</b>
				</span></a>
			</div>
		</div>
		
		<div class="clear"></div>
		
		<div class="tgt-full-width">
		    <hr>
				<a href="freshApplication.php" target="_blank"><button class="w3-btn w3-green w3-text-white">Fresh Application</button></a>
			<hr>
		</div>
        
		<div class="tgt-col-4 tgt-borderless">
			<h3>Registration Guideline for Fresh Students</h3>
			<div class="tgt-full-width">
				<a href="#" onclick="hideShow('regGuideline');"><button class="w3-btn w3-green w3-text-white">Click Here</button></a>
			</div>
		</div>
	</div>
	<!--end of col-4-->
</div>
<!--end of row-->

<?php include_once("temp/footer.temp.php"); ?>

<!--/////////////////////////////////////////-->
<!--modals-->
<div id="freshStudentModal" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
    	
    	<span onclick="document.getElementById('freshStudentModal').style.display='none'"
	      class="w3-closebtn">&times;</span>
    	<div class="tgt-col-3-wrapper">
    		<div class="tgt-col-3 tgt-borderless" style="background-image: url(/icons/lock.png); background-size: 100% 100%; background-repeat: no-repeat; height: 200px; margin-top: 50px">
    			
    		</div>
    	</div>

    	<div class="tgt-col-6-wrapper">
    		<h2 class="tgt-center">Fresh Students Login</h2>
    	<form method="post" action="loginCheck.php">	
	      <table class="w3-table-responsive">
	      	<tr>
	      		<th>Application Number</th>
	      		<td><input type="text" name="regNum" class="tgt-form-input" required="required" placeholder="e.g ND/2018/1000"></td>
	      	</tr>
	      	<tr>
	      		<th>Password</th>
	      		<td><input type="password" name="pw" class="tgt-form-input" required="required" placeholder="e.g password"></td>
	      	</tr>
	      	<tr>
	      		<th colspan="2"><input type="submit" name="freshLoginBtn" class="w3-btn w3-green w3-text-white tgt-full-width" value="Log In"></th>
	      	</tr>
	      </table>
	      </form>
	  </div>

	  <div class="tgt-col-3-wrapper"></div>

    </div>
  </div>
</div>
<!--end of fresh student modal-->

<div id="ndStudentModal" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
    	
    	<span onclick="document.getElementById('ndStudentModal').style.display='none'"
	      class="w3-closebtn">&times;</span>
    	<div class="tgt-col-3-wrapper">
    		<div class="tgt-col-3 tgt-borderless" style="background-image: url(/icons/lock2.png); background-size: 100% 100%; background-repeat: no-repeat; height: 200px; margin-top: 50px">
    			
    		</div>
    	</div>

    	<div class="tgt-col-6-wrapper">
    		<h2 class="tgt-center">ND Students Login</h2>
    	<form method="post" action="loginCheck.php">
	      <table class="w3-table-responsive">
	      	<tr>
	      		<th>Matric. Number</th>
	      		<td><input type="text" name="mat_num" class="tgt-form-input" required="required"></td>
	      	</tr>
	      	<tr>
	      		<th>Password</th>
	      		<td><input type="password" name="pw" class="tgt-form-input" required="required" placeholder="**********"></td>
	      	</tr>
	      	<tr>
	      		<th colspan="2"><input type="submit" name="ndLoginBtn" class="w3-btn w3-green w3-text-white tgt-full-width" value="Log In"></th>
	      	</tr>
	      </table>
	      </form>
	  </div>

	  <div class="tgt-col-3-wrapper"></div>

    </div>
  </div>
</div>
<!--end of nd student modal-->

<div id="hndStudentModal" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
    	
    	<span onclick="document.getElementById('hndStudentModal').style.display='none'"
	      class="w3-closebtn">&times;</span>
    	<div class="tgt-col-3-wrapper">
    		<div class="tgt-col-3 tgt-borderless" style="background-image: url(/icons/lock.png); background-size: 100% 100%; background-repeat: no-repeat; height: 200px; margin-top: 50px">
    			
    		</div>
    	</div>

    	<div class="tgt-col-6-wrapper">
    		<h2 class="tgt-center">HND Students Login</h2>
    	<form method="post" action="loginCheck.php">	
	      <table class="w3-table-responsive">
	      	<tr>
	      		<th>Matric Number</th>
	      		<td><input type="text" name="mat_num" class="tgt-form-input" required="required"></td>
	      	</tr>
	      	<tr>
	      		<th>Password</th>
	      		<td><input type="password" name="pw" class="tgt-form-input" required="required" placeholder="e.g password"></td>
	      	</tr>
	      	<tr>
	      		<th colspan="2"><input type="submit" name="hndLoginBtn" class="w3-btn w3-green w3-text-white tgt-full-width" value="Log In"></th>
	      	</tr>
	      </table>
	      </form>
	  </div>

	  <div class="tgt-col-3-wrapper"></div>

    </div>
  </div>
</div>
<!--end of fresh student modal-->

<div id="degreeStudentModal" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
    	
    	<span onclick="document.getElementById('degreeStudentModal').style.display='none'"
	      class="w3-closebtn">&times;</span>
    	<div class="tgt-col-3-wrapper">
    		<div class="tgt-col-3 tgt-borderless" style="background-image: url(/icons/lock.png); background-size: 100% 100%; background-repeat: no-repeat; height: 200px; margin-top: 50px">
    			
    		</div>
    	</div>

    	<div class="tgt-col-6-wrapper">
    		<h2 class="tgt-center">Degree Students Login</h2>
    	<form method="post" action="loginCheck.php">	
	      <table class="w3-table-responsive">
	      	<tr>
	      		<th>Matric Number</th>
	      		<td><input type="text" name="mat_num" class="tgt-form-input" required="required"></td>
	      	</tr>
	      	<tr>
	      		<th>Password</th>
	      		<td><input type="password" name="pw" class="tgt-form-input" required="required" placeholder="e.g password"></td>
	      	</tr>
	      	<tr>
	      		<th colspan="2"><input type="submit" name="bscLoginBtn" class="w3-btn w3-green w3-text-white tgt-full-width" value="Log In"></th>
	      	</tr>
	      </table>
	      </form>
	  </div>

	  <div class="tgt-col-3-wrapper"></div>

    </div>
  </div>
</div>
<!--end of fresh student modal-->

<div id="regGuideline" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
    	
    	<span onclick="document.getElementById('regGuideline').style.display='none'"
	      class="w3-closebtn">&times;</span>
    	<div class="tgt-col-3-wrapper">
    		<div class="tgt-col-3 tgt-borderless" style="background-image: url(/icons/list.png); background-size: 100% 100%; background-repeat: no-repeat; height: 200px; margin-top: 50px">
    			
    		</div>
    	</div>

    	<div class="tgt-col-6-wrapper">
    		<h2 class="tgt-center">Registration Guideline for Fresh Students</h2>
    		<div class="tgt-col-6">
    			<p>The following are the registration guidelines for fresh students of SIMT</p>
    			<p><b>A. Authentication</b></p>
                <p>All students whether fresh or returning need to be authenticated before they can use the portal
                    Fresh students need their (i) Admission letter serial number, (ii) Application Number and (iii) Registration Number for authentication. Fresh students are free to choose their password at the point of authentication. After successful authentication, a username is generated for a student.</p>
                    <p>Returning students need their (i) Registration Number, (ii) password (iii) Last Session's Password for authentication. Returning students have a choice of changing their password at the point of authentication.</p>
                    <p>All passwords must be at least 6 characters long and are case-sensitive.</p>
                    <hr>
                    <p><b>B. Login</b></p>
                    <p>After successful authentication, students can use their respective username and password to login in order to start or continue with the registration process.</p>
                    <hr>
                    <p><b>C. Registration Procedure</b></p>
                    <p>The registration procedure is as follows:</p> 
                    <ul>
                        <li>Profile Update: Students must first update their profile. Note that students are strongly advised to update their phone numbers and emails </li>
                    <li>Student Information Form (S.I.F.): After profile update students can generate and download/print their Student Information Form (SIF).</li>
                    <li>Student Payment Receipt (S.P.R.): After payment is validated and processed, students must generated and download/print Student Payment Receipt (SPR) in order to continue with the registration.</li> 
                    <li>Course Registration: After printing the SPR, a student can register his/her courses. Students are strongly advised to seek the guidance of their respective level coordinators on the courses they are supposed to register with any limitations and/or restrictions.</li> 
                    <li>Course Registration Form (C.R.F.): After course registration students must generate and download/print the Course Registration Form (CRF). The CRF contains the details of the registered courses.</li> 
                    <li>Registration Acknowledgement Slip (R.A.S.): After printing the CRF, students can print the Registration Acknowledgement Slip (RAS) to acknowledge that they have successfully completed their registration process.</li> 
                    <li>Students can logout and continue the registration at a later time.</li>

    			</ul>
    		</div>
	  </div>

	  <div class="tgt-col-3-wrapper"></div>

    </div>
  </div>
</div>
<!--end of reg guideline modal-->

</div>
<!--end of app-->
<script type="text/javascript" src="timaJs/timaSlider.js"></script>
</body>

<?php
$html->endHtml();
?>	