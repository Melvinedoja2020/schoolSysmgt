<?php require_once('adminpage.php'); ?>
<?php require_once('sessionlink.php'); ?>
<?php
if (!isset($sadmissionno)) {
header("Location: index2.php");
exit;
}
?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
	<title>School Portal</title> 
	<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/form.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/grid.css" type="text/css" media="screen" title="no title" />	
	<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/ui-darkness/jquery-ui-1.8.12.custom.css" type="text/css" media="screen" 

title="no title" />
	<link rel="stylesheet" href="../css/plugin/jquery.visualize.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/plugin/facebox.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/plugin/uniform.default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/plugin/dataTables.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="../css/custom.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="smhome.css" type="text/css" media="screen" title="no title" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
.vtable {
width: 300px;
height: auto;
font-size: 9px;
color: #000;
line-height: 20px;
border: #000 1px solid;
text-align: left;
margin-top: 10px;
margin-left: 10px;
}
.vtable2 {
width: 500px;
height: auto;
font-size: 11px;
color: #000;
line-height: 20px;
border: #000 1px solid;
text-align: left;
margin-top: 10px;
margin-left: 10px;
text-transform: uppercase;
}
td {
border: #000 1px solid;
}
.tiny {
font-size: 10px;
}
</style>
</head>  
<body> 
<div id="wrapper">
	<div id="top">
		
		<div class="content_pad">			
			<ul class="right">
				<li><a href="#" class="top_icon"><span class="ui-icon ui-icon-person"></span>Logged in with Card Number:</a></li>
				<li><a href="#" class="new_messages top_alert"><?php echo $scardno; ?></a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div> <!-- .content_pad -->
		
	</div> <!-- #top -->	
	
	<div id="header">
		
		<div class="content_pad">
			<h1><a href="shome.php">School Portal</a></h1>
			
			<ul id="nav">
				<li class="nav_icon"><a href="shome.php"><span class="ui-icon ui-icon-

home"></span>Home</a></li>

				<li class="nav_dropdown nav_icon">
					<a href="#"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span>Profile</a>
					
					<div class="nav_menu">			
						<ul>
							<li><a href="studentprofile.php">Student Profile</a></li>	
							<li><a href="parentsprofile.php">Parents Profile</a></li>	
							<li><a href="updateprofile.php">Update Profile</a></li>	
						</ul>
						
					</div>
				</li>
				<li class="nav_dropdown nav_icon">
					<a href="#"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span>Exams</a>
					
					<div class="nav_menu">			
						<ul>
							<li><a href="testscores.php">Test Scores</a></li>	
							<li><a href="termreport.php">Termly Report</a></li>	
							<li><a href="transcript.php">Transcripts</a></li>	
							<li><a href="quiz.php">Quiz & Competitions</a></li>	
						</ul>
						
					</div>
				</li>

<li class="nav_dropdown nav_icon">
					<a href="#"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span>Payments</a>
					
					<div class="nav_menu">			
						<ul>
							<li><a href="tuitionslip.php">Termly Tuition Slip</a></li>	
							<li><a href="tuition.php">Tuition Summary</a></li>	
							<li><a href="payslip.php">Other Payments</a></li>	
						</ul>
					</div>
				</li>
				<li class="nav_icon"><a href="pta.php"><span class="ui-icon ui-icon-gear"></span>PTA</a></li>
				<li class="nav_icon"><a href="forum.php"><span class="ui-icon ui-icon-signal"></span>Forum</a></li>
				<li class="nav_dropdown nav_icon_only">
					<a href="#">Support &nbsp;</a>
					<div class="nav_menu">
						<ul>
							<li><a href="chat.php">Chat</a></li>
							<li><a href="message.php"></a></li>
						</ul>
					</div> <!-- .menu -->
				</li>
			</ul>
		</div> <!-- .content_pad -->
		
	</div> <!-- #header -->	
	
	<div id="masthead">
		
		<div class="content_pad">
<?php
$studentprofilesql = "SELECT * FROM $table1";
$queryprofile = $query($studentprofilesql, $conn);
$i = 1;
while ($stfetch = $fetch($queryprofile)) { ?>			
			<h1><?php echo $stfetch[1]; } ?></h1>
			
			<div id="bread_crumbs">
			 <a href="#">Home</a></div> 
			<!-- #bread_crumbs -->
			</div> <!-- #search -->
			
		</div> <!-- .content_pad -->
		
	</div> <!-- #masthead -->	
	
	<div id="content" class="xgrid">
		
		<div class="x9">
			
			
	<div class="accordion_container">
				
			
<h2 align="center">EXAMINATION REPORTS</h2>

<p align="center">&nbsp;</p>
      <p align="center"><span class="pstyle"><b>Reports are not available at the moment ! </b></span></p>
	</div> <!-- .accordion_container -->
		</div> <!-- .x9 -->
	  <div class="x3">
			<h3>News Flash </h3>
			
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
	    </div> 
		<!-- .x3 -->
		
	</div> <!-- #content -->
	
	<div id="footer">		
		<div class="content_pad">			
			<p>Powered by <a href="http://www.sptechnigeria.com">Server Point Technologies Ltd.</a>.</p>
		</div> <!-- .content_pad -->
	</div> <!-- #footer -->		
	
</div> <!-- #wrapper -->

<script src="../js/jquery/jquery-1.5.2.min.js"></script>
<script src="../js/jquery/jquery-ui-1.8.12.custom.min.js"></script>
<script src="../js/misc/excanvas.min.js"></script>
<script src="../js/jquery/facebox.js"></script>
<script src="../js/jquery/jquery.visualize.js"></script>
<script src="../js/jquery/jquery.dataTables.min.js"></script>
<script src="../js/jquery/jquery.tablesorter.min.js"></script>
<script src="../js/jquery/jquery.uniform.min.js"></script>
<script src="../js/jquery/jquery.placeholder.min.js"></script>

<script src="../js/widgets.js"></script>
<script src="../js/dashboard.js"></script>

<script type="text/javascript">
	
$(document).ready ( function () 
{
	Dashboard.init ();			
		
	$('.accordion_container').accordion ();
	$('.tab_container').tabs ();	
});

</script>

</body> 
 
</html>