<?php
   require 'phpmailer/PHPMailerAutoload.php';
   $send_to=$_POST['mail'];
   $mail = new PHPMailer;
   $mail->SMTPDebug = 0; 
   $mail ->isSMTP();

   $mail ->SMTPAuth=true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = '587'; // or 587
   $mail ->IsHTML();
   $mail ->Username = "yourmail@gmail.com";
   $mail ->Password = "yourpass";
   $mail ->SetFrom($send_to);
   $mail ->Subject = 'Verification Code';
   $code=rand(1,100000);
   $mail ->Body = $code;
   $mail ->AddAddress($send_to);

$con=mysql_connect('localhost','root','');
$z=mysql_select_db("auction",$con);


$Select = "INSERT into checker values('$send_to','$code')";
$Rsc  = mysql_query($Select);
   if(!$mail->Send())
   {
       echo "Mail Not Sent".$mail->ErrorInfo;
   }
   else
   {
       echo "Mail Sent";
   }

?>
<html>
<body>

   <form name='checker' action='checker.php' method='post'>
      Your email id: 
      <input type=text name='email' id='email' value='<?php echo $send_to ?>' placeholder = '<?php echo $send_to ?>'><br>

      Enter verification code<br>

      <input type='text' name='code' id='code' placeholder='Enter verification code'>
      <br>
      <input type="submit"  name="submit" value="Click here" id="submit">
</form>
</body>
</html>
