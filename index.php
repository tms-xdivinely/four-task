<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компания XSX | Главная</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'addons/header.php'; ?>
    <section class="hero">
        <div class="hero-content">
            <h1>Создаём будущее вместе</h1>
            <p>Мы предлагаем инновационные решения для вашего бизнеса.</p>
        </div>
    </section>
    <section class="services">
        <h2>Наши услуги</h2>
        <div class="service-card">
            <img src="assets/img/1.png" alt="Услуга 1">
            <h3>Веб-разработка</h3>
            <p>Создание современных и функциональных веб-сайтов.</p>
            <button class="btn">Заказать</button>
        </div>
        <div class="service-card">
            <img src="assets/img/2.png" alt="Услуга 2">
            <h3>Боты</h3>
            <p>Разработка уникальных ботов для вашего бизнеса.</p>
            <button class="btn">Заказать</button>
        </div>
        <div class="service-card">
            <img src="assets/img/3.png" alt="Услуга 3">
            <h3>Дизайн</h3>
            <p>Уникальный дизайн для вашего бренда.</p>
            <button class="btn">Заказать</button>
        </div>
    </section>
    <?php include('addons/footer.php');?>
</body>
</html>