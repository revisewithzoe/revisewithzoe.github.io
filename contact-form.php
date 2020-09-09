<?PHP
$errors = '';
$myemail = 'z.ikeotuonye@gmail.com';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
    empty($_POST['phone']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

$email = $_POST["emailaddress"];
$to = "you@youremail.com";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

Email Address: $email";
$user = "$email";

$usersubject = "Thank You";
$userheaders = "From: z.ikeotuonye@gmail.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$name,$email,$phone,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>
