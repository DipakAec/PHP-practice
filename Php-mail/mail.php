<?php
$to = "rumpamahaldar@gmail.com";
$subject = "Birthday Wish";
$message = "Happy Birthday to you!!!";
$from = "dipakweb22@gmail.com";

if (mail($to,$subject,$message)) {
    echo "Mail sended successfully";
}
else{
    echo "Mail is not sent.";
}



?>