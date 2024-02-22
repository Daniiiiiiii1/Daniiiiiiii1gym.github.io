<?php require 'head.php'; ?>
<?php require 'feedback_style.php';?>

<?php
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $letter = $_POST['letter'];
    $comment = $_POST['comment'];

    $query = $db->query("INSERT INTO MySiteDB.feedback (username, letter, comment) VALUES ('$username', '$letter', '$comment')");

    if ($query == "true"){
        echo "Не удалось отправить, попробуйте снова!";
    } else {
        echo "Ваше сообщение отправлено!";
    }
}
?>
<body bgcolor="#c0c0c0">
<form class="decor" action="" method="POST">
    <div class="form-inner">
        <h3>Оставьте заявку</h3>

        <input type="text" name="username" placeholder="Имя" required>
        <input type="email" name="letter" placeholder="Email" required>
        <textarea name="comment" placeholder="Сообщение..." rows="3" required></textarea>
        <div align="center"><input type="submit" value="Отправить"></div>

    </div>
</form>
<footer>
        <p>&copy; 2023 Фитнес-центр "PROsport"</p>
    </footer>
</body>

