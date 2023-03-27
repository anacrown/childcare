<?php
include_once 'header.php';

$stmt = $conn->prepare("SELECT * FROM media");
$stmt->execute();
$result = $stmt->get_result();

?>

<!-- Gallery Content -->
<div class="gallery-container">
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<div class='gallery-item'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        if ($row['type'] == 'photo') {
            echo "<img src='uploads/" . $row['file_name'] . "' alt='" . htmlspecialchars($row['title']) . "'>";
        } else {
            echo "<video controls src='uploads/" . $row['file_name'] . "'></video>";
        }
        if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
            echo "<a href='delete_media.php?id=" . $row['id'] . "'>Удалить</a>";
        }
        echo "</div>";
    }
    ?>
</div>

<?php
if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
    include_once 'add_media_form.php';
}
include_once 'footer.php';
?>
