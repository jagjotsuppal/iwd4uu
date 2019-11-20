<html>
	<head>
		<title>IWD 4U web designing, web developing, flash works,seo </title>
		<meta name="google-site-verification" content="qfG7k2fWy_DL24LEiCjnfl4PUmyytadpCvqX2QUmbr8" />
		<script src='java/enquiry-form.js'  language='javascript'   type='text/javascript'></script>
		<link rel='stylesheet' type='text/css'    href='java/display.css' />

	</head>
	<body topmargin="0" leftmargin="0">
	  <div align="center">
		<center>
		<table border="0" cellpadding="0" cellspacing="0"  width="1024">
		  <tr>
		    <td width="1024" background="imgs/button-bg.jpg" >
			<?php include('button.php')?>
		    </td>
		  </tr>
		  <tr>
		    <td width="1024" background="imgs/iwd4u-bg.jpg" >
		    <img border="0" src="imgs/iwd4u.jpg" width="227" height="176"></td>
			</td>
		 </tr>
		
	     <tr>
		  <td> 
			<table border="0" cellpadding="0" cellspacing="0"  width="100%">
				<tr>
				<td width="10%" valign="top">
		       <?php include('left.php');
					 if($_GET['pagina']!='main'){	
						 include('right.php');
					 }	
				?> 
               </td>
              <td width="80%" valign="top"> 
			   <?php 
            	   $pagina = $_GET['pagina'];
							 Switch($pagina){
								  case 'main' :
	 								    include('main.php'); 
									    break;
								  case 'about' :
									    include('about.php'); 
									    break;
								  case 'whtwedo'	:
									    include('whtwedo.php'); 
										break;
								  case 'webhosting' :
								 	    include('webhosting.php');
										break;	
								  case 'ind-website' :
	    								include('ind-website.php'); 
									    break;
								  case 'seopackage' :
								  case 'supportticket':
	   							  case 'contact' :
								  case 'enquiry-form' :
										include('enquiry-form.php'); 
										break;	
								  case 'thanks' :
	 								    include('thanks.php'); 
									    break;
								  default :
									  include('main.php'); 
									  break;
							 }  
					 ?>	
				  <?php include('bottom.php')?>		
		      </td>
		      <td width="10%" valign="top">
			   <?php 
					if($_GET['pagina']=='main'){	
						 include('right.php');
					 }	
			 ?> 
			 </td>
        	 <td width="2%"> &nbsp;</td>
			 </tr>
			</table>
    	 </td>
	    	</tr>
		<tr>
     		<td width="1024"   background="imgs/button-bg.jpg">
	      <?php include('button.php')?>		
			 </td>
		 </tr>
		  <tr>
			<td width="1024" height="20" valign="middle"><p align="center"><b><font face="Verdana" size="1" color="#000000">
              Copyright ©2011 www.iwd4u.com</font></p></td>
		  </tr>
		</table>
			</center>
			</div>
	</body>
	</html>