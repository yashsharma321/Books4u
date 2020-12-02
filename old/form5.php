<?PHP
$name       = @trim(stripslashes($_POST['fullname'])); 
$email       = @trim(stripslashes($_POST['email'])); 
$subject    = "Books4u - Feedback Form"; 
$message1    = @trim(stripslashes($_POST['message1'])); 
$message2    = @trim(stripslashes($_POST['message2'])); 
$message3    = @trim(stripslashes($_POST['message3'])); 
$to         = "yashsharma.bsf@gmail.com, sanjay.kjha.97@gmail.com, kausalxenon54@gmail.com";
$from = "Books4u JGEC <books4u.jgec@gmail.com>"; 
$headers ="From:$from\n";
$headers.="Cc:books4u.jgec@gmail.com"."\r\n";
$headers.="MIME-Version: 1.0\n";
$headers.="Content-type: text/html; charset=iso 8859-1";

$message = "<html><body><p>A visitor to your site has sent the following message:</p> •••♥♥♥•••♥♥♥•••♥♥♥•••   •••♥♥♥•••♥♥♥•••♥♥♥•••   •••♥♥♥•••♥♥♥•••♥♥♥•••  <hr/><br/>
<h3>Email: $email<br/>Name: $name<br/>Subject: $subject<br/>Review: $message1<br/>Good in us: $message2<br/>Bad in us: $message3</h3></html></body>";

if(mail($to,$subject,$message,$headers))
{

header("Location: thank-you.html"); 
exit();
}
else
{
    echo "Network Error! Please retry.";
}
?>

<BR/><BR/><BR/>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>