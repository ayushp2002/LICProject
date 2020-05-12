<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600|Oswald:300,400,500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://lic-agent-recruitment.herokuapp.com/style/base.css">
    <link rel="stylesheet" href="https://lic-agent-recruitment.herokuapp.com/style/desktop.css">
    <link rel="stylesheet" href="https://lic-agent-recruitment.herokuapp.com/style/mobile.css">

    <link rel="icon" href="./images/favicon.png" sizes="32x32" type="image/png">

    <title>LIC Agent Recruitment:Query sent</title>
</head>
<!-- The design is same as the registration submission response page -->
<body style="height:100vh;display:flex;align-items:center;flex-direction:column;width:100vw;margin:0;">
    <div class="registration-complete-wrapper">
        <div class="heading">
            <h1>Thank you for asking your query</h1>
            <h2>We'll take care of the rest</h2>
        </div>
        <div class="content">
            <p>Your query has been submitted.</p>
            <h2>Review the submitted data</h2>
            <ul>
                <li>
                    <span class="key">Name: </span>
                    <span class="data"><?php echo($_POST['name']); ?></span>
                </li>
                <li>
                    <span class="key">Email Id: </span>
                    <span class="data"><?php echo($_POST['email']); ?></span>
                </li>
                <li>
                    <span class="key">Query: </span>
                    <span class="data" style="overflow:scroll;max-height:200px;"><?php echo($_POST['query']); ?></span>
                </li>
            </ul>
            <p class="message">We will reach you through e-mail soon.</p>
            <p class="message">(A copy of this response has been sent to your e-mail.)</p>
        </div>
        <div class="actions">
            <p>Having trouble? <a href="./queries.html">Contact us</a></p>
            <a href="./index.html"><button>Continue to homepage</button></a>
        </div>
        <footer style="width:100%;align-self:flex-end;">
            <div class="rights">
                Copyright &copy; Ayush Kumar 2020. All Rights Reserved.
            </div>
        </footer>
    </div>
</body>
</html>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = "LICMailerBot";
        $email = $_POST['email'];
        $subject = $_POST['name'] . ' : LIC Agent Query request';
        $body = '
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600|Oswald:300,400,500&display=swap" rel="stylesheet">
            
        </head>
        <body>
        <div class="body" style="width:99%;margin:auto;border-style:solid;border-width:2px;border-color:hsl(210,75%,25%);border-radius:10px;">
        <table cellspacing="0" cellpadding="0" style="width:100%;text-align:center;font-family:sans-serif;border-collapse:collapse;color:hsl(0,0%,0%);">
        <tr>
            <td colspan="4" style="color:hsl(210,75%,30%);"><h1>There is a new query</h1></td>        
        </tr>
        <tr>
            <td colspan="4" style=""><h2>A new query request was recieved</h2></td>
        </tr>
        <tr>
            <td colspan="4"><p>The candidate submitted all the required data</p></td>
        </tr>
        <tr>
            <td colspan="4"><h1>Here\'s the submitted data</h1></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:10%;">&nbsp;</td>
            <td style="padding-top:10px;background-color:hsl(210, 75%, 30%);text-align:left;font-weight:600;width:30%;"><div style="box-sizing:border-box;padding-top:26px;padding-left:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-left-radius:10px;background-clip:padding-box;color:hsl(210, 75%, 20%);">Name: </div></td>
            <td style="padding-top:10px;background-color:hsl(210, 75%, 30%);width:50%;"><div style="box-sizing:border-box;padding-top:18px;padding-right:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-right-radius:10px;background-clip:padding-box;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;">' .  $_POST['name'] . '</div></td>
            <td style="width:10%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:10%;">&nbsp;</td>
            <td style="background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Email Id: </td>
            <td style="background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;">' . $_POST['email'] . '</td>
            <td style="width:10%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
            <td style="width:10%;">&nbsp;</td>
            <td style="border-bottom-left-radius:10px;background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Query: </td>
            <td style="padding-bottom:18px;border-bottom-right-radius:10px;background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="max-height:200px;overflow:scroll;background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;">' . $_POST['query'] . '</td>
            <td style="width:10%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="4"><p>Try to reach them as soon as possible.</p></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="color:hsl(0,0%,100%);padding-top:20px;padding-bottom:10px;">Having trouble? <a href="mailto:ayushp2002@gmail.com" style="color:hsl(0, 0%, 100%);">Contact the developer</a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="padding-top:10px;padding-bottom:20px;"><a href="mailto:' . $_POST['email'] . '"><button style="line-height:40px;border-radius:3px;border:none;font-family:sans-serif;font-size:14px;box-shadow: 2px 2px 3px hsl(0, 0%, 40%);outline:none;cursor: pointer;background-color:hsl(0, 0%, 100%);color:hsl(210, 75%, 25%);width:180px;margin-top:10px;margin-bottom:20px;">Reply now</button></a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 20%);border-top-left-radius:10px;border-top-right-radius:10px;">
            <td colspan="4" style="color:hsl(0,0%,100%);font-weight:300;font-size:12px;width:100%;padding-top:10px;padding-bottom:10px;text-align:center;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">Copyright &copy; Ayush Kumar 2020. All Rights Reserved.</td>
        </tr>
        </table>
        </div>
        <p>
            Disclaimer: This is an automatically generated mail. If you did not take any actions to recieve it, please ignore and delete it.
        </p>
        </body>
        </html>
        ';

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mailme = new PHPMailer();

        //SMTP Settings
        $mailme->isSMTP();
        $mailme->Host = "smtp.gmail.com";
        $mailme->SMTPAuth = true;
        $mailme->Username = "licmailerbot@gmail.com"; //sender
        $mailme->Password = 'Licmailerbot@123';
        $mailme->Port = 465; //587
        $mailme->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mailme->isHTML(true);
        $mailme->setFrom($email, $name);
        $mailme->addAddress("licmailreciever@gmail.com");  //reciever
        $mailme->Subject = $subject;
        $mailme->Body = $body;

        if ($mailme->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mailme->ErrorInfo;
        }


        // $userMailFile = "./userRegisterMail.php";

        // $bodyuser = file_get_contents($userMailFile);

        // This is the html code for the mail that has to be sent to the user
        $bodyuser = '
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600|Oswald:300,400,500&display=swap" rel="stylesheet">
            
        </head>
        <body>
        <div class="body" style="width: 99%;margin:auto;border-style:solid;border-width:2px;border-color:hsl(210,75%,25%);border-radius:10px;">
        <table cellspacing="0" cellpadding="0" style="margin:auto;width:100%;text-align:center;font-family:sans-serif;border-collapse:collapse;color:hsl(0,0%,0%);">
        <tr>
            <td colspan="4" style="color:hsl(210,75%,30%);"><h1>Thank you for asking your query</h1></td>        
        </tr>
        <tr>
            <td colspan="4" style=""><h2>We\'ll take care of the rest</h2></td>
        </tr>
        <tr>
            <td colspan="4"><p>Your query has been submitted.</p></td>
        </tr>
        <tr>
            <td colspan="4"><h1>Review the submitted data</h1></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:10%;">&nbsp;</td>
            <td style="padding-top:10px;background-color:hsl(210, 75%, 30%);text-align:left;font-weight:600;width:30%;"><div style="box-sizing:border-box;padding-top:26px;padding-left:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-left-radius:10px;background-clip:padding-box;color:hsl(210, 75%, 20%);">Name: </div></td>
            <td style="padding-top:10px;background-color:hsl(210, 75%, 30%);width:50%;"><div style="box-sizing:border-box;padding-top:18px;padding-right:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-right-radius:10px;background-clip:padding-box;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;">' .  $_POST['name'] . '</div></td>
            <td style="width:10%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:10%;">&nbsp;</td>
            <td style="background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Email Id: </td>
            <td style="background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;">' . $_POST['email'] . '</td>
            <td style="width:10%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
            <td style="width:10%;">&nbsp;</td>
            <td style="border-bottom-left-radius:10px;background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Query: </td>
            <td style="padding-bottom:18px;border-bottom-right-radius:10px;background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="max-height:200px;overflow:scroll;background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;">' . $_POST['query'] . '</td>
            <td style="width:10%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="4"><p>We will reach you through e-mail soon.</p></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="color:hsl(0,0%,100%);padding-top:20px;padding-bottom:10px;">Having trouble? <a href="https://lic-agent-recruitment.herokuapp.com/queries.html" style="color:hsl(0, 0%, 100%);">Contact us</a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="padding-top:10px;padding-bottom:20px;"><a href="https://lic-agent-recruitment.herokuapp.com/index.html"><button style="line-height:40px;border-radius:3px;border:none;font-family:sans-serif;font-size:14px;box-shadow: 2px 2px 3px hsl(0, 0%, 40%);outline:none;cursor: pointer;background-color:hsl(0, 0%, 100%);color:hsl(210, 75%, 25%);width:180px;margin-top:10px;margin-bottom:20px;">Continue to homepage</button></a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 20%);">
            <td colspan="4" style="color:hsl(0,0%,100%);font-weight:300;font-size:12px;width:100%;padding-top:10px;padding-bottom:10px;text-align:center;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">Copyright &copy; Ayush Kumar 2020. All Rights Reserved.</td>
        </tr>
        </table>
        </div>
        <p>
            Disclaimer: This is an automatically generated mail. If you did not take any actions to recieve it, please ignore and delete it.
        </p>
        </body>
        </html>
        ';

        $subjectuser = "Thank you for asking your query to LIC Agent Recruitment.";

        $mailuser = new PHPMailer();

        //SMTP Settings
        $mailuser->isSMTP();
        $mailuser->Host = "smtp.gmail.com";
        $mailuser->SMTPAuth = true;
        $mailuser->Username = "licmailerbot@gmail.com"; //sender
        $mailuser->Password = 'Licmailerbot@123';
        $mailuser->Port = 587; //465
        $mailuser->SMTPSecure = "tls"; //ssl

        //Email Settings
        $mailuser->isHTML(true);
        $mailuser->setFrom($email, "LICMailBot");
        $mailuser->addAddress($_POST['email']);  //reciever
        $mailuser->Subject = $subjectuser;
        $mailuser->Body = $bodyuser;

        if ($mailuser->send()) {
            $status = "success";
            $response = "Email is sent!";
            // echo("<script>alert('sent');</script>");
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mailuser->ErrorInfo;
            // echo("<script>alert('failed  $mailuser->ErrorInfo  $bodyuser');</script>");
        }

        // exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
