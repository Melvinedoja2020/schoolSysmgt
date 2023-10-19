<?php require_once('adminpage.php'); ?>
<?php require_once('sessionlink.php'); ?>
<?php
$insertstudentreg2 = "UPDATE $table8 SET 
parentname = '$xparentname', contactaddress = '$xcontactaddress', postaladdress = '$xpostaladdress', pphone = '$xpphone', pemail = '$xpemail', officephone = '$xofficephone', profession = '$xprofession' WHERE admissionno = '$sadmissionno' ";
$resultofstudentreg2 = $query($insertstudentreg2, $conn);
if ($resultofstudentreg2) {
header("Location: updateprofile2.php");
exit;
}
else {
header("Location: updateprofile3.php");
exit;
}
?>