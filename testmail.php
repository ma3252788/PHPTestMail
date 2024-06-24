<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.qq.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'xxx@qq.com';                 
    $mail->Password   = '';                             
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                                    
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('xxx@qq.com', 'Mailer');
    $mail->addAddress('xxxx@126.com', 'Recipient Name');     

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = '测试邮件';
    $mail->Body    = '这是一封测试邮件。';

    $mail->send();
    echo '邮件发送成功！';
} catch (Exception $e) {
    echo "邮件发送失败。Mailer Error: {$mail->ErrorInfo}";
}

?>
