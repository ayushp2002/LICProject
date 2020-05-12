<!-- This page is the one to be sent to the user through automatic mail thus it uses tables to position content -->
<!-- Does not work any more using static string data to send an email now -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600|Oswald:300,400,500&display=swap" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="http://localhost/LICProject/style/base.css">
    <link rel="stylesheet" href="http://localhost/LICProject/style/desktop.css">
    <link rel="stylesheet" href="http://localhost/LICProject/style/mobile.css"> -->

    <link rel="icon" href="./images/favicon.png" sizes="32x32" type="image/png">

    <title>LIC Agent Recruitment:Registration sent</title>
</head>
<body style="text-align:center;">
<div class="body" style="width: 100%;margin:auto;text-align:center;">
    <!-- <table cellspacing="0" cellpadding="0" style="width:70%;margin:auto;font-family:'Lato',sans-serif;text-align:center;border-collapse:collapse;">
        <tr style="background-color:hsl(0, 0%, 90%);border-top-left-radius:10px;border-top-right-radius:10px;">
            <td colspan="4" style="border-top-left-radius:10px;border-top-right-radius:10px;font-size:32px;font-family:'Oswald',sans-serif;color:hsl(210,75%,30%);padding-top:22px;padding-bottom:5px;">Thank you for registering</td>
        </tr>
        <tr style="background-color:hsl(0, 0%, 90%);">
            <td colspan="4" style="font-size:24px;color:hsl(210,75%,30%);padding-top:5px;padding-bottom:20px;">We'll take care of the rest</td>
        </tr>
        <tr>
            <td colspan="4" style="background-color:hsl(210, 75%, 30%);color:hsl(0, 0%, 85%);padding-top:16px;padding-bottom:5px;">Your data has been submitted.</td>
        </tr>
        <tr>
            <td colspan="4" style="background-color:hsl(210, 75%, 30%);color:hsl(0, 0%, 100%);font-size:24px;padding:21px;">Review the submitted data</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="background-color:hsl(210, 75%, 30%);text-align:left;font-weight:600;width:25%;"><div style="box-sizing:border-box;padding-top:26px;padding-left:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-left-radius:10px;background-clip:padding-box;color:hsl(210, 75%, 20%);">Name: </div></td>
            <td style="background-color:hsl(210, 75%, 30%);width:41%;"><div style="box-sizing:border-box;padding-top:18px;padding-right:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-right-radius:10px;background-clip:padding-box;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['name']; ?></div></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Email Id: </td>
            <td style="background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['email']; ?></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Phone: </td>
            <td style="background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['phone']; ?></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="background-color:hsl(210, 75%, 30%);text-align:left;font-weight:600;"><div style="width:100%;background-color:hsl(0, 0%, 95%);border-bottom-left-radius:10px;background-clip:padding-box;padding-top:5px;padding-bottom:26px;padding-left:18px;box-sizing:border-box;color:hsl(210, 75%, 20%);">PAN Number: </div></td>
            <td style="background-color:hsl(210, 75%, 30%);"><div style="width:100%;background-color:hsl(0, 0%, 95%);border-bottom-right-radius:10px;background-clip:padding-box;padding-top:5px;padding-bottom:18px;padding-right:18px;box-sizing:border-box;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['pan']; ?></div></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);color:hsl(0, 0%, 85%);">
            <td colspan="4" style="padding-top:16px;padding-bottom:20px;">We will reach you through e-mail soon.</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="color:hsl(0,0%,100%);padding-top:20px;padding-bottom:10px;">Having trouble? <a href="https://localhost/LICProject/queries.html" style="color:hsl(0, 0%, 100%);">Contact us</a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="padding-top:10px;padding-bottom:20px;"><a href="https://localhost/LICProject/index.html"><button style="line-height:40px;border-radius:3px;border:none;font-family:'Lato',sans-serif;font-size:14px;box-shadow: 2px 2px 3px hsl(0, 0%, 40%);outline:none;cursor: pointer;background-color:hsl(0, 0%, 100%);color:hsl(210, 75%, 25%);width:180px;margin-top:10px;margin-bottom:20px;">Continue to homepage</button></a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 20%);border-top-left-radius:10px;border-top-right-radius:10px;">
            <td colspan="4" style="color:hsl(0,0%,100%);font-weight:300;font-size:12px;width:100%;padding-top:10px;padding-bottom:10px;text-align:center;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">Copyright &copy; Ayush Kumar 2020. All Rights Reserved.</td>
        </tr>
    </table> -->
    <!-- This is a simpler version more likely to be supported everywhere -->
    <table cellspacing="0" cellpadding="0" style="text-align:center;font-family:sans-serif;border-collapse:collapse;color:hsl(0,0%,0%);border:solid 2px hsl(210,75%,25);">
        <tr>
            <td colspan="4" style="color:hsl(210,75%,30%);"><h1>Thank you for registering</h1></td>        
        </tr>
        <tr>
            <td colspan="4" style=""><h2>We\'ll take care of the rest</h2></td>
        </tr>
        <tr>
            <td colspan="4"><p>Your data has been submitted.</p></td>
        </tr>
        <tr>
            <td colspan="4"><h1>Review the submitted data</h1></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="padding-top:10px;background-color:hsl(210, 75%, 30%);text-align:left;font-weight:600;width:25%;"><div style="box-sizing:border-box;padding-top:26px;padding-left:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-left-radius:10px;background-clip:padding-box;color:hsl(210, 75%, 20%);">Name: </div></td>
            <td style="padding-top:10px;background-color:hsl(210, 75%, 30%);width:41%;"><div style="box-sizing:border-box;padding-top:18px;padding-right:18px;width:100%;background-color:hsl(0, 0%, 95%);border-top-right-radius:10px;background-clip:padding-box;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['name']; ?></div></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Email Id: </td>
            <td style="background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['email']; ?></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="background-color:hsl(0, 0%, 95%);text-align:left;padding-top:5px;padding-left:18px;font-weight:600;color:hsl(210, 75%, 20%);">Phone: </td>
            <td style="background-color:hsl(0, 0%, 95%);padding-top:5px;padding-right:18px;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['phone']; ?></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 30%);">
            <td style="width:17%;">&nbsp;</td>
            <td style="padding-bottom:10px;background-color:hsl(210, 75%, 30%);text-align:left;font-weight:600;"><div style="width:100%;background-color:hsl(0, 0%, 95%);border-bottom-left-radius:10px;background-clip:padding-box;padding-top:5px;padding-bottom:26px;padding-left:18px;box-sizing:border-box;color:hsl(210, 75%, 20%);">PAN Number: </div></td>
            <td style="padding-bottom:10px;background-color:hsl(210, 75%, 30%);"><div style="width:100%;background-color:hsl(0, 0%, 95%);border-bottom-right-radius:10px;background-clip:padding-box;padding-top:5px;padding-bottom:18px;padding-right:18px;box-sizing:border-box;"><div style="background-color:hsl(0, 0%, 85%);border:solid 1px hsl(210,75%,25%);border-radius:3px;box-shadow:inset 0 0 3px hsla(0, 0%, 0%, 0.2);padding:3px;font-weight:300;"><?php $_POST['pan']; ?></div></td>
            <td style="width:17%;">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="4"><p>We will reach you through e-mail soon.</p></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="color:hsl(0,0%,100%);padding-top:20px;padding-bottom:10px;">Having trouble? <a href="https://localhost/LICProject/queries.html" style="color:hsl(0, 0%, 100%);">Contact us</a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 24%);">
            <td colspan="4" style="padding-top:10px;padding-bottom:20px;"><a href="https://localhost/LICProject/index.html"><button style="line-height:40px;border-radius:3px;border:none;font-family:sans-serif;font-size:14px;box-shadow: 2px 2px 3px hsl(0, 0%, 40%);outline:none;cursor: pointer;background-color:hsl(0, 0%, 100%);color:hsl(210, 75%, 25%);width:180px;margin-top:10px;margin-bottom:20px;">Continue to homepage</button></a></td>
        </tr>
        <tr style="background-color:hsl(210, 75%, 20%);border-top-left-radius:10px;border-top-right-radius:10px;">
            <td colspan="4" style="color:hsl(0,0%,100%);font-weight:300;font-size:12px;width:100%;padding-top:10px;padding-bottom:10px;text-align:center;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">Copyright &copy; Ayush Kumar 2020. All Rights Reserved.</td>
        </tr>
    </table>
</div>
</body>
</html>