<?php
include_once 'header.php';

if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("UPDATE articles SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: parent_info.php");
    exit;
}

$article_id = $_GET['id'];
$sql = "SELECT * FROM articles WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $article_id);
$stmt->execute();
$result = $stmt->get_result();
$article = $result->fetch_assoc();
$stmt->close();

?>

<h1>Редактировать статью</h1>
<form action="edit_article.php" method="post">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
    <label>Заголовок:</label><br>
    <input type="text" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required><br>
    <label>Содержание:</label><br>
    <textarea name="content" rows="10" required><?php echo htmlspecialchars($article['content']); ?></textarea><br>
    <input type="submit" value="Сохранить изменения">
</form>

<?php
include_once 'footer.php';
$conn->close();
?>
