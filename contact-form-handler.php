<?php
   $name = $_post['name'};
   $visitor_email = $_Post['email'];
   $message = $_POST['message'];
   
   $email_from = 'kfunk313@gmail.com';
   
   $email_subject = "New Form Submission";
   
   $email_body = "User Name: $name./n"
            "User Email: $visitor_email./n"
            "User Message: $message./n";
            
            
   $to = "kfunk313@gmail.com";
   
   $headers ="From" $email_from /r/n";
   
   $header .= "Reply-To: $visitor_email /r/n";
   
   
   mail($to, $email_subject,$email_body,$headers);
   
   header("Location: index.html");
   ?>