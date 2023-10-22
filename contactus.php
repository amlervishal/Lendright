<?php
    $email_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){
       
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            // sumbit the form

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMobile = $_POST['mobile'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "info@lendright.in";
            $headers = 'From: info@lendright.in'. "\r\n";
            $emailSubject = "LENDRIGHT ENQUIRY FORM: ". $messageSubject;
            $body = "";


            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Mobile: ".$userMobile. "\r\n";
            $body .= "Subject: ".$messageSubject. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $emailSubject, $body, $headers);
            
            $email_sent = true;
        }
        else{
            $invalid_class_name = "form-invalid";
        }
    }

?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lendright</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/index.css">

        <script src="/nav.js" defer></script>
        
    </head>
    <body>
       <header class="primary-header flex">
        <a class="logo-txt flex" href="index.html">lendright <img class="logo" src="/img/vector-1.svg" alt=""></a>
        <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false"><span class="sr-only">Menu</span></button>
            <nav>
                <ul id="primary-navigation" data-visible="false" class="primary-navigation flex gap1">
                    <li class="active" aria-hidden="true"><a href="/index.html">HOME</a></li>
                    <li class="active" aria-hidden="true"><a href="/about.html">ABOUT</a></li>
                    <li class="active" aria-hidden="true"><a href="/services.html">SERVICES</a></li>
                    <li class="active" aria-hidden="true"><a href="application.html">PROCESS</a></li>
                    <li class="active" aria-hidden="true"><a href="/documents.html">DOCUMENTS</a></li>
                    <li class="active" aria-hidden="true"><a href="/contactus.php">CONTACT</a></li>
                </ul>
            </nav>
       </header> 

            <section class="form-section">
                <div>
                    <h4 class="text-center">Begin your credit search with lendright</h4>
                    <p class="small-text">Send in your querry and we will get back to you at the earliest</p>
                </div>
                <div class="">
                    <form action="contact.html" method="POST" class="form">

                        <div class="form-group">
                            <label for="name" class="form-label">Your Name </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label  <?= $invalid_class_name ?? "" ?>">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="form-label ">Contact Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" tabindex="3" required>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label ">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enquiry" tabindex="4" required>
                        </div>


                        <div class="form-group">
                            <label for="message" class="form-label ">Message</label>
                            <textarea class="form-control"  id="message" name="message" placeholder="Message.." tabindex="5"></textarea>
                        </div>

                        <div class="text-center padding-5 ">
                            <button type="submit" class="btn-01 ">Send Message!</button>
                        </div>

                        <?php
                            if($email_sent):
                        ?>
                            <h3>Thank you, We will be in touch soon</h3>
                        <?php
                            endif;
                        ?>
                    </form>
                </div>
            </section>

    </section>

   <footer class="footer">
        <div>
            <a href="/contactus.php">Contact Us</a>
        </div>

        <div>
            <a href="/privacy-policy.html">Privacy Policy</a>
        </div>

        <div>
            <p>Copyright 2023. All rights reserved. Designed and Developed by va</p>
        </div>
   </footer>
    </body>
</html>