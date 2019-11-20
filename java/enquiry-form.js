var randomnumber=Math.floor(Math.random()*9);
var randomnumber1=Math.floor(Math.random()*9);
var result=parseInt(randomnumber) + parseInt(randomnumber1);
 
 
function check(form2){
 
if(form2.companyname.value=="")
{alert("please enter Company Name");form2.companyname.focus();return(false);}
 
if(form2.name.value=="")
{alert("please enter Your Name");form2.name.focus();return(false);}

if(form2.email.value=="")
{alert("please enter Your E-Mail");form2.email.focus();return(false);}
if(form2.email.value!="")
{pass=form2.email.value.indexOf('@',0);if(pass==-1)
{alert("not a valid email address");form2.email.focus();return(false);}}
 
if(form2.url.value=="")
{alert("please enter website address");form2.url.focus();return(false);}
if(form2.keywords.value=="")
{alert("please enter Your Keywords that you want to website in Top ?");form2.keywords.focus();return(false);}
if(form2.captcha_text.value!=result){
	alert("please enter correct result");
	form2.captcha_text.focus();
	return(false);}
 }