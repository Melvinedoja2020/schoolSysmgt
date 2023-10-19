<?php
$conn = sqlite_open('emdatabase.sqlite');

//Administrators Variables
$username = $_POST['username'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$cardno = $_POST['cardno'];

//Settings Variables
$table1 = "settings";
$table2 = "security";
$table3 = "classes";
$table4 = "term";
$table5 = "faculty";
$table6 = "status";
$table7 = "religion";
$table8 = "studentreg";
$table9 = "preg";
$table10 = "breg";
$table11 = "prefect";
$table12 = "examreg";
$table13 = "subject";
$table14 = "fees";
$table15 = "budg";
$table16 = "mtype";
$table17 = "examname";
$table18 = "expenses";
$table19 = "grade";
$table20 = "exexam";
$table21 = "testreg";
$table22 = "staffreg";
$table23 = "meeting";
$table24 = "staffper";
$table25 = "sms";
$table26 = "users";
$table27 = "client";
$table28 = "tuitionreg";
$table29 = "otherfees";
$table30 = "budget";
$table31 = "inventory";
$table32 = "sold";
$table33 = "salary";
$table34 = "calendar";
$table35 = "timetable";
$table36 = "testreg";


$link1 = "ADMISSION";
$link2 = "APPLICATION";
$link3 = "BOARDING";
$link4 = "STUDENT PROFILE";
$link5 = "CLASS REGISTER";
$link6 = "SCHOOL REGISTER";
$link6a = "CLASS STAT";
$link6b = "SCHOOL STAT";
$link6c = "VIEW STATUS";
$link7 = "NEW STUDENTS";
$link8 = "GRADUATED STUDENTS";
$link9 = "LEFT STUDENTS";
$link10 = "DEBTOR STUDENTS";
$link11 = "EXPELLED STUDENTS";
$link12 = "PROSPECTIVE STUDENTS";
$link13 = "MODIFY ADMISSION";
$link14 = "MODIFY PROSPECTIVE";
$link15 = "MODIFY BOARDING";
$link16 = "MODIFY PHOTO";
$link17 = "MOVE TO NEW TERM";
$link18 = "MOVE TO NEW CLASS";
$link19 = "DEMOTE STUDENTS";
$link20 = "DELETE ADMISSION";
$link21 = "DELETE PROSPECTIVE";
$link22 = "DELETE BOARDING";
$link23 = "DELETE PHOTO";
$link24 = "CREATE PREFECTS";
$link25 = "STUDENT BOARDING";
$link26 = "ALL STUDENTS BOARDING";
$link27 = "BOARDING PREFECTS";
$link28 = "BOARDING TIMETABLE";
$link29 = "INTERNAL EXAM";
$link30 = "EXTERNAL EXAM";
$link31 = "CREATE CAT";
$link32 = "VIEW CAT";
$link33 = "REPORT CARD";
$link34 = "VIEW EXTERNAL";
$link35 = "VIEW ALL EXTERNAL";
$link36 = "VIEW TRANSCRIPT";
$link37 = "MODIFY INTERNAL";
$link38 = "MODIFY EXTERNAL";
$link39 = "MODIFY CAT";
$link40 = "REGISTER STAFF";
$link41 = "PRE EMPLOYMENT";
$link42 = "STAFF PROFILE";
$link43 = "ACADEMIC STAFF";
$link44 = "NON ACADEMIC STAFF";
$link45 = "PREVIOUS STAFF";
$link46 = "VIEW PRE EMPLOYMENT";
$link47 = "MODIFY STAFF";
$link48 = "MODIFY PRE EMPLOYMENT";
$link49 = "VIEW PARENT";
$link50 = "MODIFY PARENT";
$link51 = "CREATE PTA";
$link52 = "VIEW PTA";
$link53 = "MODIFY PTA";
$link54 = "DELETE PTA";
$link55 = "CREATE MEETINGS";
$link56 = "VIEW MEETINGS";
$link57 = "MODIFY MEETINGS";
$link58 = "DELETE MEETINGS";
$link59 = "CREATE CALENDAR";
$link60 = "VIEW CALENDAR";
$link61 = "MODIFY CALENDAR";
$link62 = "DELETE CALENDAR";
$link63 = "SEND SMS";
$link64 = "STUDENT SMS";
$link65 = "PARENTS SMS";
$link66 = "STAFF SMS";
$link67 = "SEND EMAIL";
$link68 = "STUDENT EMAIL";
$link69 = "PARENTS EMAIL";
$link70 = "STAFF EMAIL";
$link71 = "CHANGE CLIENT";
$link72 = "CHANGE SUPER";
$link73 = "EXPORT DB";
$link74 = "IMPORT DB";
$link75 = "STUDENT BIRTHDAYS";
$link76 = "STAFF BIRTHDAYS";
$link77 = "PUBLISH ONLINE";
$link78 = "RETRIEVE ONLINE";
$link79 = "CREATE TIMETABLE";
$link80 = "VIEW TIMETABLE";
$link81 = "MODIFY TIMETABLE";
$link82 = "DELETE TIMETABLE";
$link83 = "STUDENT SEARCH";
$link84 = "STAFF SEARCH";
$link85 = "GENERAL SEARCH";
$link86 = "CHANGE CONTACT";
$link87 = "ADD SUBJECTS";
$link88 = "ADD CLASS";
$link89 = "ADD TERM";
$link90 = "ADD STATUS";
$link91 = "ADD ACADEMIC FEES";
$link92 = "ADD EXPENDITURES";
$link93 = "ADD MEETINGS";
$link94 = "ADD HOSTEL NAMES";
$link95 = "VIEW HELP";
$link96 = "CHANGE SMS";
$link97 = "CONTACT US";
$link98 = "NETWORK SETTINGS";
$link99 = "OTHER SETTINGS";
$link100 = "1ST DEPOSIT";
$link101 = "2ND DEPOSIT";
$link102 = "3RD DEPOSIT";
$link103 = "4TH DEPOSIT";
$link104 = "5TH DEPOSIT";
$link105 = "LATE FEES";
$link106 = "OTHER ACADEMIC FEES";
$link107 = "BOARDING FEES";
$link108 = "ADD EXPENDITURES";
$link109 = "TERM BUDGET";
$link110 = "SESSION BUDGET";
$link111 = "PURCHASED ITEMS";
$link112 = "SOLD ITEMS";
$link113 = "SALARY";
$link114 = "STUDENT BILL";
$link115 = "VSTUDENT TUITION";
$link116 = "VCLASS TUITION";
$link117 = "VTUITION BY DATE";
$link118 = "VPART PAYMENT";
$link119 = "VNO PAYMENT";
$link120 = "VFULL PAYMENT";
$link121 = "VARREARS PAYMENT";
$link122 = "VJUNIOR PAYMENT";
$link123 = "VSENIOR PAYMENT";
$link124 = "VTUITION LEDGER";
$link125 = "VALL STUDENTS";
$link126 = "VACADEMIC FEES";
$link127 = "VACADEMIC DATES";
$link128 = "VBOARDING FEES";
$link129 = "VBOARDING CLASS";
$link130 = "VSTUDENT BILL";
$link131 = "EXPENDITURE BETWEEN DATE";
$link132 = "BUDGET SLIP FOR THE TERM";
$link133 = "BUDGET SLIP FOR AN ACADEMIC YEAR";
$link134 = "BUDGET MONITORING SLIP";
$link135 = "VIEW PURCHASING";
$link136 = "SALES BOOK";
$link137 = "PRINT INVOICE";
$link138 = "INVENTORY REPORT";
$link139 = "A STAFF PAYSLIP";
$link140 = "MONTHLY PAYROLL";
$link141 = "YEARLY PAYROLL";
$link142 = "OTHER STAFF PAYMENT SLIPS";
$link143 = "MONTHLY STATEMENT OF ACCOUNTS";
$link144 = "YEARLY STATEMENT OF ACCOUNTS";
$link145 = "GENERAL LEDGER";
$link146 = "MODIFY TUITION";
$link147 = "MODIFY OTHER ACADEMIC";
$link148 = "MODIFY BOARDING FEES";
$link149 = "MODIFY STUDENT BILLS";
$link150 = "MODIFY EXPENDITURES";
$link151 = "MODIFY BUDGET";
$link152 = "MODIFY INVENTORY";
$link153 = "MODIFY SALARY";
$link154 = "DELETE TUITION";
$link155 = "DELETE OTHER ACADEMIC";
$link156 = "DELETE BOARDING FEES";
$link157 = "DELETE STUDENT BILLS";
$link158 = "DELETE EXPENDITURES";
$link159 = "DELETE BUDGET";
$link160 = "DELETE INVENTORY";
$link161 = "DELETE SALARY";
$link162 = "MODIFY SALES";
$link163 = "DELETE SALES";



$streg = "STUDENT REGISTRATION";
$stprofile = "VIEW STUDENT REGISTRATION";
$stmodify = "MODIFY REGISTRATION";

$query = "sqlite_query";
$fetch = "sqlite_fetch_array";
$querynum = "sqlite_num_rows";

$apptype = "SUPER ADMIN";


$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$currentclass = $_POST['currentclass'];
$currentterm = $_POST['currentterm'];
$currentsession = $_POST['currentsession'];
$stfaculty = $_POST['stfaculty'];
$faculty = $_POST['faculty'];
$ststatus = $_POST['ststatus'];
$previousschool = $_POST['previousschool'];
$transfercertno = $_POST['transfercertno'];
$leavingcertno = $_POST['leavingcertno'];
$testimonialno = $_POST['testimonialno'];
$dateofleaving = $_POST['dateofleaving'];
$admissionno = $_POST['admissionno'];
$classadmitted = $_POST['classadmitted'];
$termadmitted = $_POST['termadmitted'];
$sessionadmitted = $_POST['sessionadmitted'];
$dateofadmission = $_POST['dateofadmission1'];
$dateofadmission .= $_POST['dateofadmission2'];
$dateofadmission .= $_POST['dateofadmission3'];
$sex = $_POST['sex'];
$dateofbirth = $_POST['dateofbirth1'];
$dateofbirth .= $_POST['dateofbirth2'];
$dateofbirth .= $_POST['dateofbirth3'];
$placeofbirth = $_POST['placeofbirth'];
$hometown = $_POST['hometown'];
$localgovt = $_POST['localgovt'];
$state = $_POST['state'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$medicalreport = $_POST['medicalreport'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sports = $_POST['sports'];
$hobbies = $_POST['hobbies'];
$careerinterest = $_POST['careerinterest'];
$remarks = $_POST['remarks'];




$xsurname = $_POST['xsurname'];
$xothername = $_POST['xothername'];
$xcurrentclass = $_POST['xcurrentclass'];
$xcurrentterm = $_POST['xcurrentterm'];
$xcurrentsession = $_POST['xcurrentsession'];
$xfaculty = $_POST['xfaculty'];
$xstatus = $_POST['xstatus'];
$xpreviousschool = $_POST['xpreviousschool'];
$xtransfercertno = $_POST['xtransfercertno'];
$xleavingcertno = $_POST['xleavingcertno'];
$xtestimonialno = $_POST['xtestimonialno'];
$xdateofleaving = $_POST['xdateofleaving'];
$xadmissionno = $_POST['xadmissionno'];
$xclassadmitted = $_POST['xclassadmitted'];
$xtermadmitted = $_POST['xtermadmitted'];
$xsessionadmitted = $_POST['xsessionadmitted'];
$xdateofadmission = $_POST['xdateofadmission'];
$xsex = $_POST['xsex'];
$xdateofbirth = $_POST['xdateofbirth'];
$xplaceofbirth = $_POST['xplaceofbirth'];
$xhometown = $_POST['xhometown'];
$xlocalgovt = $_POST['xlocalgovt'];
$xstateoforigin = $_POST['xstateoforigin'];
$xnationality = $_POST['xnationality'];
$xreligion = $_POST['xreligion'];
$xheight = $_POST['xheight'];
$xweight = $_POST['xweight'];
$xmedicalreport = $_POST['xmedicalreport'];
$xemail = $_POST['xemail'];
$xphone = $_POST['xphone'];
$xsports = $_POST['xsports'];
$xhobbies = $_POST['xhobbies'];
$xcareerinterest = $_POST['xcareerinterest'];
$xremarks = $_POST['xremarks'];
$xsession = $_POST['xsession'];
$xterm = $_POST['xterm'];
$xstudentid = $_POST['xstudentid'];
$xfirstname = $_POST['xfirstname'];
$xfullname = $_POST['xfullname'];

$parentname = $_POST['parentname'];
$contactaddress = $_POST['contactaddress'];
$postaladdress = $_POST['postaladdress'];
$pemail = $_POST['pemail'];
$pphone = $_POST['pphone'];
$profession = $_POST['profession'];
$prefect = $_POST['prefect'];
$officephone = $_POST['officephone'];

$xparentname = $_POST['xparentname'];
$xcontactaddress = $_POST['xcontactaddress'];
$xpostaladdress = $_POST['xpostaladdress'];
$xpemail = $_POST['xpemail'];
$xpphone = $_POST['xpphone'];
$xprofession = $_POST['xprofession'];
$xprefect = $_POST['xprefect'];
$xofficephone = $_POST['xofficephone'];

$paydate = $_POST['paydate1'];
$paydate .= $_POST['paydate2'];
$paydate .= $_POST['paydate3'];
$xpaydate = $_POST['xpaydate1'];
$xpaydate .= $_POST['xpaydate2'];
$xpaydate .= $_POST['xpaydate3'];

$hosteltype = $_POST['hosteltype'];
$hostelname = $_POST['hostelname'];
$bedno = $_POST['bedno'];

$xhosteltype = $_POST['xhosteltype'];
$xhostelname = $_POST['xhostelname'];
$xbedno = $_POST['xbedno'];

$vcurrentclass = $_POST['vcurrentclass'];
$vcurrentterm = $_POST['vcurrentterm'];
$vcurrentsession = $_POST['vcurrentsession'];

$cat1a = $_POST['cat1a'];
$cat1b = $_POST['cat1b'];
$cat1c = $_POST['cat1c'];
$cat1d = $_POST['cat1d'];
$cat1e = $_POST['cat1e'];
$cat1f = $_POST['cat1f'];

$cat2a = $_POST['cat2a'];
$cat2b = $_POST['cat2b'];
$cat2c = $_POST['cat2c'];
$cat2d = $_POST['cat2d'];
$cat2e = $_POST['cat2e'];
$cat2f = $_POST['cat2f'];

$cat3a = $_POST['cat3a'];
$cat3b = $_POST['cat3b'];
$cat3c = $_POST['cat3c'];
$cat3d = $_POST['cat3d'];
$cat3e = $_POST['cat3e'];
$cat3f = $_POST['cat3f'];

$cat4a = $_POST['cat4a'];
$cat4b = $_POST['cat4b'];
$cat4c = $_POST['cat4c'];
$cat4d = $_POST['cat4d'];
$cat4e = $_POST['cat4e'];
$cat4f = $_POST['cat4f'];

$cat5a = $_POST['cat5a'];
$cat5b = $_POST['cat5b'];
$cat5c = $_POST['cat5c'];
$cat5d = $_POST['cat5d'];
$cat5e = $_POST['cat5e'];
$cat5f = $_POST['cat5f'];

$cat6a = $_POST['cat6a'];
$cat6b = $_POST['cat6b'];
$cat6c = $_POST['cat6c'];
$cat6d = $_POST['cat6d'];
$cat6e = $_POST['cat6e'];
$cat6f = $_POST['cat6f'];

$cat7a = $_POST['cat7a'];
$cat7b = $_POST['cat7b'];
$cat7c = $_POST['cat7c'];
$cat7d = $_POST['cat7d'];
$cat7e = $_POST['cat7e'];
$cat7f = $_POST['cat7f'];

$cat8a = $_POST['cat8a'];
$cat8b = $_POST['cat8b'];
$cat8c = $_POST['cat8c'];
$cat8d = $_POST['cat8d'];
$cat8e = $_POST['cat8e'];
$cat8f = $_POST['cat8f'];

$cat9a = $_POST['cat9a'];
$cat9b = $_POST['cat9b'];
$cat9c = $_POST['cat9c'];
$cat9d = $_POST['cat9d'];
$cat9e = $_POST['cat9e'];
$cat9f = $_POST['cat9f'];

$cat10a = $_POST['cat10a'];
$cat10b = $_POST['cat10b'];
$cat10c = $_POST['cat10c'];
$cat10d = $_POST['cat10d'];
$cat10e = $_POST['cat10e'];
$cat10f= $_POST['cat10fa'];

$cat11a = $_POST['cat11a'];
$cat11b = $_POST['cat11b'];
$cat11c = $_POST['cat11c'];
$cat11d = $_POST['cat11d'];
$cat11e = $_POST['cat11e'];
$cat11f = $_POST['cat11f'];

$cat12a = $_POST['cat12a'];
$cat12b = $_POST['cat12b'];
$cat12c = $_POST['cat12c'];
$cat12d = $_POST['cat12d'];
$cat12e = $_POST['cat12e'];
$cat12f = $_POST['cat12f'];

$cat13a = $_POST['cat13a'];
$cat13b = $_POST['cat13b'];
$cat13c = $_POST['cat13c'];
$cat13d = $_POST['cat13d'];
$cat13e = $_POST['cat13e'];
$cat13f = $_POST['cat13f'];

$cat14a = $_POST['cat14a'];
$cat14b = $_POST['cat14b'];
$cat14c = $_POST['cat14c'];
$cat14d = $_POST['cat14d'];
$cat14e = $_POST['cat14e'];
$cat14f = $_POST['cat14f'];

$cat15a = $_POST['cat15a'];
$cat15b = $_POST['cat15b'];
$cat15c = $_POST['cat15c'];
$cat15d = $_POST['cat15d'];
$cat15e = $_POST['cat15e'];
$cat15f = $_POST['cat15f'];

$cat16a = $_POST['cat16a'];
$cat16b = $_POST['cat16b'];
$cat16c = $_POST['cat16c'];
$cat16d = $_POST['cat16d'];
$cat16e = $_POST['cat16e'];
$cat16f = $_POST['cat16f'];

$pmd1 = $_POST['pmd1'];
$pmd2 = $_POST['pmd2'];
$pmd3 = $_POST['pmd3'];
$pmd4 = $_POST['pmd4'];
$pmd5 = $_POST['pmd5'];
$pmd6 = $_POST['pmd6'];
$pmd7 = $_POST['pmd7'];
$pmd8 = $_POST['pmd8'];
$pmd9 = $_POST['pmd9'];

$ad1 = $_POST['ad1'];
$ad2 = $_POST['ad2'];
$ad3 = $_POST['ad3'];
$ad4 = $_POST['ad4'];
$ad5 = $_POST['ad5'];
$ad6 = $_POST['ad6'];
$ad7 = $_POST['ad7'];
$ad8 = $_POST['ad8'];
$ad9 = $_POST['ad9'];
$ad10 = $_POST['ad10'];
$ad11 = $_POST['ad11'];
$ad12 = $_POST['ad12'];
$ad13 = $_POST['ad13'];
$ad14 = $_POST['ad14'];
$ad15 = $_POST['ad15'];

$post = $_POST['post'];
$tcomment = $_POST['tcomment'];
$tname = $_POST['tname'];
$hmcomment = $_POST['hmcomment'];
$prize = $_POST['prize'];
$pcomment = $_POST['pcomment'];
$promote = $_POST['promote'];
$dateofrecord = $_POST['dateofrecord'];
$termbegin = $_POST['termbegin'];


$stsubject1 = $_POST['stsubject1'];
$attendance1 = $_POST['attendance1'];
$cat1 = $_POST['cat1'];
$examscore1 = $_POST['examscore1'];
$average1 = $_POST['average1'];
$total1 = $_POST['total1'];
$grade1 = $_POST['grade1'];
$stsubject2 = $_POST['stsubject2'];
$attendance2 = $_POST['attendance2'];
$cat2 = $_POST['cat2'];
$examscore2 = $_POST['examscore2'];
$average2 = $_POST['average2'];
$total2 = $_POST['total2'];
$grade2 = $_POST['grade2'];
$stsubject3 = $_POST['stsubject3'];
$attendance3 = $_POST['attendance3'];
$cat3 = $_POST['cat3'];
$examscore3 = $_POST['examscore3'];
$average3 = $_POST['average3'];
$total3 = $_POST['total3'];
$grade3 = $_POST['grade3'];
$stsubject4 = $_POST['stsubject4'];
$attendance4 = $_POST['attendance4'];
$cat4 = $_POST['cat4'];
$examscore4 = $_POST['examscore4'];
$average4 = $_POST['average4'];
$total4 = $_POST['total4'];
$grade4 = $_POST['grade4'];
$stsubject5 = $_POST['stsubject5'];
$attendance5 = $_POST['attendance5'];
$cat5 = $_POST['cat5'];
$examscore5 = $_POST['examscore5'];
$average5 = $_POST['average5'];
$total5 = $_POST['total5'];
$grade5 = $_POST['grade5'];
$stsubject6 = $_POST['stsubject6'];
$attendance6 = $_POST['attendance6'];
$cat6 = $_POST['cat6'];
$examscore6 = $_POST['examscore6'];
$average6 = $_POST['average6'];
$total6 = $_POST['total6'];
$grade6 = $_POST['grade6'];
$stsubject7 = $_POST['stsubject7'];
$attendance7 = $_POST['attendance7'];
$cat7 = $_POST['cat7'];
$examscore7 = $_POST['examscore7'];
$average7 = $_POST['average7'];
$total7 = $_POST['total7'];
$grade7 = $_POST['grade7'];
$stsubject8 = $_POST['stsubject8'];
$attendance8 = $_POST['attendance8'];
$cat8 = $_POST['cat8'];
$examscore8 = $_POST['examscore8'];
$average8 = $_POST['average8'];
$total8 = $_POST['total8'];
$grade8 = $_POST['grade8'];
$stsubject9 = $_POST['stsubject9'];
$attendance9 = $_POST['attendance9'];
$cat9 = $_POST['cat9'];
$examscore9 = $_POST['examscore9'];
$average9 = $_POST['average9'];
$total9 = $_POST['total9'];
$grade9 = $_POST['grade9'];
$stsubject10 = $_POST['stsubject10'];
$attendance10 = $_POST['attendance10'];
$cat10 = $_POST['cat10'];
$examscore10 = $_POST['examscore10'];
$average10 = $_POST['average10'];
$total10 = $_POST['total10'];
$grade10 = $_POST['grade10'];
$stsubject11 = $_POST['stsubject11'];
$attendance11 = $_POST['attendance11'];
$cat11 = $_POST['cat11'];
$examscore11 = $_POST['examscore11'];
$average11 = $_POST['average11'];
$total11 = $_POST['total11'];
$grade11 = $_POST['grade11'];
$stsubject12 = $_POST['stsubject12'];
$attendance12 = $_POST['attendance12'];
$cat12 = $_POST['cat12'];
$examscore12 = $_POST['examscore12'];
$average12 = $_POST['average12'];
$total12 = $_POST['total12'];
$grade12 = $_POST['grade12'];
$stsubject13 = $_POST['stsubject13'];
$attendance13 = $_POST['attendance13'];
$cat13 = $_POST['cat13'];
$examscore13 = $_POST['examscore13'];
$average13 = $_POST['average13'];
$total13 = $_POST['total13'];
$grade13 = $_POST['grade13'];
$stsubject14 = $_POST['stsubject14'];
$cat14 = $_POST['cat14'];
$examscore14 = $_POST['examscore14'];
$stsubject15 = $_POST['stsubject15'];
$cat15 = $_POST['cat15'];
$examscore15 = $_POST['examscore15'];
$stsubject16 = $_POST['stsubject16'];
$examscore16 = $_POST['examscore16'];
$cat16a = $_POST['cat16a'];


$passed = $_POST['passed'];
$failed = $_POST['failed'];
$examname = $_POST['examname'];
$examtype = $_POST['examtype'];

$maritalstatus = $_POST['maritalstatus'];
$empstatus = $_POST['empstatus'];
$staffid = $_POST['staffid'];
$dept = $_POST['dept'];
$responsibility = $_POST['responsibility'];
$dateofemp = $_POST['dateofemp'];
$bqualification = $_POST['bqualification'];
$squalification = $_POST['squalification'];
$tqualification = $_POST['tqualification'];
$bqdate = $_POST['bqdate'];
$sqdate = $_POST['sqdate'];
$tqdate = $_POST['tqdate'];
$oqdate = $_POST['oqdate'];
$ref1name = $_POST['ref1name'];
$ref1address = $_POST['ref1address'];
$ref1country = $_POST['ref1country'];
$ref1email = $_POST['ref1email'];
$ref1phone = $_POST['ref1phone'];
$ref1profession = $_POST['ref1profession'];
$ref1position = $_POST['ref1position'];
$ref2name = $_POST['ref2name'];
$ref2address = $_POST['ref2address'];
$ref2country = $_POST['ref2country'];
$ref2email = $_POST['ref2email'];
$ref2phone = $_POST['ref2phone'];
$ref2profession = $_POST['ref2profession'];
$ref2position = $_POST['ref2position'];
$stafftype = $_POST['stafftype'];
$position = $_POST['position'];
$xamountowed = $_POST['xamountowed'];
$xdateofleaving = $_POST['xdateofleaving'];
$xstaffid = $_POST['xstaffid'];
$coordinator = $_POST['coordinator'];
$mtype = $_POST['mtype'];
$dateheld = $_POST['dateheld1'];
$dateheld .= $_POST['dateheld2'];
$dateheld .= $_POST['dateheld3'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];
$xcoordinator = $_POST['xcoordinator'];
$xmtype = $_POST['xmtype'];
$dateofbirthx = $_POST['dateofbirthx'];


$deposit1 = $_POST['deposit1'];
$deposit2 = $_POST['deposit2'];
$deposit3 = $_POST['deposit3'];
$deposit4 = $_POST['deposit4'];
$deposit5 = $_POST['deposit5'];
$totaldeposit = $_POST['totaldeposit'];

$do1d = $_POST['do1d'];
$do2d = $_POST['do2d']; 
$do3d = $_POST['do3d'];
$do4d = $_POST['do4d'];
$do5d = $_POST['do5d']; 
$go1d = $_POST['go1d'];
$go2d = $_POST['go2d']; 
$go3d = $_POST['go3d'];
$go4d = $_POST['go4d'];
$go5d = $_POST['go5d'];
$paymentyear = $_POST['paymentyear']; 

$paydate = $_POST['paydate1'];
$paydate .= $_POST['paydate2'];
$paydate .= $_POST['paydate3'];

$xpaydate = $_POST['xpaydate1'];
$xpaydate .= $_POST['xpaydate2'];
$xpaydate .= $_POST['xpaydate3'];

$tellerno1 = $_POST['tellerno1'];
$tellerno2 = $_POST['tellerno2'];
$tellerno3 = $_POST['tellerno3'];
$tellerno4 = $_POST['tellerno4'];
$tellerno5 = $_POST['tellerno5'];

$bankofpayment1 = $_POST['bankofpayment1'];
$bankofpayment2 = $_POST['bankofpayment2'];
$bankofpayment3 = $_POST['bankofpayment3'];
$bankofpayment4 = $_POST['bankofpayment4'];
$bankofpayment5 = $_POST['bankofpayment5'];

$bankofpayment = $_POST['bankofpayment'];
$tellerno = $_POST['tellerno'];

$paymentdate = $_POST['paymentdate'];

$amount = $_POST['amount'];
$fees = $_POST['fees'];
$feesdescription = $_POST['feesdescription'];
$amountcharged = $_POST['amountcharged'];

$budgettype = $_POST['budgettype'];
$budgetcategory = $_POST['budgetcategory'];
$budgetdesc = $_POST['budgetdesc'];
$rate = $_POST['rate'];
$product = $_POST['product'];
$productdesc = $_POST['productdesc'];
$quantity = $_POST['quantity1'];
$quantity .= $_POST['quantity2'];
$fullname = $_POST['fullname'];
$buyertype = $_POST['buyertype'];
$buyerclass = $_POST['buyerclass'];

$grosspay = $_POST['grosspay'];
$tax = $_POST['tax'];
$pension = $_POST['pension'];
$loan = $_POST['loan'];
$penalty = $_POST['penalty'];
$accommodation = $_POST['accommodation'];
$welfare = $_POST['welfare'];
$coop = $_POST['coop'];
$stafftype = $_POST['stafftype'];
$bonus = $_POST['bonus'];
$others = $_POST['others'];
$paymentmonth = $_POST['paymentmonth'];
$xexpenses = $_POST['xexpenses'];

$xpaymentdate = $_POST['xpaymentdate'];

$xbudgettype = $_POST['xbudgettype'];
$xbudgetcategory = $_POST['xbudgetcategory'];

$xstaffid = $_POST['xstaffid'];

$quanty = $_POST['quanty'];
$xpaymentmonth = $_POST['xpaymentmonth'];
$xpaymentyear = $_POST['xpaymentyear'];

$xid = $_POST['xid'];
$id = $_POST['id'];

$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$schoolphone = $_POST['schoolphone'];
$schoolemail = $_POST['schoolemail'];
$schoolwebsite = $_POST['schoolwebsite'];
$sn = $_POST['sn'];

$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];
$subject6 = $_POST['subject6'];
$subject7 = $_POST['subject7'];
$subject8 = $_POST['subject8'];
$subject9 = $_POST['subject9'];
$subject10 = $_POST['subject10'];
$subject11 = $_POST['subject11'];
$subject12 = $_POST['subject12'];
$subject13 = $_POST['subject13'];
$subject14 = $_POST['subject14'];
$subject15 = $_POST['subject15'];
$subject16 = $_POST['subject16'];
$subject17 = $_POST['subject17'];
$subject18 = $_POST['subject18'];
$subject19 = $_POST['subject19'];
$subject20 = $_POST['subject20'];
$subject21 = $_POST['subject21'];
$subject22 = $_POST['subject22'];
$subject23 = $_POST['subject23'];
$subject24 = $_POST['subject24'];
$subject25 = $_POST['subject25'];
$subject26 = $_POST['subject26'];
$subject27 = $_POST['subject27'];
$subject28 = $_POST['subject28'];
$subject29 = $_POST['subject29'];
$subject30 = $_POST['subject30'];
$subject31 = $_POST['subject31'];
$subject32 = $_POST['subject32'];
$subject33 = $_POST['subject33'];
$subject34 = $_POST['subject34'];
$subject35 = $_POST['subject35'];
$subject36 = $_POST['subject36'];
$subject37 = $_POST['subject37'];
$subject38 = $_POST['subject38'];
$subject39 = $_POST['subject39'];
$subject40 = $_POST['subject40'];
$subject41 = $_POST['subject41'];
$subject42 = $_POST['subject42'];
$subject43 = $_POST['subject43'];
$subject44 = $_POST['subject44'];
$subject45 = $_POST['subject45'];
$subject46 = $_POST['subject46'];
$subject47 = $_POST['subject47'];
$subject48 = $_POST['subject48'];
$subject49 = $_POST['subject49'];
$subject50 = $_POST['subject50'];
$subject51 = $_POST['subject51'];
$subject52 = $_POST['subject52'];
$subject53 = $_POST['subject53'];
$subject54 = $_POST['subject54'];
$subject55 = $_POST['subject55'];
$subject56 = $_POST['subject56'];
$subject57 = $_POST['subject57'];
$subject58 = $_POST['subject58'];
$subject59 = $_POST['subject59'];

$sender = $_POST['sender'];

$acaldate = $_POST['acaldate1'];
$acaldate .= $_POST['acaldate2'];
$acaldate .= $_POST['acaldate3'];

$bcaldate = $_POST['bcaldate1'];
$bcaldate .= $_POST['bcaldate2'];
$bcaldate .= $_POST['bcaldate3'];

$ccaldate = $_POST['ccaldate1'];
$ccaldate .= $_POST['ccaldate2'];
$ccaldate .= $_POST['ccaldate3'];

$dcaldate = $_POST['dcaldate1'];
$dcaldate .= $_POST['dcaldate2'];
$dcaldate .= $_POST['dcaldate3'];


$ecaldate = $_POST['ecaldate1'];
$ecaldate .= $_POST['ecaldate2'];
$ecaldate .= $_POST['ecaldate3'];


$fcaldate = $_POST['fcaldate1'];
$fcaldate .= $_POST['fcaldate2'];
$fcaldate .= $_POST['fcaldate3'];

$gcaldate = $_POST['gcaldate1'];
$gcaldate .= $_POST['gcaldate2'];
$gcaldate .= $_POST['gcaldate3'];

$hcaldate = $_POST['hcaldate1'];
$hcaldate .= $_POST['hcaldate2'];
$hcaldate .= $_POST['hcaldate3'];

$icaldate = $_POST['icaldate1'];
$icaldate .= $_POST['icaldate2'];
$icaldate .= $_POST['icaldate3'];

$jcaldate = $_POST['jcaldate1'];
$jcaldate .= $_POST['jcaldate2'];
$jcaldate .= $_POST['jcaldate3'];

$lcaldate = $_POST['lcaldate1'];
$lcaldate .= $_POST['lcaldate2'];
$lcaldate .= $_POST['lcaldate3'];

$mcaldate = $_POST['mcaldate1'];
$mcaldate .= $_POST['mcaldate2'];
$mcaldate .= $_POST['mcaldate3'];

$ncaldate = $_POST['ncaldate1'];
$ncaldate .= $_POST['ncaldate2'];
$ncaldate .= $_POST['ncaldate3'];

$ocaldate = $_POST['ocaldate1'];
$ocaldate .= $_POST['ocaldate2'];
$ocaldate .= $_POST['ocaldate3'];

$pcaldate = $_POST['pcaldate1'];
$pcaldate .= $_POST['pcaldate2'];
$pcaldate .= $_POST['pcaldate3'];

$qcaldate = $_POST['qcaldate1'];
$qcaldate .= $_POST['qcaldate2'];
$qcaldate .= $_POST['qcaldate3'];

$rcaldate = $_POST['rcaldate1'];
$rcaldate .= $_POST['rcaldate2'];
$rcaldate .= $_POST['rcaldate3'];

$scaldate = $_POST['scaldate1'];
$scaldate .= $_POST['scaldate2'];
$scaldate .= $_POST['scaldate3'];

$tcaldate = $_POST['tcaldate1'];
$tcaldate .= $_POST['tcaldate2'];
$tcaldate .= $_POST['tcaldate3'];

$ucaldate = $_POST['ucaldate1'];
$ucaldate .= $_POST['ucaldate2'];
$ucaldate .= $_POST['ucaldate3'];

$desc1 = $_POST['desc1'];
$desc2 = $_POST['desc2'];
$desc3 = $_POST['desc3'];
$desc4 = $_POST['desc4'];
$desc5 = $_POST['desc5'];
$desc6 = $_POST['desc6'];
$desc7 = $_POST['desc7'];
$desc8 = $_POST['desc8'];
$desc9 = $_POST['desc9'];
$desc10 = $_POST['desc10'];
$desc11 = $_POST['desc11'];
$desc12 = $_POST['desc12'];
$desc13 = $_POST['desc13'];
$desc14 = $_POST['desc14'];
$desc15 = $_POST['desc15'];
$desc16 = $_POST['desc16'];
$desc17 = $_POST['desc17'];
$desc18 = $_POST['desc18'];
$desc19 = $_POST['desc19'];
$desc20 = $_POST['desc20'];

$termbegins = $_POST['termbegins1'];
$termbegins .= $_POST['termbegins2'];
$termbegins .= $_POST['termbegins3'];

$termends = $_POST['termends1'];
$termends .= $_POST['termends2'];
$termends .= $_POST['termends3'];

$descp = $_POST['descp'];
$xdescp = $_POST['xdescp'];

$xtermbegins = $_POST['xtermbegins'];
$xtermends = $_POST['xtermends'];

$xcaldate = $_POST['xcaldate'];

$week = $_POST['week'];
$weekday = $_POST['weekday'];


$prd1 = $_POST['prd1'];
$prd1a = $_POST['prd1a'];
$prd1b = $_POST['prd1b'];
$prd1c = $_POST['prd1c'];
$prd1d = $_POST['prd1d'];
$prd1e = $_POST['prd1e'];


$prd2 = $_POST['prd2'];
$prd2a = $_POST['prd2a'];
$prd2b = $_POST['prd2b'];
$prd2c = $_POST['prd2c'];
$prd2d = $_POST['prd2d'];
$prd2e = $_POST['prd2e'];

$prd3 = $_POST['prd3'];
$prd3a = $_POST['prd3a'];
$prd3b = $_POST['prd3b'];
$prd3c = $_POST['prd3c'];
$prd3d = $_POST['prd3d'];
$prd3e = $_POST['prd3e'];

$prd4 = $_POST['prd4'];
$prd4a = $_POST['prd4a'];
$prd4b = $_POST['prd4b'];
$prd4c = $_POST['prd4c'];
$prd4d = $_POST['prd4d'];
$prd4e = $_POST['prd4e'];


$prd5 = $_POST['prd5'];
$prd5a = $_POST['prd5a'];
$prd5b = $_POST['prd5b'];
$prd5c = $_POST['prd5c'];
$prd5d = $_POST['prd5d'];
$prd5e = $_POST['prd5e'];

$prd6 = $_POST['prd6'];
$prd6a = $_POST['prd6a'];
$prd6b = $_POST['prd6b'];
$prd6c = $_POST['prd6c'];
$prd6d = $_POST['prd6d'];
$prd6e = $_POST['prd6e'];

$prd7 = $_POST['prd7'];
$prd7a = $_POST['prd7a'];
$prd7b = $_POST['prd7b'];
$prd7c = $_POST['prd7c'];
$prd7d = $_POST['prd7d'];
$prd7e = $_POST['prd7e'];

$prd8 = $_POST['prd8'];
$prd8a = $_POST['prd8a'];
$prd8b = $_POST['prd8b'];
$prd8c = $_POST['prd8c'];
$prd8d = $_POST['prd8d'];
$prd8e = $_POST['prd8e'];


$prd9 = $_POST['prd9'];
$prd9a = $_POST['prd9a'];
$prd9b = $_POST['prd9b'];
$prd9c = $_POST['prd9c'];
$prd9d = $_POST['prd9d'];
$prd9e = $_POST['prd9e'];

$prd10 = $_POST['prd10'];
$prd10a = $_POST['prd10a'];
$prd10b = $_POST['prd10b'];
$prd10c = $_POST['prd10c'];
$prd10d = $_POST['prd10d'];
$prd10e = $_POST['prd10e'];

$tch1 = $_POST['tch1'];
$tch2 = $_POST['tch2'];
$tch3 = $_POST['tch3'];
$tch4 = $_POST['tch4'];
$tch5 = $_POST['tch5'];
$tch6 = $_POST['tch6'];
$tch7 = $_POST['tch7'];
$tch8 = $_POST['tch8'];
$tch9 = $_POST['tch9'];
$tch10 = $_POST['tch10'];
$tch11 = $_POST['tch11'];
$tch12 = $_POST['tch12'];
$tch13 = $_POST['tch13'];
$tch14 = $_POST['tch14'];
$tch15 = $_POST['tch15'];
$tch16 = $_POST['tch16'];

$sub1 = $_POST['sub1'];
$sub1a = $_POST['sub1a'];
$sub1b = $_POST['sub1b'];
$sub1c = $_POST['sub1c'];
$sub1d = $_POST['sub1d'];
$sub1e = $_POST['sub1e'];

$sub2 = $_POST['sub2'];
$sub2a = $_POST['sub2a'];
$sub2b = $_POST['sub2b'];
$sub2c = $_POST['sub2c'];
$sub2d = $_POST['sub2d'];
$sub2e = $_POST['sub2e'];

$sub3 = $_POST['sub3'];
$sub3a = $_POST['sub3a'];
$sub3b = $_POST['sub3b'];
$sub3c = $_POST['sub3c'];
$sub3d = $_POST['sub3d'];
$sub3e = $_POST['sub3e'];

$sub4 = $_POST['sub4'];
$sub4a = $_POST['sub4a'];
$sub4b = $_POST['sub4b'];
$sub4c = $_POST['sub4c'];
$sub4d = $_POST['sub4d'];
$sub4e = $_POST['sub4e'];

$sub5 = $_POST['sub5'];
$sub5a = $_POST['sub5a'];
$sub5b = $_POST['sub5b'];
$sub5c = $_POST['sub5c'];
$sub5d = $_POST['sub5d'];
$sub5e = $_POST['sub5e'];

$sub6 = $_POST['sub6'];
$sub6a = $_POST['sub6a'];
$sub6b = $_POST['sub6b'];
$sub6c = $_POST['sub6c'];
$sub6d = $_POST['sub6d'];
$sub6e = $_POST['sub6e'];

$sub7 = $_POST['sub7'];
$sub7a = $_POST['sub7a'];
$sub7b = $_POST['sub7b'];
$sub7c = $_POST['sub7c'];
$sub7d = $_POST['sub7d'];
$sub7e = $_POST['sub7e'];

$sub8 = $_POST['sub8'];
$sub8a = $_POST['sub8a'];
$sub8b = $_POST['sub8b'];
$sub8c = $_POST['sub8c'];
$sub8d = $_POST['sub8d'];
$sub8e = $_POST['sub8e'];

$sub9 = $_POST['sub9'];
$sub9a = $_POST['sub9a'];
$sub9b = $_POST['sub9b'];
$sub9c = $_POST['sub9c'];
$sub9d = $_POST['sub9d'];
$sub9e = $_POST['sub9e'];

$sub10 = $_POST['sub10'];
$sub10a = $_POST['sub10a'];
$sub10b = $_POST['sub10b'];
$sub10c = $_POST['sub10c'];
$sub10d = $_POST['sub10d'];
$sub10e = $_POST['sub10e'];

$drive = $_POST['drive'];

$sectype = $_POST['sectype'];
$seclevel = $_POST['seclevel'];

$dateofreg = $_POST['dateofreg'];
$gd = $_POST['gd'];
$status = $_POST['status'];
$xothernames = $_POST['xothernames'];
$opened = $_POST['opened'];
$present = $_POST['present'];
$allsearch = $_POST['allsearch'];

$accm = $_POST['accm'];

$examyear = $_POST['examyear'];

$xexamname = $_POST['xexamname'];
$xexamyear = $_POST['xexamyear'];

$subacct = $_POST['subacct'];
$subpassword = $_POST['subpassword'];

?>