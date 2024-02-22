<style>
.decor {
    margin: 20px auto;
    max-width: 400px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.form-inner {
    text-align: center;
}

.form-inner h3 {
    margin-bottom: 20px;
    font-size: 1.5em;
}

.form-inner input[type="text"],
.form-inner input[type="email"],
.form-inner textarea {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 1em;
}

.form-inner textarea {
    resize: vertical; /* Позволяет изменять размеры только по вертикали */
}

.form-inner input[type="submit"] {
    background-color: #f00;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

/* Определяем стили для ссылок внутри формы */
.form-inner a {
    color: #333; /* Цвет ссылок */
    text-decoration: underline; /* Подчеркиваем ссылки */
}

/* Определяем стили для ссылок при наведении курсора */
.form-inner a:hover {
    color: #f00; /* Цвет ссылок при наведении */
}

/* Переопределение стилей для выравнивания элементов по центру */
.form-inner textarea {
    width: calc(100% - 22px); /* Учитываем padding */
}

.form-inner div {
    text-align: center;
}



* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.red-text {
    color: red; 
}


nav {
    justify-content: flex-end;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-right: 10px;
}

nav ul li a {
    color: red;
    font-size: 1.2em;
    font-weight: bold;
    text-decoration: none;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

section {
    margin-bottom: 30px;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
    text-align: center;
}

.text p {
    text-align: center; /* добавлено */
}

ul {
    list-style: none;
}

button {
    background-color: #f00;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

footer {
    background-color: #ccc;
    padding: 10px;
    text-align: center;
}

img {
    box-shadow: 0px 0px 10px rgba(10, 10, 10, 0.1);
</style>