<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taro Milktea - Keynotes Eats</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #BD8B54;
    min-height: 100vh;
    width: 100%;
    padding: 0;
}

.header {
    width:100%;
    background-color: #583722;
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.back-button {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.logo {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #FFB84D;
    font-weight: bold;
    font-size: 16px;
}

.header-right {
    margin-left: auto;
    display: flex;
    align-items: center;
    justify-self:left;
    gap: 15px;
}

.language-selector {
    display: flex;
    gap: 0;
    background-color: rgba(255,255,255,0.1);
    border-radius: 8px;
    padding: 2px;
}

.lang-btn {
    background: none;
    border: none;
    color: white;
    padding: 8px 16px;
    cursor: pointer;
    font-size: 14px;
    border-radius: 6px;
    transition: background-color 0.3s;
}

.lang-btn.active {
    background-color: rgba(255,255,255,0.2);
    font-weight: bold;
}

.lang-btn:hover {
    background-color: rgba(255,255,255,0.15);
}

.about-btn {
    margin-left: auto;
    background-color: white;
    color: #8B6F47;
    border: none;
    padding: 8px 16px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: bold;
}

.container {
    
    margin: 0 auto;
    background-color: #BD8B54;
    min-height: calc(100vh - 60px);
    padding-bottom: 40px;
}

.image-container {
    display: flex;
    justify-content: center;
    padding: 30px 20px 20px;
}

.drink-image {
    width: 200px;
    height: 200px;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

.content {
    background-color: #775B48;
    margin: 20px 50px;
    padding: 45px 60px;
    border-radius: 20px;
    color: white;
}

.title {
    background-color: #5C3D2E;
    color: white;
    text-align: center;
    padding: 18px 40px;
    border-radius: 50px;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
    letter-spacing: 2px;
}

.description {
    text-align: center;
    line-height: 1.8;
    margin-bottom: 35px;
    font-size: 17px;
}

.section-title {
    font-weight: bold;
    margin-bottom: 18px;
    font-size: 19px;
}

.ingredients {
    margin-bottom: 30px;
}

.ingredients ol {
    margin-left: 25px;
    line-height: 2;
    font-size: 16px;
}

.ingredients li {
    margin-bottom: 8px;
}

.steps {
    line-height: 2;
    font-size: 16px;
}

.steps p {
    margin-bottom: 18px;
}

.step-number {
    font-weight: bold;
}
    </style>
    <link rel="stylesheet" href="">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
    <div class="header flex flex-row items-center justify-between mb-4">
        <button class="back-button">←</button>
        <div class="w-full">
            <img src="keynotes.png" alt="gambar keynotes" class="w-50 object-cover">
        </div>
        <div class="flex text-sm w-32 gap-4">
            <button class="text-white ">About us</button>
            <img src="image.png" alt="gambar profil" class="rounded-[50%] w-8 h-8   ">
        </div>
    </div>
     <div class="w-full h-1 border-solid border-4 border-[#183354]"></div>
</div>

    <div class="container">
        <div class="image-container">
            <img src="thai_tea.png" alt="THAI TEA" class="drink-image">
        </div>

        <div class="content">
            <div class="title">THAI TEA</div>

            <p class="description">
                Thai Tea adalah teh khas Thailand yang memiliki warna oranye pekat dan rasa manis creamy. Dibuat dari campuran teh hitam, susu kental, dan rempah khas seperti adas dan kapulaga. Aromanya kuat dan menyegarkan, sangat populer sebagai minuman es di berbagai café.
            </p>

            <div class="ingredients">
                <div class="section-title">Bahan-bahan:</div>
                <ol>
                    <li>1.) ½ gelas teh panas.</li>
                    <li>2.) 3 sdm bubuk creamer.</li>
                    <li>3.) 2 sdm gula pasir.</li>
                    <li>4.) 2 sdm susu kental manis putih.</li>
                    <li>5.) Es batu.</li>
                </ol>
            </div>

            <div class="steps">
                <div class="section-title">Cara membuat:</div>
                <p><span class="step-number">1.</span> Seduh teh panas, lalu aduk bubuk creamer dan gula pasir hingga tercampur.</p>
                
                <p><span class="step-number">2.</span> Tambahkan susu kental manis; aduk rata.</p>
                
                <p><span class="step-number">3.</span> Siapkan gelas dengan es batu, tuang campuran teh ke dalam gelas.</p>
                
                <p><span class="step-number">4.</span> Sajikan segera</p>

            </div>
        </div>
    </div>
</body>
</html>