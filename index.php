<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Submit to Send Email</title>
</head>
<body>
<?php
    if(!empty($_POST["send"])){
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $userSubject = $_POST["userSubject"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "abdulahad010274@gmail.com";

        $mailHeaders = "Name: " . $userName .
        "\r\n Email: " . $userEmail .
        "\r\n Subject: " . $userSubject .
        "\r\n Message: " . $userMessage . "\r\n";

        if(mail($toEmail, $userName, $mailHeaders)){
            $message = "Your Information is Received Successfully.";
        }
    }
?>
<div class="form-container">
        <form method="post" name="emailContact">
            <div class="input-row">
                <label>Name <em>*</em></label>
                <input type="text" name="userName" required>
            </div>
            <div class="input-row">
                <label>Email <em>*</em></label>
                <input type="email" name="userEmail" required>
            </div>
            <div class="input-row">
                <label>Subject <em>*</em></label>
                <input type="text" name="userSubject" required>
            </div>
            <div class="input-row">
                <label>Message <em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>
            <div class="input-row">
                <input type="submit" name="send" value="Submit">
                <?php if(!empty($message)){ ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>