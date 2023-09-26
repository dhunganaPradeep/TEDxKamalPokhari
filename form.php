<?php 

// if(isset($_POST['submit'])){
//     $to = "hi@tedxkamalpokhari.com"; 
//     $from = $_POST['email'];
//     $first_name = $_POST['fname'];
//     $last_name = $_POST['lname'];
//     $email = $_POST['email'];
//     $number = $_POST['number'];
//     $message = $_POST['message'];
//     $subject = "Form submission";
//     $txt = "Name = " . $first_name . ' ' . $last_name . "\r\n  Email = " . $email . "\r\n Mobile = " . $number . "\r\n wrote the following: " . $message . "\n\n";
//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$txt,$headers);
//     header("Location: contact.html");

//     }
?>

<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname']; 
        $email_id = $_POST['email']; 
        $number = $_POST['number'];
        $msg = $_POST['message'];
        $to = "jobguy222@gmail.com"; 
        $subject = "$fname $lname has submitted a form";
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>FName: </strong></td>
                            <td style='width:400px'>$fname</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>LName: </strong></td>
                            <td style='width:400px'>$lname</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Phone Number: </strong></td>
                            <td style='width:400px'>$number</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <dhungana.pradip188@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>
