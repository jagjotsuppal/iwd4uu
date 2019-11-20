<script LANGUAGE="JavaScript"> 
<!--
 
var randomnumber=Math.floor(Math.random()*9);
var randomnumber1=Math.floor(Math.random()*9);
var result=parseInt(randomnumber) + parseInt(randomnumber1);
 
 
function check(form2){
 
 //seo-enquiry form
if(form2.url.value=="")
{	alert("please enter a valid website url (for example: iwd4u.com) ");
	form2.url.focus();return(false);}
if(form2.keywords.value=="")
{	alert("please enter keywords for products and services");
	form2.keywords.focus();return(false);}

//ind-website form
if(form2.specifications.value=="")
{	alert("please enter relavant infomation");
	form2.specifications.focus();return(false);}
if(form2.subject.value=="")
{	alert("please enter subject");
	form2.subject.focus();return(false);}
//personal form
if(form2.companyname.value=="")
{	alert("please enter company name");
	form2.companyname.focus();return(false);}
if(form2.name.value=="")
{	alert("please enter your name");
	form2.name.focus();return(false);}
if(form2.phone.value=="")
{	alert("please enter Your Phone Number");
	form2.phone.focus();return(false);}
else if(isNaN(form2.phone.value))
{	alert("please enter valid Phone Number ");
	form2.phone.focus();return(false);}
if(form2.email.value=="")
{alert("please enter your e-mail");form2.email.focus();return(false);}
if(form2.email.value!="")
{
	pass=form2.email.value.indexOf('@',0);
	if(pass==-1)
	{	alert("not a valid email address");
		form2.email.focus();return(false);}
}

if(form2.captcha_text.value!=result){
	alert("please enter correct result for verification");
	form2.captcha_text.focus();return(false);}
}
//-->
</script>
<FORM name="form2" method="POST" action="?pagina=thanks" onsubmit="return check(this)">
	<input  type="HIDDEN" name="source_action" value="<?php echo  $_GET['source'];?>" >
	
	<table border="0" cellpadding="2" cellspacing="3" width="100%" valign="top">
  			<?php 
            	   $source = $_GET['source'];
							 Switch($source){
								  case 'seo-enquiry' :
									  include('seo-enquiry.php'); 
									  break;
								  case 'website-enquiry' :
									  include('ind-website-enquiry.php'); 
									  break;
								  case 'ticket' :
									  include('open-ticket.php'); 
									  break;
								  case 'quote' :
									  include('quote.php'); 
									  break;	
							 
							 }  
					 ?>		
			  
<tr>
	<td  valign="top" class="header-txt"><br><p align="left">Personal Details</p></td>
</tr>
<tr>
	<td valign="top">
			<?php 
				include('personal-form.php')?>
	</td>
</tr>
<tr>
       <td class="normal-txt">We need this verification to avoid submission through bots! Please answer this simple question.</td>
</tr>
<tr>
     <td  valign="top" class="normal-txt">
			<table width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="16%" class="normal-txt"><strong><script type="text/javascript">document.write(randomnumber + "+" + randomnumber1)</script> 
                  = *</strong></td>
                <td width="84%" class="normal-text"><INPUT  maxLength=6 size=5 name="captcha_text" type="text"><INPUT type=hidden name=captcha_ref></td>
              </tr>
			  <tr>
                <td class="normal-txt">&nbsp;</td>
                <td class="normal-txt">&nbsp;</td>
              </tr>
              <tr>
                <td class="normal-txt">&nbsp;</td>
                <td class="normal-txt"><br><br><input type="submit" value="Submit" name="B3">
									<input type="reset" value="Reset" name="B4"></td>
              </tr>
			</table></form>
 </td>
</tr>
</table>