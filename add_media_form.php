<form action="upload_media.php" method="post" enctype="multipart/form-data">
    <label for="type">Тип медиафайла:</label>
    <select name="type" id="type" required>
        <option value="photo">Фото</option>
        <option value="video">Видео</option>
    </select><br>

    <label for="title">Название:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="file">Выберите файл:</label>
    <input type="file" name="file" id="file" required><br>

    <input type="submit" value="Загрузить медиафайл">
</form>
