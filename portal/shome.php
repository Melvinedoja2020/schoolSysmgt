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
				<li><a href="#" class="top_icon"><span class="ui-icon ui-icon-person"></span>Logged in with Card Number -</a></li>
				<li><a href="#" class="new_messages top_alert"><?php echo $scardno; ?></a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div> <!-- .content_pad -->
		
	</div> <!-- #top -->	
	
	<div id="header">
		
		<div class="content_pad">
			<h1><a href="shome.php">School Portal</a></h1>
			
			<ul id="nav">
				<li class="nav_icon"><a href="shome.php"><span class="ui-icon ui-icon-home"></span>Home</a></li>

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
	
	
	<h2 class="accordion_panel"><a href="#">Welcome to the School Portal</a></h2> 
	<div class="accordion_content"> 
		<div class="block"> 
			<p>We welcome Parents & Guardians to this unique school portal. We have designed this portal so 

that you can access priviledged information about your child/wards which ordinarily you would have gone to the school for 

and probably spend time, energy and money.</p> 
			
			<p>You can easily view several information about your ward or child. </p> 
		</div> 
	</div> 	
				
				<h2 class="accordion_panel"><a href="#">Student Profile</a></h2> 
	<div class="accordion_content"> 
		<div class="block"> 
			
<p align="center">STUDENT PROFILE</p>
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
</div> 
</div>	
	
<h2 class="accordion_panel"><a href="#">Parents Profile</a></h2> 
	<div class="accordion_content"> 
		<div class="block"> 
<?php
$studentprofilesql = "SELECT * FROM $table8 WHERE admissionno = '".$sadmissionno."' ";
$queryprofile = $query($studentprofilesql, $conn);
$i = 1;
while ($stfetch = $fetch($queryprofile)) {
?>		
<div align="center">CHILD'S PHOTO<br/>
<table width="150px" border="0" align="center" height="150px">
  <tr>
    <td align="center"><?php $stpix = $sadmissionno.".png"; echo "<img src='photo/$stpix' width='150px' height='150px' />"; ?></td>
  </tr>
</table>
</div><br/>	
	<table border="1" align="center" class="vtable2" width="90%">
      <tr>
        <td>PARENTS NAME </td>
        <td><?php echo "<b>$stfetch[34]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>CONTACT ADDRESS </td>
        <td><?php echo "<b>$stfetch[35]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>POSTAL ADDRESS </td>
        <td><?php echo "<b>$stfetch[36]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>PARENT EMAIL </td>
        <td><?php echo "<b>$stfetch[37]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>PARENTS  PHONE </td>
        <td><?php echo "<b>$stfetch[38]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>OFFICE PHONE </td>
        <td><?php echo "<b>$stfetch[39]</b>";?>&nbsp;</td>
      </tr>
      <tr>
        <td>PROFESSION</td>
        <td><?php echo "<b>$stfetch[40]</b>";?>&nbsp;</td>
      </tr>
  </table>
      <p>&nbsp;</p>
	<?php } ?>
		</div> 
	</div> 		
		
	<h2 class="accordion_panel"><a href="#">View Tuition Summary</a></h2> 
	<div class="accordion_content"> 
		<div class="block"> 
      <p align="center">TUITION SUMMARY</p>
<div align="center">	  
	<?php
$studentprofilesql = "SELECT SUM(deposit1+deposit2+deposit3+deposit4+deposit5) FROM $table28 WHERE admissionno = '".$sadmissionno."' ";
$queryprofile = $query($studentprofilesql, $conn);
while ($stfetch = $fetch($queryprofile)) {
$tcredit = $stfetch[0];
}
$astudentprofilesql = "SELECT SUM(totaldeposit) FROM $table28 WHERE admissionno = '".$sadmissionno."'";
$aqueryprofile = $query($astudentprofilesql, $conn);
while ($astfetch = $fetch($aqueryprofile)) {
$tfees = $astfetch[0];
}
$tbal = $tfees-$tcredit;
?>
  
	  <table width="50%" border="1" align="center" class="tiny">
  <tr>
    <td>TOTAL TUITION PAID</td>
    <td>N<?php echo number_format($tcredit);?></td>
  </tr>
  <tr>
    <td>TOTAL TUITION CHARGED</td>
    <td>N<?php echo number_format($tfees);?></td>
  </tr>
  <tr>
    <td>BALANCE</td>
    <td>N<?php echo number_format($tbal);?></td>
  </tr>
</table>
<br/>
</div>
<p align="center"><span class="tiny">PAYMENT DETAILS</span></p>
      <table width="100%" border="1" align="center" class="tiny">
        <tr>
          <td width="5%">SN</td>
          <td width="10%">CLASS</td>
          <td width="15%">TERM</td>
		  <td width="10%">SESSION</td>
          <td width="15%">TOTAL PAID </td>
          <td width="15%">TOTAL CHARGED </td>
          <td width="15%">BALANCE</td>
          <td width="15%">STATUS</td>
        </tr>
      </table>
	  <?php
$studentprofilesql = "SELECT * FROM $table28 WHERE admissionno = '".$sadmissionno."' ORDER BY currentclass AND currentterm ";
$queryprofile = $query($studentprofilesql, $conn);
$i = 1;
while ($stfetch = $fetch($queryprofile)) {
$tdeposit = $stfetch[7]+$stfetch[8]+$stfetch[9]+$stfetch[10]+$stfetch[11];
$amountcharged = $stfetch[22]; 
$diff = $amountcharged-$tdeposit; 
?>
<table width="100%" border="1" align="center" class="tiny">
  <tr>
    <td width="5%"><?php echo $i++; ?></td>
    <td width="10%"><?php echo "<b>$stfetch[3]</b>";?></td>
    <td width="15%"><?php echo "<b>$stfetch[4]</b>";?></td>
    <td width="10%"><?php echo "<b>$stfetch[5]</b>";?></td>
    <td width="15%"><?php echo number_format($tdeposit);?></td>
    <td width="15%"><?php echo number_format($stfetch[22]);?></td>
    <td width="15%"><?php echo number_format($diff);?></td>
    <td width="15%"><?php if ($diff < 0) { echo "PAYMENT IN ARREARS"; } elseif ($diff > 0) { echo "PART PAYMENT"; } else { 

echo "FULL PAYMENT"; } ?></td>
  </tr>
</table>
<?php } ?>
<br/> <br/>
		</div> 
	</div> 

	
	</div> <!-- .accordion_container -->
		</div> <!-- .x9 -->
		<div class="x3">
			<h3>News Flash </h3>
			
		    <p>Welcome to our school portal; we have designed this portal to improve your access to information. </p>
			
		</div> <!-- .x3 -->
		
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