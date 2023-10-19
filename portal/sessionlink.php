<?php
session_start();
if ($_POST && !empty($_POST['admissionno'])) {
$_SESSION['admissionno'] = $_POST['admissionno'];
}
if ($_POST && !empty($_POST['cardno'])) {
$_SESSION['cardno'] = $_POST['cardno'];
}
if ($_POST && !empty($_POST['surname'])) {
$_SESSION['surname'] = $_POST['surname'];
}
if ($_POST && !empty($_POST['othernames'])) {
$_SESSION['othernames'] = $_POST['othernames'];
}
if ($_POST && !empty($_POST['currentclass'])) {
$_SESSION['currentclass'] = $_POST['currentclass'];
}
if ($_POST && !empty($_POST['currentterm'])) {
$_SESSION['currentterm'] = $_POST['currentterm'];
}
if ($_POST && !empty($_POST['currentsession'])) {
$_SESSION['currentsession'] = $_POST['currentsession'];
}
if ($_POST && !empty($_POST['pixcode'])) {
$_SESSION['pixcode'] = $_POST['pixcode'];
}
if ($_POST && !empty($_POST['examname'])) {
$_SESSION['examname'] = $_POST['examname'];
}
if ($_POST && !empty($_POST['staffid'])) {
$_SESSION['staffid'] = $_POST['staffid'];
}
if ($_POST && !empty($_POST['coordinator'])) {
$_SESSION['coordinator'] = $_POST['coordinator'];
}
if ($_POST && !empty($_POST['mtype'])) {
$_SESSION['mtype'] = $_POST['mtype'];
}
if ($_POST && !empty($_POST['xdateheld'])) {
$_SESSION['xdateheld'] = $_POST['xdateheld'];
}
if ($_POST && !empty($_POST['dateheld1'])) {
$_SESSION['dateheld1'] = $_POST['dateheld1'];
}
if ($_POST && !empty($_POST['dateheld2'])) {
$_SESSION['dateheld2'] = $_POST['dateheld2'];
}
if ($_POST && !empty($_POST['dateheld3'])) {
$_SESSION['dateheld3'] = $_POST['dateheld3'];
}
if ($_POST && !empty($_POST['stsearch'])) {
$_SESSION['stsearch'] = $_POST['stsearch'];
}
if ($_POST && !empty($_POST['xpaymentdate'])) {
$_SESSION['xpaymentdate'] = $_POST['xpaymentdate'];
}
if ($_POST && !empty($_POST['xexpenses'])) {
$_SESSION['xexpenses'] = $_POST['xexpenses'];
}
if ($_POST && !empty($_POST['budgettype'])) {
$_SESSION['budgettype'] = $_POST['budgettype'];
}
if ($_POST && !empty($_POST['budgetcategory'])) {
$_SESSION['budgetcategory'] = $_POST['budgetcategory'];
}
if ($_POST && !empty($_POST['paymentmonth'])) {
$_SESSION['paymentmonth'] = $_POST['paymentmonth'];
}
if ($_POST && !empty($_POST['paymentyear'])) {
$_SESSION['paymentyear'] = $_POST['paymentyear'];
}
if ($_POST && !empty($_POST['id'])) {
$_SESSION['id'] = $_POST['id'];
}
if ($_POST && !empty($_POST['termbegins1'])) {
$_SESSION['termbegins1'] = $_POST['termbegins1'];
}
if ($_POST && !empty($_POST['termbegins2'])) {
$_SESSION['termbegins2'] = $_POST['termbegins2'];
}
if ($_POST && !empty($_POST['termbegins3'])) {
$_SESSION['termbegins3'] = $_POST['termbegins3'];
}
if ($_POST && !empty($_POST['termends1'])) {
$_SESSION['termends1'] = $_POST['termends1'];
}
if ($_POST && !empty($_POST['termends2'])) {
$_SESSION['termends2'] = $_POST['termends2'];
}
if ($_POST && !empty($_POST['termends3'])) {
$_SESSION['termends3'] = $_POST['termends3'];
}
if ($_POST && !empty($_POST['descp'])) {
$_SESSION['descp'] = $_POST['descp'];
}



$sadmissionno = $_SESSION['admissionno'];
$scardno = $_SESSION['cardno'];
$surname = $_SESSION['surname'];
$othernames = $_SESSION['othernames'];
$spixcode = $_SESSION['pixcode'];
$scurrentclass = $_SESSION['currentclass'];
$scurrentterm = $_SESSION['currentterm'];
$scurrentsession = $_SESSION['currentsession'];
$sexamname = $_SESSION['examname'];
$sstaffid = $_SESSION['staffid'];
$scoordinator = $_SESSION['coordinator'];
$smtype = $_SESSION['mtype'];
$sdateheld = $_SESSION['xdateheld'];
$sdateheldx = $_SESSION['dateheld1'];
$sdateheldx .= $_SESSION['dateheld2'];
$sdateheldx .= $_SESSION['dateheld3'];
$smanysearch = $_SESSION['stsearch'];
$spaymentdate = $_SESSION['xpaymentdate'];
$sexpenses = $_SESSION['xexpenses'];
$sbudgetcategory = $_SESSION['budgetcategory'];
$sbudgettype = $_SESSION['budgettype'];
$paymentmonth = $_SESSION['paymentmonth'];
$paymentyear = $_SESSION['paymentyear'];
$sid = $_SESSION['id'];

$stermbegins = $_SESSION['termbegins1'];
$stermbegins .= $_SESSION['termbegins2'];
$stermbegins .= $_SESSION['termbegins3'];

$stermends = $_SESSION['termends1'];
$stermends .= $_SESSION['termends2'];
$stermends .= $_SESSION['termends3'];

$sdescp = $_SESSION['descp'];

?>