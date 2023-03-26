<?php include 'header.php'; ?>

<main>
    <h2>Галерея</h2>
    <p>Здесь представлены фотографии и видео из нашего детского сада.</p>
    
    <div class="gallery">
        <!-- Фотографии -->
        <div class="photo">
            <h3>Фотографии</h3>
            <img src="path/to/photo1.jpg" alt="Описание фото 1">
            <img src="path/to/photo2.jpg" alt="Описание фото 2">
            <img src="path/to/photo3.jpg" alt="Описание фото 3">
            <!-- Добавьте больше фотографий по аналогии -->
        </div>
        
        <!-- Видео -->
        <div class="video">
            <h3>Видео</h3>
            <video class="gallery-video" controls>
                <source src="path/to/video1.mp4" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
            <video class="gallery-video" controls>
                <source src="path/to/video2.mp4" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
            <!-- Добавьте больше видео по аналогии -->
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
