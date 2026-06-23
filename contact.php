<?php
header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/mail-config.php';
require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Honeypot — botlar bu alanı doldurur, gerçek kullanıcı görmez.
if (!empty($_POST['website'])) {
    echo json_encode(['success' => true]);
    exit;
}

$name    = trim($_POST['ad_soyad'] ?? '');
$company = trim($_POST['firma'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['konu'] ?? 'Ürün Bilgisi');
$message = trim($_POST['mesaj'] ?? '');

if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Eksik veya geçersiz alan']);
    exit;
}

$to = 'info@tmtevaletleri.com';
$mailSubject = '[TMT Web Form] ' . $subject;

$body  = "Ad Soyad: $name\n";
$body .= 'Firma: ' . ($company !== '' ? $company : '-') . "\n";
$body .= "E-posta: $email\n";
$body .= "Konu: $subject\n\n";
$body .= "Mesaj:\n$message\n";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->Port       = SMTP_PORT;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom(SMTP_USER, 'TMT Web Form');
    $mail->addAddress($to);
    $mail->addReplyTo($email, $name);

    $mail->Subject = $mailSubject;
    $mail->Body    = $body;

    $mail->send();
    echo json_encode(['success' => true]);
} catch (PHPMailerException $e) {
    http_response_code(500);
    error_log('TMT contact form mail error: ' . $mail->ErrorInfo);
    echo json_encode(['success' => false, 'message' => 'Mail gönderilemedi']);
}
