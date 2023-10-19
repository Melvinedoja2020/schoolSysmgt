<?php
session_start();
if ($_POST && !empty($_POST['admissionno'])) {
$_SESSION['admissionno'] = $_POST['admissionno'];
}
if ($_POST && !empty($_POST['cardno'])) {
$_SESSION['cardno'] = $_POST['cardno'];
}
if ($_POST && !empty($_POST['travelid'])) {
$_SESSION['travelid'] = $_POST['travelid'];
}
if ($_POST && !empty($_POST['adminname'])) {
$_SESSION['adminname'] = $_POST['adminname'];
}
if ($_POST && !empty($_POST['adminpass'])) {
$_SESSION['adminpass'] = $_POST['adminpass'];
}


$sadmissionno = $_SESSION['admissionno'];
$scardno = $_SESSION['cardno'];
$stravelid = $_SESSION['travelid'];
$sadminname = $_SESSION['adminname'];
$sadminpass = $_SESSION['adminpass'];


?>