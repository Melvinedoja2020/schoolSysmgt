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
							<li><a href="testcores.php">Test Scores</a></li>	
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
				
			
<h2 align="center">STUDENT PROFILE</h2>
<?php
$studentprofilesql = "SELECT * FROM $table8 WHERE admissionno = '".$sadmissionno."' ";
$queryprofile = $query($studentprofilesql, $conn);
$i = 1;
while ($stfetch = $fetch($queryprofile)) {
?>
<div align="center">
<table width="150px" border="0" align="center" height="150px">
  <tr>
    <td align="center"><?php $stpix = $sadmissionno.".png"; echo "<img src='photo/$stpix' width='150px' height='150px' />"; ?></td>
  </tr>
</table>
</div>
<br/>
<table width="95%" align="center">
  <tr>
    <td><table width="80%" border="1" align="center" class="vtable">
      <tr>
        <td>SURNAME</td>
        <td><?php echo "<b>$stfetch[1]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>OTHER NAMES </td>
        <td><?php echo "<b>$stfetch[2]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>CURRENT CLASS </td>
        <td><?php echo "<b>$stfetch[3]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>CURRENT TERM </td>
        <td><?php echo "<b>$stfetch[4]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>CURRENT SESSION </td>
        <td><?php echo "<b>$stfetch[5]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>FACULTY</td>
        <td><?php echo "<b>$stfetch[6]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>STATUS</td>
        <td><?php echo "<b>$stfetch[7]</b>";?>&nbsp;</td>
      </tr>
    </table></td>
    <td><table width="80%" border="1" align="center" class="vtable">
      <tr>
        <td>ADMISSION NO </td>
        <td><?php echo "<b>$stfetch[8]</b>";?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="80%" border="1" align="center" class="vtable">
      <tr>
        <td>SEX</td>
        <td><?php echo "<b>$stfetch[13]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>DATE OF BIRTH </td>
        <td><?php echo "<b>$stfetch[14]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>PLACE OF BIRTH </td>
        <td><?php echo "<b>$stfetch[15]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>HOME TOWN </td>
        <td><?php echo "<b>$stfetch[16]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>LOCAL GOVT </td>
        <td><?php echo "<b>$stfetch[17]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>STATE OF ORIGIN </td>
        <td><?php echo "<b>$stfetch[18]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>NATIONALITY</td>
        <td><?php echo "<b>$stfetch[19]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>RELIGION</td>
        <td><?php echo "<b>$stfetch[20]</b>";?>&nbsp;</td>
      </tr>
    </table>
      <table width="304" border="1" align="center" class="vtable">
      <tr>
        <td width="141">PREVIOUS SCHOOL</td>
        <td width="151"><?php echo "<b>$stfetch[30]</b>";?>&nbsp;</td>
      </tr>
      </table></td>
    <td><table width="80%" border="1" align="center" class="vtable">
        <tr>
          <td>HEIGHT</td>
          <td><?php echo "<b>$stfetch[21]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>WEIGHT</td>
          <td><?php echo "<b>$stfetch[22]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>MEDICAL REPORTS </td>
          <td><?php echo "<b>$stfetch[23]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>EMAIL</td>
          <td><?php echo "<b>$stfetch[24]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>PHONE</td>
          <td><?php echo "<b>$stfetch[25]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>SPORTS</td>
          <td><?php echo "<b>$stfetch[26]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>HOBBIES</td>
          <td><?php echo "<b>$stfetch[27]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>CAREER INTEREST </td>
          <td><?php echo "<b>$stfetch[28]</b>";?>&nbsp;</td>
        </tr>
        <tr>
          <td>REMARKS</td>
          <td><?php echo "<b>$stfetch[29]</b>";?>&nbsp;</td>
        </tr>
      </table><br/>
      <p align="center"><span class="tiny">DATE OF LAST UPDATE: <?php echo "<b>$stfetch[42]</b>"; } ?></span></p>
</td>
  </tr>
</table>

	
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