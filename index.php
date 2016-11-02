<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="" class="vacancy-form">
    <span class="vacancy-form__span">Откликнуться на вакансию</span>
    <input type="text" name="name" class="vacancy-form__name" placeholder="ФИО*" required>
    <input type="number" name="phone" class="vacancy-form__phone" placeholder="Телефон*" required>
    <input type="email" name="email" class="vacancy-form__email" placeholder="Email">
    <input type="text" name="city" class="vacancy-form__city" placeholder="Город">
    <label class="vacancy-form__file-label">
        <span class="vacancy-form__file-button">ПРИКРЕПИТЬ ФАЙЛ</span>
        <input type="file" name="file" class="vacancy-form__file">
        </label>
    <span class="vacancy-form__file-span">Загрузите файл в формате MS Word или PDF</span>
    <textarea class="vacancy-form__message" placeholder="Сопроводительное письмо" rows="4"></textarea>
    <label class="vacancy-form__agree-label">
        <input type="checkbox" class="vacancy-form__agree"> Я согласен на обработку <a href="" class="vacancy-form__agree-link">персональных данных</a>
        </label>
    <input type="submit" class="vacancy-form__submit" value="ОТПРАВИТЬ">
</form>
</body>
</html>