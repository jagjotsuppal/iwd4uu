<?php
	$source_action = $_POST['source_action'];
	
	Switch($source_action){
		 case 'seo-enquiry' :
				$webdetails ='<table border="0" cellpadding="3" cellspacing="3" width="95%" >
          			<tr>
            			<td width="100%" colspan="2" class="header-txt">Website Details</td>
            		</tr>
					<tr>
						<td width="20%" class="form1-txt">Website url</td>
						<td width="80%" class="form1-txt">'.$_POST['url'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Budget</td>
						<td width="80%" class="form1-txt">'.$_POST['budget'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Product and services keywords</td>
						<td width="80%" class="form1-txt">'.$_POST['keywords'].'</td>
          			</tr>';
				break;
		 case 'website-enquiry' :
				$webdetails ='<table border="0" cellpadding="3" cellspacing="3" width="95%" >
          			<tr>
            			<td width="100%" colspan="2" class="header-txt">Website Details</td>
            		</tr>
					<tr>
						<td width="20%" class="form1-txt">Webpackage</td>
						<td width="80%" class="form1-txt">'.$_POST['webpackage'].'</td>
          			</tr>
						<tr>
						<td width="20%" class="form1-txt">Project specifications</td>
						<td width="80%" class="form1-txt">'.$_POST['specifications'].'</td>
          			</tr>';
		    	break;
		 case 'ticket' :
				$webdetails ='<table border="0" cellpadding="3" cellspacing="3" width="95%" >
          			<tr>
            			<td width="100%" colspan="2" class="header-txt">Submit ticket details</td>
            		</tr>
					<tr>
						<td width="20%" class="form1-txt">Department</td>
						<td width="80%" class="form1-txt">'.$_POST['Department'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Priority</td>
						<td width="80%" class="form1-txt">'.$_POST['Priority'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Subject</td>
						<td width="80%" class="form1-txt">'.$_POST['subject'].'</td>
          			</tr>
						<td width="20%" class="form1-txt">Project specifications</td>
						<td width="80%" class="form1-txt">'.$_POST['specifications'].'</td>
          			</tr>';
				 break;
		 case 'quote' :
				$webdetails ='<table border="0" cellpadding="3" cellspacing="3" width="95%" >
          			<tr>
            			<td width="100%" colspan="2" class="header-txt">Quote details</td>
            		</tr>
					<tr>
						<td width="20%" class="form1-txt">Website url</td>
						<td width="80%" class="form1-txt">'.$_POST['url'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Budget</td>
						<td width="80%" class="form1-txt">'.$_POST['budget'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Project Starttime</td>
						<td width="80%" class="form1-txt">'.$_POST['starttime'].'</td>
          			</tr>
						<td width="20%" class="form1-txt">Project specifications</td>
						<td width="80%" class="form1-txt">'.$_POST['specifications'].'</td>
          			</tr>';
				break;	
				 }  


	$perdetails ='<tr>
            			<td width="100%" colspan="2" class="header-txt">Personal Details</td>
            		</tr>
					<tr>
						<td width="20%" class="form1-txt">Company Name</td>
						<td width="80%" class="form1-txt">'.$_POST['companyname'].'</td>
					</tr>
					<tr>
						<td width="20%" class="form1-txt">Name</td>
						<td width="80%" class="form1-txt">'.$_POST['name'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Address</td>
						<td width="80%" class="form1-txt">'.$_POST['address'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Phone Number</td>
						<td width="80%" class="form1-txt">'.$_POST['phone'].'</td>
          			</tr>
					<tr>
						<td width="20%" class="form1-txt">Mobile Number</td>
						<td width="80%" class="form1-txt">'.$_POST['mobile'].'</td>
          			</tr>
          			<tr>
						<td width="20%" class="form1-txt">E-mail </td>
						<td width="80%" class="form1-txt">'.$_POST['email'].'</td>
          			</tr>
                  </table>';
	
	//webform + personal details
	$alldetails =$perdetails.$webdetails;
	
	//user email data details
		$ndetails='<table border="0" cellpadding="3" cellspacing="3" width="95%" >
          			<tr>
            		<td width="100%" class="form1-txt">Thanking you very much.we contact with you very soon.</td>
            		</tr> 
            		<tr><td>'.$alldetails.'</td></tr>
					<tr>
            		<td width="100%" class="form1-txt">With Best Regards :Team from Iwd 4U.</td>
            		</tr> 	
					</table>';
	
		
		
		$to		= $_POST['email'];;
		$from   ="info@iwd4u.com";
		$fromhoster="mailform@iwd4u.com";
		$subjectmailer ="[Acknowledgement]";
		$subjectwebmail =$source_action;
		//email configuratiion 
		require_once "Mail.php";
		$host = "mail.iwd4u.com";
		$username = "mailform@iwd4u.com";
		$password = "reply2011";
		$contenttype ="text/html; charset=iso-8859-1";

		$headers = array ('From' => $from,
						  'To' => $to,
						  'Subject' => $subjectmailer,
						  'Content-Type' =>$contenttype);
		$smtp = Mail::factory('smtp',
					  array ('host' => $host,
							 'auth' => true,
							 'username' => $username,
						     'password' => $password));

		$mail = $smtp->send($to, $headers, $ndetails);
		
		//to iwd4u

		$headers = array ('From' => $fromhoster,
						  'To' => $from,
						  'Subject' => $subjectwebmail,
						  'Content-Type' =>$contenttype );
		
		$mail = $smtp->send($from, $headers, $alldetails);


		if (PEAR::isError($mail)) {
			 echo("<p>" . $mail->getMessage() . "</p>");

			} else {
			$ThanksMessage = 'Thanking you very much.we contact with you very soon.';
			}
	?>
<div align="center">
  <center>

<table border="0" cellpadding="2" cellspacing="3" width="100%" height="550">
  <tr>
	<td ><font class="header-txt" valign="top"><br><p align="right">Thanks</p></font></td>
	</tr>
	<tr>
    <td width="100%" valign="top" class="normal-txt" ><br><?php echo $ThanksMessage; ?></td>
</tr>
</table>