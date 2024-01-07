<?php

require_once 'mail.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];

    // عناوين البريد الإلكتروني
    $emails = array(
        "Mostefa.Bourouaha@Sonatrach.dz",
        "Hicham.BOUALI@Sonatrach.dz",
        "ABDELKADER.ABBA@Sonatrach.dz",
        "FAYCAL.BAGUI@Sonatrach.dz",
        "MOHAMMEDTAQIYEDDINE.BELAZGHEM@Sonatrach.dz",
        "TAYEBI.Abdallah@Sonatrach.dz",
        "Fouad.ALLAOUA@Sonatrach.dz",
        "BOUKHRIS.Medjdoub@Sonatrach.dz",
        "TARIK.MECHAKRA@Sonatrach.dz",
        "MEBAREK.MAMMERI@Sonatrach.dz",
        "BOUZIANE.Bachir@Sonatrach.dz",
        "Abdelkader.Hamlaoui@Sonatrach.dz",
        "SAID.ATAOUAT@Sonatrach.dz",
        "Lhacene.Hacene@Sonatrach.dz",
        "MOHAMMEDABDALLAH.AKRABOU@Sonatrach.dz",
        "MOHAMMEDELHASSAN.CHAFAI@Sonatrach.dz",
        "MUSTAPHA.MAHFOUD@Sonatrach.dz",
        "ABDELLAH.HAMI@Sonatrach.dz",
        "AHMED.ABIDI@Sonatrach.dz",
        "NOUREDDINE.ZAHOUANI@Sonatrach.dz",
        "Yahia.Meftah@Sonatrach.dz",
        "ILYAS.SMAHI@Sonatrach.dz"
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
