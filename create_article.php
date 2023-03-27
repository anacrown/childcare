<?php
include_once 'header.php';

if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO articles (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    $stmt->close();

    header("Location: parent_info.php");
    exit;
}
?>

<h1>Создать статью</h1>
<form action="create_article.php" method="post">
    <label>Заголовок:</label><br>
    <input type="text" name="title" required><br>
    <label>Содержание:</label><br>
    <textarea name="content" rows="10" required></textarea><br>
    <input type="submit" value="Создать">
</form>

<?php
include_once 'footer.php';
$conn->close();
?>
