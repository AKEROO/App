<?php

require_once 'mail.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];

    // عناوين البريد الإلكتروني
    $emails = array(
        "MOHAMMEDABDALLAH.AKRABOU@Sonatrach.dz",
        "MUSTAPHA.MAHFOUD@Sonatrach.dz",
        "NOUREDDINE.ZAHOUANI@Sonatrach.dz"
    );

    // إعداد PHPMailer
    require_once 'mail.php';
    $mail->setFrom('servicehse24@gmail.com', "HSE");
    
    // إضافة عناوين البريد الإلكتروني إلى المستلمين في PHPMailer
    foreach ($emails as $email) {
        $mail->addAddress($email);
    }

    $mail->Subject = 'رسالة جديدة للموظفين';
    $mail->Body = $message;

    // إرسال البريد الإلكتروني
    $mail->send();

    echo "تم إرسال الرسالة بنجاح!";
} else {
    echo "خطأ: يجب أن يتم الوصول إلى هذه الصفحة من خلال النموذج الصحيح.";
}
?>
