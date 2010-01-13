<?php
	//start session
	session_start();
	
	//set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if(!isset($_SESSION['formMessage'])) $_SESSION['formMessage'] = 'Fill in the form below to send us an email.';
	if(!isset($_SESSION['formFooter'])) $_SESSION['formFooter'] = '';
	
	if(!isset($_SESSION['form'])) $_SESSION['form'] = array();
	
	function check($field, $type = "", $value = "") {
		$string = "";
		if(isset($_SESSION['form'][$field])) {
			switch($type) {
				case "checkbox":
					$string = 'checked="checked"';
					break;
				case "radio":
					if($_SESSION['form'][$field] == $value) $string = 'checked="checked"';
					break;
				case "select":
					if($_SESSION['form'][$field] == $value) $string = 'selected="selected"';
					break;
				default:
					$string = unescape_string($_SESSION['form'][$field]);
			}
		}
		return $string;
	}
	
	function unescape_string($string) {
		return stripslashes(@ html_entity_decode($string, ENT_QUOTES));
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<title>Digital Crisis | Contact Us - Talk To Real Technicians Today</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="All your IT questions and help is just a phone call away. Call to speak with a real computer technician about repairing your desktop, laptop or server computer." />
        <meta name="keywords" content="1877NOPCBUGS,1-877-NOPCBUGS,Houston computer IT services,computer repair,contact digital crisis,2815001213,281-500-1213,have us call you,call me,phone support,email support" />
		<meta name="copyright" content="Digital Crisis - 2010" />
   		<meta name="author" content="Digital Crisis, Inc." />
   		<meta name="email" content="support@digitalcrisis.com" />
		<link rel="icon" href="/digitalcrisis/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/digitalcrisis/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/digitalcrisis/apple-touch-icon.png" />
        <link rel="alternate" type="application/rss+xml" title="Digital Crisis Site Map" href="../ror.xml" />
		<link rel="alternate" type="application/rss+xml" title="Digital Crisis Blog Feed" href="http://blog.digitalcrisis.com/feeds/posts/default/" />
		<link rel="alternate" type="application/rss+xml" title="Digital Crisis Twitter Feed" href="http://twitter.com/statuses/user_timeline/28503543.rss" />
		<link rel="stylesheet" href="../style.css" type="text/css" />
		<script type="text/javascript" src="../js/rollover.js">
        </script>
        <script type="text/javascript" src="../js/iframe.js">
        </script>
        <script type="text/javascript" src="../js/googletracking.js">
        </script>
 
</head>

<body onload="MM_preloadImages('../images/logofull.gif','../images/logofull_1.gif','../images/logofull_2.gif','../images/logofull_3.gif','../images/logofull_4.gif','../images/logofull_5.gif')">

<!-- Start Head -->
		<?php require '../head.php';?> <?php //Global, shared header content code.. ?>
<!-- End Head -->

<!-- Start Body -->
<tr>
	<td align="center" valign="top" style="background: url(/digitalcrisis/images/backgroundMiddle.gif); background-repeat:repeat-y;">
				<table width="929" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width:32px;"></td>
                    <td style="width:575px;" align="left" valign="top">
<!-- Start Left Column -->
							<!-- Start Contact Form Table -->
	                            <table style="width:549px;" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="left" valign="top" style="width:549px; height:150px; background: url(/digitalcrisis/images/tableWideHead.gif); background-repeat:repeat-y;">
                                                <table style="width:549px; height:150px;" border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
          											  <td style="height:106;" valign="top" >
                                                                <table style="height:106px;" border="0" cellspacing="0" cellpadding="0">
                                                                  <tr>
                                                                    <td style="width:525px; height:55px;"><a name="contactform" id="contactform"></a></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td align="center" valign="top"><h2 class="style4">Contact Us Form</h2></td>
                                                                  </tr>
                                                                </table>
													  </td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top" class="style6">
                                                    
																	<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	   <tr>
																			<td style="width:25px;"></td>
																			<td align="left" class="style61">
                                                                                    <strong>Digital Crisis</strong> is a customer service driven company, 
                                                                                    and we are focused on offering the highest quality 
                                                                                    service possible to every single client.
                                                                			</td>
																			<td style="width:23px;">
                                                                			</td>
																			<td style="width:24px;">
                                                                			</td>
                                                                      </tr>
                                                                    </table>
                                                    
                                                    

                                                    </td>
                                                  </tr>
                                                </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="height:200px; background: url(/digitalcrisis/images/tableWideBody.gif); background-repeat:repeat-y;" valign="top">
                                      
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td style="width:525px;" align="center" class="style6">
                                                                <table width="480" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                      <td style="height:25px;" align="left" class="style6"></td>
                                                               	  	</tr>
                                                                    <tr>
                                                                      <td align="left" class="style61">Just fill out this quick form for an instant reply..</td>
                                                               	  	</tr>
                                                                    <tr>
                                                                      <td align="right" class="style8">&nbsp;<?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></td>
                                                               	  	</tr>
                                                                    <tr>
                                                                      <td style="height:500px;" align="left" valign="top" class="style6">
                                                                                    <form action="mailer.php" method="post" enctype="multipart/form-data">
                                                                                         <div class="style3">
                                                                                            <label>Your Name:</label> *<br />
                                                                                            <input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="75"/><br />
                                                                                    
                                                                                            <label>Your Email:</label> *<br />
                                                                                            <input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="75"/><br />
                                                                                    
                                                                                            <label>Home or Business Phone Number: (Required for a service call)</label> <br />
                                                                                            <input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="75"/><br />
                                                                                    
                                                                                            <label>Cell Phone Number:</label> <br />
                                                                                            <input class="form-input-field" type="text" value="<?php echo check('element3'); ?>" name="form[element3]" size="75"/><br />
                                                                                    
                                                                                            <label>Tentative Time for On-site Appointment:</label> <br />
                                                                                            <input class="form-input-field" type="text" value="<?php echo check('element4'); ?>" name="form[element4]" size="75"/><br /><br />
                                                                                    
                                                                                            <label></label>
                                                                                            <input <?php echo check('element5', 'radio', 'AM'); ?> type="radio" name="form[element5]" value="AM" />
                                                                                                <label>AM</label>&nbsp;&nbsp;&nbsp;or&nbsp;
                                                                                    
                                                                                            <input <?php echo check('element5', 'radio', 'PM'); ?> type="radio" name="form[element5]" value="PM" />
                                                                                                <label>PM</label><br /><br />
                                                                                    
                                                                                   
                                                                                            <label>Category:</label> *<br />
                                                                                            <select name="form[element6]">			<option <?php echo check('element6', 'select','Home Repair or Upgrade, or Networking'); ?> value="Home Repair or Upgrade, or Networking">Home Repair or Upgrade, or Networking</option>
                                                                                                <option <?php echo check('element6', 'select','Home Software, Virus, or Data Recovery'); ?> value="Home Software, Virus, or Data Recovery">Home Software, Virus, or Data Recovery</option>
                                                                                                <option <?php echo check('element6', 'select','Business PC Repair, Upgrade, or Maintenance'); ?> value="Business PC Repair, Upgrade, or Maintenance">Business PC Repair, Upgrade, or Maintenance</option>
                                                                                                <option <?php echo check('element6', 'select','Business Network, Print Services, Servers'); ?> value="Business Network, Print Services, Servers">Business Network, Print Services, Servers</option>
                                                                                                <option <?php echo check('element6', 'select','Training'); ?> value="Training">Training</option>
                                                                                                <option <?php echo check('element6', 'select','Learn more about Digital Crisis. '); ?> value="Learn more about Digital Crisis. ">Learn more about Digital Crisis. </option>
                                                                                            </select><br />
                                                                                    
                                                                                            <label>Subject:</label> *<br />
                                                                                            <input class="form-input-field" type="text" value="<?php echo check('element7'); ?>" name="form[element7]" size="40"/><br />
                                                                                    
                                                                                            <label>Previous Technician:</label> <br />
                                                                                            <select name="form[element8]">			<option <?php echo check('element8', 'select','None'); ?> value="None">None</option>
                                                                                                <option <?php echo check('element8', 'select','Billy'); ?> value="Billy">Billy</option>
                                                                                                <option <?php echo check('element8', 'select','Erik'); ?> value="Erik">Erik</option>
                                                                                                <option <?php echo check('element8', 'select','Jaysen'); ?> value="Jaysen">Robert</option>
                                                                                                <option <?php echo check('element8', 'select','Jaysen'); ?> value="Jaysen">Jaysen</option>
                                                                                                <option <?php echo check('element8', 'select','Zach'); ?> value="Zach">Zach</option>
                                                                                            </select><br />
                                                                                    
                                                                                           <label>Problem Description:</label> *<br />
                                                                                            <textarea class="form-input-field" name="form[element9]" rows="8" cols="50"><?php echo check('element9'); ?></textarea><br />
                                                                                    
                                                                                            <div style="display: none;">
                                                                                                <label>Spam Protection: Please don't fill this in:</label>
                                                                                                <textarea name="comment" rows="1" cols="1"></textarea>
                                                                                            </div>
                                                                                            <input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
                                                                                            <img src="/digitalcrisis/images/blank.gif" width="338" height="21" alt="blank" />
                                                                                          <input class="form-input-button" type="reset" name="resetButton" value="Reset" />
                                                                                            <input class="form-input-button" type="submit" name="submitButton" value="Submit" />
                                                                                        </div>
                                                                                    </form>
                                                                      
                                                                      </td>
                                                               	  </tr>
                                                                </table>
                                                    </td>
                                                    <td style="width:24px;"></td>
                                                  </tr>
                                                </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="height:48px; background: url(/digitalcrisis/images/tableWideFoot.gif); background-repeat:repeat-y;" align="center"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></td>
                                    </tr>
                                </table>
							<!-- End Contact Form Table -->
                            
<!-- End Left Column -->
                            
                            
					</td>
                    <td align="left" valign="top">
                    
                    
                    
<!-- Start Right Column -->
						  <br /><br /><a name="information" id="information"></a>
							<!-- Start Contact Info Table -->
                                <table style="width:283px;" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="left" valign="top" style="height:48px; background: url(/digitalcrisis/images/tableSmallHeadContact.gif); background-repeat:repeat-y;">
        									<table width="283" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td style="height:80px;"></td>
                                                </tr>
                                                      <tr>
                                                        <td style="height:42px;" class="style1"><h2 class="style1">&nbsp;Contact</h2></td>
        											  </tr>
                                                      <tr>
                                                        <td style="height:40px;" class="style11"><h2 class="style11">&nbsp;&nbsp;Information</h2></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="center">
                                                        
           			    					    					<table style="width:253px; height:27px;" border="0" cellspacing="0" cellpadding="0">
                                                                      <tr>
                                                                        <td style="height:27px;" align="left" valign="bottom" class="style61">
                                                                            <strong>Houston Location</strong>
                                                                        </td>
                                                                      </tr>
                                                                    </table>
                                   			    					<table border="0" cellspacing="0" cellpadding="0">
                                                                      <tr>
                                                                        <td style="width:75px;" align="left" valign="top" class="style61">
                                                                            <strong>
                                                                                Phone:<br />
                                                                                Fax:<br />
                                                                                Email:<br />
                                                                                Mail:
                                                                            </strong>
                                                                        </td>
                                                                        <td align="left" valign="top" class="style61">
                                                                        (281) 500 - 1213<br />
                                                                            (281) 500 - 1133<br />
                                                                            <a href="mailto:help@digitalcrisis.com">help@digitalcrisis.com</a><br />
                                                                            1711 Aden Mist Dr.<br />
                                                                            Houston, TX 77003
                                                                        </td>
                                                                      </tr>
                                                                    </table>

														</td>
                                                      </tr>
                                      </table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="height:41px; background: url(/digitalcrisis/images/tableSmallFoot.gif); background-repeat:repeat-y;" class="style7">&nbsp;</td>
                                  </tr>
                                </table>
							<!-- End Contact Info Table -->
								<br /><br /><a name="remote-support" id="remote-support"></a>
							<!-- Start Remote Support Table -->
                                <table style="width:283px;" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="left" valign="top" style="background: url(/digitalcrisis/images/tableSmallHeadRemote.gif); background-repeat:repeat-y;">
        									<table width="283" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td style="height:80px;"></td>
                                                </tr>
                                                      <tr>
                                                        <td style="height:42px;"><h2 class="style1">&nbsp;Remote</h2></td>
        											  </tr>
                                                      <tr>
                                                        <td style="height:40px;"><h2 class="style11">&nbsp;&nbsp;Support Online</h2></td>
                                                      </tr>
                                                      <tr>
                                                        <td style="height:18px;" class="style11"></td>
                                              </tr>
                                                      <tr>
                                                        <td style="height:72px;" align="center" valign="top" class="style61">	
                                                                    <strong>Digital Crisis</strong> can remote into<br />
                                                                    your computer and correct<br />
                                                                    minor software issues.
                                                        </td>
                                                      </tr>
                                      </table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="height:43px; background: url(/digitalcrisis/images/tableSmallFoot.gif); background-repeat:repeat-y;" align="center" valign="middle"><a href="#callNow" class="style7">Give us a call or have us call you!</a></td>
                                  </tr>
                                </table>
							<!-- End Remote Support Table -->
                            	<br /><br /><br />
							<!-- Start Ratepoint Widget Table -->
        									<table width="283" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td align="center">
                                              				<span id="iframe_rp_mini">
																<script type="text/javascript"><!--
                                                                iframe_width = "227px";
                                                                iframe_height = "306px";
																iframe_insert = 'iframe_rp_mini';
                                                                iframe_page = "http://sitetools.ratepoint.com/widget/30992?style=1&amp;color=3&amp;wide=1&amp;number_of_reviews=3&amp;average_rating=1&amp;rotate_reviews=1&amp;show_links=0";
                                                                create_iframe();
                                                                //-->
                                                                </script>
                                                            </span>
                                                        </td>
                                              </tr>
											</table>
                            
							<!-- End Ratepoint Widget Table -->

<!-- End Right Column -->
					</td>
                    <td style="width:32px;"></td>
                  </tr>
                </table>

	<?php unset($_SESSION['form']); ?>

	
				<br /><br />
    
	</td>
</tr>
<!-- End Body -->

<!-- Start Foot -->
<?php require '../foot.php';?>
<!-- End Foot -->



</body>
</html>

