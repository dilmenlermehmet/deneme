<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Takip Sistemi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
            padding: 20px;
        }
        .container {
            text-align: center;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 5px;
        }
        h2 {
            font-size: 16px;
            color: #666;
            margin-top: 0;
        }
        input[type="text"], input[type="password"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #28a745;
            color: black;
            cursor: pointer;
        }
        button:hover {
            background-color: #ADD8E6;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        img.logo {
            width: 150px;
            margin-bottom: 20px;
        }
        .link {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
        .language-selector {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .language-button {
            display: flex;
            align-items: center;
            cursor: pointer;
            border: none;
            background: none;
            font-size: 16px;
            padding: 5px 10px;
        }
        .language-button img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        .language-button span {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <div class="language-selector">
            <button class="language-button" onclick="setLanguage('tr')">
                <img src="tr.png" alt="TR"> <span>TR</span>
            </button>
            <button class="language-button" onclick="setLanguage('en')">
                <img src="en.png" alt="EN"> <span>EN</span>
            </button>
        </div>
        <h2 id="app-lab-title">BURSA ULUDAĞ ÜNİVERSİTESİ<br>Bilim ve Teknoloji Uygulama ve Araştırma Merkezi</h2>
        <h1 id="app-title">Stok Takip Sistemi</h1>
        <p id="enter-credentials-text">Lütfen giriş bilgilerinizi giriniz:</p>
        <form action="login.php" method="post">
            <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" required>
            <input type="password" id="password" name="password" placeholder="Şifre" required>
            <div>
                <input type="checkbox" id="remember_me" name="remember_me">
                <label for="remember_me">Beni Hatırla</label>
            </div>
            <button type="submit">Giriş Yap</button>
        </form>
        <p id="error-message" class="error"></p>
    </div>

    <script>
        const translations = {
            tr: {
                "app-lab-title": "BURSA ULUDAĞ ÜNİVERSİTESİ<br>Bilim ve Teknoloji Uygulama ve Araştırma Merkezi",
                "app-title": "Stok Takip Sistemi",
                "enter-credentials-text": "Lütfen giriş bilgilerinizi giriniz:",
                "show-button": "Göster",
                "content-title": "İçerik",
                "project-name-label": "Proje Adı:",
                "project-date-label": "Proje Tarihi:",
                "material-content-label": "Malzeme/Kimyasal İçeriği:",
                "quantities-label": "Adetler:",
                "delivery-date-label": "Teslim Tarihi:",
                "analysis-status-label": "Analiz Durumu:",
                "planned-analysis-date-label": "Planlanan Analiz Tarihi:",
                "responsible-assistant-label": "Sorumlu Asistan:",
                "disposal-date-label": "İmha Tarihi:",
                "main-list-link": "Ana Listeye Erişim",
                "error-message": "Kullanıcı adı veya şifre hatalı, lütfen tekrar deneyin."
            },
            en: {
                "app-lab-title": "BURSA ULUDAĞ UNIVERSITY<br>Science and Technology Application and Research Center",
                "app-title": "Inventory Tracking System",
                "enter-credentials-text": "Please enter your credentials:",
                "show-button": "Show",
                "content-title": "Content",
                "project-name-label": "Project Name:",
                "project-date-label": "Project Date:",
                "material-content-label": "Material/Chemical Content:",
                "quantities-label": "Quantities:",
                "delivery-date-label": "Delivery Date:",
                "analysis-status-label": "Analysis Status:",
                "planned-analysis-date-label": "Planned Analysis Date:",
                "responsible-assistant-label": "Responsible Assistant:",
                "disposal-date-label": "Disposal Date:",
                "main-list-link": "Access Main List",
                "error-message": "Incorrect username or password, please try again."
            }
        };

        function setLanguage(language) {
            for (const key in translations[language]) {
                document.getElementById(key).innerHTML = translations[language][key];
            }
        }

        let currentLanguage = 'tr'; // Varsayılan dil Türkçe
        setLanguage(currentLanguage);
    </script>
</body>
</html>
