<?php 
    if(isset($_POST['firstname']) && isset($_POST['email']) &&isset($_POST['firstdate']) && isset($_POST['seconddate'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $to = 'milesfarrell1997@gmail.com';
        $subject = "Hopara test";
        $body = '<html>
                    <body>
                        <h2>We have a new date wishing to be booked</h2>
                        <p>Name<br>'.$firstname.'</p>
                        <p>Email<br>'.$email.'</p>
                        <p>First Date<br>'.$firstdate.'</p>
                        <p>Second Date<br>'.$seconddate.'</p>
                    </body>4
                </html>';
            
    //headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";
    //send
    $send = mail($to, $subject, $body, $headers);
    if($send){
        echo '<br>';
        echo 'Thanks for booking with hopara! we will ring you shortly!';
    }else{
        echo 'error';
    }
    }

?>