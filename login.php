<?php require_once('admin.php'); ?>
<?php require_once('asessionlink.php'); ?>
<?php
if(empty($admissionno) or empty($cardno)) {
header("Location: index2.html");
exit;
}

$bim = "SELECT * FROM $table1 WHERE admissionno = '".$admissionno."' AND cardno = '".$cardno."' ";
$xbim = $query($bim, $conn);
$fetchusers = $querynum($xbim);

if ($password != $fetchusers) {
header("Location: ./portal/shome.php");
exit;
}
else {
header("Location: index2.html");
exit;
}
?>