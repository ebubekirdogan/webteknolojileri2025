<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Formu Sonuç</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .sonuc-kutu {
            background-color: rgba(255,255,255,0.07);
            padding: 30px;
            border-radius: 15px;
            width: 50%;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }
        h2 {
            color: #3fa9f5;
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
        span {
            color: #ccc;
        }
    </style>
</head>
<body>
    <div class="sonuc-kutu">
        <h2>İletişim Formu Bilgileri</h2>
        <p><strong>Ad:</strong> <span><?php echo htmlspecialchars($_POST['ad']); ?></span></p>
        <p><strong>Soyad:</strong> <span><?php echo htmlspecialchars($_POST['soyad']); ?></span></p>
        <p><strong>E-posta:</strong> <span><?php echo htmlspecialchars($_POST['email']); ?></span></p>
        <p><strong>Telefon:</strong> <span><?php echo htmlspecialchars($_POST['telefon']); ?></span></p>
        <p><strong>Konu:</strong> <span><?php echo htmlspecialchars($_POST['konu']); ?></span></p>
        <p><strong>Mesaj:</strong> <span><?php echo nl2br(htmlspecialchars($_POST['mesaj'])); ?></span></p>
    </div>
</body>
</html>
