<?php
	
    $sender  = "<b>Student's Information</b> <br> <br> <b>First Name :</b> ".$_POST['first_name']."<br>";
	$sender .= "<b>Middle Name :</b> ".$_POST['middlename']."<br>";
	$sender .= "<b>Last Name :</b> ".$_POST['lastname']."<br>";
	$sender .= "<b>Age :</b> ".$_POST['ageyears']." "."Yrs. & ".$_POST['agemonth']." "."Months"."<br>";
	$sender .= "<b>Admission for Class :</b> ".$_POST['admissionto']."<br>";
	$sender .= "<b>Academic Session :</b> ".$_POST['sessiona']."<br>";
	$sender .= "<b>What facility are you availing? :</b> ".$_POST['facilityavailing']."<br>";
	$sender .= "<b>Transport Facility Required :</b> ".$_POST['transportfacility']."<br>";
	$sender .= "<b>Present Class :</b> ".$_POST['currentclass']."<br>";
	$sender .= "<b>Name and address of present school :</b> ".$_POST['nameaddress_school']."<br>";
	$sender .= "<b>Sex :</b> ".$_POST['sex']."<br>";
	$sender .= "<b>Mother Tongue :</b> ".$_POST['mothertongue']."<br>";
	$sender .= "<b>Nationality :</b> ".$_POST['nationality']."<br>";
	$sender .= "<b>Blood Group :</b> ".$_POST['bloodgroup']."<br>";
	$sender .= "<b>Passport :</b> ".$_POST['passport']."<br>";
	$sender .= "<b>Any Major Allergies :</b> ".$_POST['majorallergies']."<br>";
	$sender .= "<b>Please indicate if your child has learning disability or any other challenge :</b> ".$_POST['disablity']."<br><br>";


	$sender .= "<b><b>Sibling's Information</b> <br><br> Name :</b> ".$_POST['siblingname']."<br>";
	$sender .= "<b>Age :</b> ".$_POST['s_age']."<br>";
	$sender .= "<b>Class :</b> ".$_POST['sib_class']."<br>";
	$sender .= "<b>School Name :</b> ".$_POST['schoolname']."<br><br>";

	$sender .= "<b><b> Father's Information </b> <br><br> Name :</b> ".$_POST['fathername']."<br>";
	$sender .= "<b>Date of Birth :</b> ".$_POST['fatherDOB']."<br>";
	$sender .= "<b>Educational Qualifications :</b> ".$_POST['fatherqualification']."<br>";
	$sender .= "<b>Profession/Occupation :</b> ".$_POST['f_occupation']."<br>";
	$sender .= "<b>Name of the Organization :</b> ".$_POST['organization']."<br>";
	$sender .= "<b>Office Address :</b> ".$_POST['officeadress']."<br>";
	$sender .= "<b>Nature of Business :</b> ".$_POST['businessnature']."<br>";
	$sender .= "<b>Tel. (Office) :</b> ".$_POST['telephone_office']."<br>";
	$sender .= "<b>Tel. (Residence) :</b> ".$_POST['telephone_residence']."<br>";
	$sender .= "<b>Mobile :</b> ".$_POST['f_mobile']."<br>";
	$sender .= "<b>Fax :</b> ".$_POST['fax']."<br>";
	$sender .= "<b>Email :</b> ".$_POST['f_emailid']."<br>";
	$sender .= "<b>Emergency Phone No. :</b> ".$_POST['emergencynumber']."<br><br>";

	$sender .= "<b><b> Mother's Information</b><br><br> Name :</b> ".$_POST['mothername']."<br>";
	$sender .= "<b>Date of Birth :</b> ".$_POST['motherDOB']."<br>";
	$sender .= "<b>Educational Qualifications :</b> ".$_POST['motherqualification']."<br>";
	$sender .= "<b>Profession/Occupation :</b> ".$_POST['motherprofession']."<br>";
	$sender .= "<b>Name of the Organization :</b> ".$_POST['m_organisationname']."<br>";
	$sender .= "<b>Office Address :</b> ".$_POST['m_officeadress']."<br>";
	$sender .= "<b>Nature of Business :</b> ".$_POST['m_businessnature']."<br>";
	$sender .= "<b>Tel. (Office) :</b> ".$_POST['m_telephoneoffice']."<br>";
	$sender .= "<b>Tel. (Residence) :</b> ".$_POST['m_telephoneresidence']."<br>";
	$sender .= "<b>Mobile :</b> ".$_POST['mothermobile']."<br>";
	$sender .= "<b>Fax :</b> ".$_POST['m_fax']."<br>";
	$sender .= "<b>Email :</b> ".$_POST['m_emailid']."<br>";
	$sender .= "<b>Emergency Phone No. :</b> ".$_POST['m_emergencynumber']."<br>";
	$sender .= "<b>Permanent Address :</b> ".$_POST['permanentaddress']."<br>";
	$sender .= "<b>Present Address :</b> ".$_POST['presentadress']."<br>";
	$sender .= "<b>As a parent how can you help the school? :</b> ".$_POST['schoolh']."<br>";


$email_message .= $sender;

$file1 = $_FILES['file1']['tmp_name'];
$file2 = $_FILES['file2']['tmp_name'];
$file3 = $_FILES['file2']['tmp_name'];
     

// File names of selected files
$filename1 = $_FILES['file1']['name'];
$filename2 = $_FILES['file2']['name'];
$filename3 = $_FILES['file3']['name'];

// array of filenames to be as attachments
$files = array($file1, $file2, $file3);
$filenames = array($filename1, $filename2, $filename3);

// include the from email in the headers
$headers = 'From:'.$_POST['fathername'].'';

// boundary
$time = md5(time());
$boundary = "==Multipart_Boundary_x{$time}x";

// headers used for send attachment with email
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$boundary}\"";

// multipart boundary
$email_message = "--{$boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $email_message . "\n\n";
$email_message .= "--{$boundary}\n";

// attach the attachments to the message
for($x = 0; $x < count($files); $x++) 
{
    $file = fopen($files[$x], "r");
    $content = fread($file,filesize($files[$x]));
    fclose($file);
    $content = chunk_split(base64_encode($content));
    $email_message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . "Content-Disposition: attachment;\n" . " filename=\"$filenames[$x]\"\n" . "Content-Transfer-Encoding: base64\n\n" . $content . "\n\n";
    $email_message .= "--{$boundary}\n";
}


	$email_to = "rajesh@repindia.com,virender@repindia.com";
	$email_subject = "Enquiry Form";



//mail($email_to, $email_subject, $email_message, $headers);  
if (mail($email_to, $email_subject, $email_message, $headers))
    {
        print "<p>Your information submitted successfully.</p>";
    }
    else
    {
        print "Your information not submitted.
        <br>Please go <a href=\"javascript:history.back();\">back</a> and send again.";
    }
