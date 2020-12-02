<?PHP
$name       = @trim(stripslashes($_POST['fullname'])); 
$phone       = @trim(stripslashes($_POST['phone'])); 
$subject    = "Books4u Quick Contact";
$message    = @trim(stripslashes($_POST['message'])); 
$to         = "yashsharma.bsf@gmail.com, sanjay.kjha.97@gmail.com, kausalxenon54@gmail.com";
$from = "Books4u JGEC <books4u.jgec@gmail.com>"; 
$headers ="From:$from\n";
$headers.="Cc:books4u.jgec@gmail.com"."\r\n";
$headers.="MIME-Version: 1.0\n";
$headers.="Content-type: text/html; charset=iso 8859-1";

$message= "<html><body><p>A visitor to your site has sent the following message:</p> •••♥♥♥•••♥♥♥•••♥♥♥•••   •••♥♥♥•••♥♥♥•••♥♥♥•••   •••♥♥♥•••♥♥♥•••♥♥♥•••  <hr/><br/>
<h3>Phone: $phone<br/>Name: $name<br/>Subject: $subject<br/>Message: $message</h3></html></body>";
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