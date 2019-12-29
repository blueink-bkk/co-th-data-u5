<?php
if(isset($_POST['submit']))
{
	$to_email = "infoblueink@ultimheat.com"; 
	
	//Sanitize input data using PHP filter_var().
	$user_name	= filter_var($_POST["uname"], FILTER_SANITIZE_STRING);;
	$user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone_number = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
	$subject  = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $msg   = htmlspecialchars($_POST["message"], ENT_QUOTES);
	
	//email body
	$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	
    $message_body .= "<b>Name :</b> ".$user_name."<br>"; 
   
    $message_body .= "<b>Email:</b> ".$user_email."<br>"; 
   
    $message_body .= "<b>Phone:</b> ".$phone_number."<br>";
	  
	$message_body .= "<b>Subject:</b> ".$subject."<br>";
   
    $message_body .= "<b>Message:</b> ".$msg."<br>";

	$mail = mail($to_email, 'ULTIMHEAT Contact Us', $message_body,$headers);
	
	if($mail){
		$_SESSION["msg"] = "The email has been successfully sent, thank you.";
	}
	else{
		$_SESSION["msg"] = "Failed to send mail!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title> Blue Ink Co.Ltd bangkok </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
	  <?php include('head.php'); ?>
	  
   </head>
   <body>
      
	  <?php include('header.php'); ?>
	  
      <div class="container-fluid top-space">
         <div class="container">
            <div class="row reverse-mob">
               <div class="col-lg-12 col-md-12 order-des pb-3">
                  <div>
                     <h1 class="pb-2"> Contact Us </h1>
                     <div class=" mb-3">
                        <p>Valued Customer,<br>
                           The Increase in SPAM emails obligned us to take some prevention measures so we can keep offering you the shortest answering time and best services,
                        </p>

                        <p> <b> Please email your question and we will respond within 24 hours.</b> </p>
						<?php if(isset($_SESSION['msg'])) { ?>
						
							<p class="form-msg">
								<?php echo $_SESSION['msg'];
									unset($_SESSION['msg']); ?>
							</p>
							
						<?php } ?>

                           <form method="post" enctype="multipart/form-data" class="email-form">
                                 
                                 <div class="row">
                                    <div class="col-md-6">
                                       <input type="text" id="uname" class="form-control"  name="uname" placeholder="Your name"><label id="dis"></label> 
                                    </div>
                                    <div class="col-md-6">
                                       <input type="text" id="email" class="form-control" name="email" placeholder="Your E-mail"><label id="dis1"></label> 
                                    </div>
                                    <div class="col-md-12">
                                       <input type="number" id="phone" class="form-control" name="phone" placeholder="Your Phone"><label id="dis2"></label>
                                    </div>
                                    <div class="col-md-12">
                                       <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject"><label id="dis3"></label>
                                    </div>
                                    <div class="col-md-12">
                                      <textarea rows="5" id="message" class="form-control" name="message" placeholder="Your message:(Maximum 4000 characters)" ></textarea><label id="dis4"></label>
                                    </div>
                                   <div class="col-md-12">
                                       <div class="g-recaptcha" id="captcha" data-sitekey="6LeleLoUAAAAAHD7JJqJ7UWgFo-lDvOz4J0YQ5Vn"></div> <label id="dis5"></label>
                                    </div>
                                    <div class="col-md-12">
                                       <input type="submit" name="submit" id="submit" class="form-control" value="submit">
                                    </div>
                                 </div>

                           </form>
						    
						   

                     </div>
                  </div> 
                
                  
               </div>
            </div>
         </div> 
      </div>
      
	<?php include('footer.php'); ?>
	
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
function ValidateEmail(email) {
      var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      return expr.test(email);
}
function ValidateUsername(uname){
 var expr=/^[a-zA-Z0-9_ ]{3,30}$/;
 return expr.test(uname);
} 
function ValidateMobile(phone){
 var expr=/^[0-9]{10,14}$/;
 return expr.test(phone);
}

$(document).ready(function(){
 $('#submit').on('click', function(e) {
  var username=$('#uname').val();
  var email=$('#email').val();
  var mobile=$('#phone').val();
  var subject=$('#subject').val();
  var message=$('#message').val();
  
    //User name validate...
  if(username==""){
   $('#dis').fadeIn().html('<span id="error">Name cannot be empty.</span>');
   return false;
  }else if(!ValidateUsername(username)){
   $('#dis').fadeIn().html('<span id="error">Please check and re-enter.</span>');
   return false;
  }else{
   $('#dis').fadeOut();
  }
  
  //E-mail validate..
  if(email==""){
   $('#dis1').fadeIn().html('<span id="error">Email address cannot be empty.</span>');
   return false;
  }else if (!ValidateEmail(email)) {
           //alert("Invalid email address.");
     $('#dis1').fadeIn().html('<span id="error">Please check and re-enter.</span>');
   return false;
  }else{
   $('#dis1').fadeOut();
  }
  
  
  
  //Mobile validate
  if(mobile==""){
   $('#dis2').fadeIn().html('<span id="error">Telephone number cannot be empty.</span>');
   return false;
  }else if(!ValidateMobile(mobile)){
   $('#dis2').fadeIn().html('<span id="error">Wrong number, start again.</span>');
   return false;
  }else{
   $('#dis2').fadeOut();
  }
  
  //Subject validate
  if(subject==""){
   $('#dis3').fadeIn().html('<span id="error">Title cannot be empty, please check and re-enter. </span>');
   return false;
  }else{
   $('#dis3').fadeOut();
  }
  
  //Message validate
  if(message==""){
   $('#dis4').fadeIn().html('<span id="error">Text cannot be empty, please check and re-enter.</span>');
   return false;
  }else{
   $('#dis4').fadeOut();
  }
  
  //Captcha validate
  if(grecaptcha.getResponse() == "") {
    e.preventDefault();
    $('#dis5').fadeIn().html('<span id="error">Captcha is required.</span>');
	return false;
  } else {
    $('#dis5').fadeOut();
  }
  
  
 });
});


</script>
	  
    </body>
</html>