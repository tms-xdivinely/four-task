<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компания XSX | Авторизация</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include('addons/header.php'); ?>
<section class="login-hero">
        <div class="login-container">
            <h1>Вход в систему</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username">Имя пользователя:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Войти</button>
            </form>
            <p class="register-link">Ещё нет аккаунта? <a href="register.html">Зарегистрируйтесь</a></p>
        </div>
    </section>
    <?php include('addons/footer.php'); ?>
</body>
</html>