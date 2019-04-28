<?php
    $to = 'simi.adelore@gmail.com';
    $from = $_POST["fname"];
    $text= $_POST["email address"];
    $text= $_POST["phone number"];
    $text= $_POST["departure city"];
    $text= $_POST["arrival city"];
    $text= $_POST["date of depature"];
    $text= $_POST["date of arrival"];
    $text= $_POST["one way/ return"];
    $text= $_POST["Include a Hotel?"];
    $text= $_POST["rooms"];
    $text= $_POST["adults"];
    $text= $_POST["children"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $fname . "\r\n"; // Sender's E-mail
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
