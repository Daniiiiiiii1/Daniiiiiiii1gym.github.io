<style>
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
    text-align: center;
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
}

.trainer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.trainer {
    text-align: center;
    width: 250px; /* задаем фиксированную ширину для равномерности */
    margin: 10px; /* добавляем небольшое расстояние между тренерами */
}

.trainer img {
    max-width: 100%; /* максимальная ширина изображения 100% от родительского контейнера */
    height: auto; /* автоматическое масштабирование высоты для сохранения пропорций */
    display: block; /* убираем отступы по умолчанию */
    margin: 0 auto; /* выравниваем изображение по центру */
}
</style>
