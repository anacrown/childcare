<?php
include_once 'header.php';

$sql = "SELECT * FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);
$articles = $result->fetch_all(MYSQLI_ASSOC);

?>

<h1>Информация для родителей</h1>

<?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
    <a href="create_article.php">Добавить статью</a>
<?php endif; ?>

<?php
foreach ($articles as $article):
?>
    <div class="article">
        <h2><?php echo htmlspecialchars($article['title']); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
        <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <a href="edit_article.php?id=<?php echo $article['id']; ?>">Редактировать</a>
            <span>|</span>
            <a href="delete_article.php?id=<?php echo $article['id']; ?>">Удалить</a>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

<?php
include_once 'footer.php';
$conn->close();
?>
