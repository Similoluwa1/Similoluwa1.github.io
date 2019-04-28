<?php
    $to = 'simi.adelore@gmail.com';
    $fname = $_POST["fname"];
    $email address= $_POST["email address"];
    $phone number= $_POST["phone number"];
    $departure city= $_POST["departure city"];
    $arrival city= $_POST["arrival city"];
    $date of depature= $_POST["date of depature"];
    $date of arrival= $_POST["date of arrival"];
    $one way/ return= $_POST["one way/ return"];
    $include a hotel= $_POST["include a hotel?"];
    $rooms= $_POST["rooms"];
    $adults= $_POST["adults"];
    $children= $_POST["children"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email address . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$fname.'</td>
        </tr>
        <tr><td>Email Address: '.$email address.'</td></tr>
        <tr><td>Phone Number: '.$phone number.'</td></tr>
        <tr><td>Departure City: '.$departure city.'</td></tr>
        <tr><td>Arrival City: '.$arrival city.'</td></tr>
        <tr><td>Date of Depature: '.$date of depature.'</td></tr>
        <tr><td>Date of Arrival: '.$date of arrival.'</td></tr>
        <tr><td>One way/ Return: '.$one way/ return.'</td></tr>
        <tr><td>Include a Hotel: '.$include a hotel.'</td></tr>
        <tr><td>Rooms: '.$rooms.'</td></tr>
        <tr><td>Adults: '.$adults.'</td></tr>
        <tr><td>Children: '.$children.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
