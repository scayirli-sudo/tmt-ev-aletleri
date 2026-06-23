<?php
header('Content-Type: application/json; charset=utf-8');

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
$mailSubject = '=?UTF-8?B?' . base64_encode('[TMT Web Form] ' . $subject) . '?=';

$body  = "Ad Soyad: $name\n";
$body .= 'Firma: ' . ($company !== '' ? $company : '-') . "\n";
$body .= "E-posta: $email\n";
$body .= "Konu: $subject\n\n";
$body .= "Mesaj:\n$message\n";

// "From" adresi sunucunun kendi alan adıyla eşleşmeli, aksi halde host mail()
// isteğini reddedebilir veya alıcıda spam'e düşebilir. Gerekirse aşağıdaki
// alan adını barındırdığınız domain ile değiştirin.
$headers   = [];
$headers[] = 'From: TMT Web Form <noreply@tmtevaletleri.com>';
$headers[] = 'Reply-To: ' . str_replace(["\r", "\n"], '', $email);
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = mail($to, $mailSubject, $body, implode("\r\n", $headers));

if ($sent) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Mail gönderilemedi']);
}
