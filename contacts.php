<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компания XSX | Контакты</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php include 'addons/header.php'; ?>
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1>Свяжитесь с нами</h1>
            <p>Мы всегда рады помочь вам!</p>
        </div>
    </section>
    <section class="contact-info">
        <div class="contact-info-content">
            <h2>Наши контакты</h2>
            <div class="contact-details">
                <div class="contact-item">
                    <h3>Адрес</h3>
                    <p>г. Владимир, Октябрьский проспект 11</p>
                </div>
                <div class="contact-item">
                    <h3>Телефон</h3>
                    <p>+7 (666) 666-66-66</p>
                </div>
                <div class="contact-item">
                    <h3>Email</h3>
                    <p>info@is223.ru</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <h2>Обратная связь</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Отправить</button>
        </form>
    </section>
    <?php include('addons/footer.php');?>
</body>
</html>