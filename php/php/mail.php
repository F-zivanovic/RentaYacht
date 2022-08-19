<?php
$from= "no-reply@rentayacht.rs";
$to="book@rentayacht.rs";

$subject="Novo obaveštenje!";
$message="Poštovani,

Novi zahtev je došao.
Novi klijent $fullname, zainteresovan je za termin dana $date u $hourStart, u trajanju od $hour.
";
$message .= "Kontaktiraj klijenta na $telephonNumber, ili putem mejla na $email.

";
$message .= "Ovo je automatizovana poruka.
LoremIn";



$headers="From:" . $from;


$retval = mail ($to,$subject,$message,$headers);

if( $retval == true ) {
        header("Location: ../index.html");
    }else {
    echo "Message could not be sent...";
    }
?>