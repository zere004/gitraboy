<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вакансии</title>
     <link rel="stylesheet" href="cssvacant.css">
</head>
<body>
    <h1>Список вакансий</h1>
    <?php
    // Вывод сохраненных вакансий
    $vacancies = []; // Ваши сохраненные вакансии

    foreach ($vacancies as $vacancy) {
        echo '<div class="vacancy">';
        echo '<h2>' . $vacancy['title'] . '</h2>';
        echo '<p>Описание: ' . $vacancy['description'] . '</p>';
        echo '<p>Требования: ' . $vacancy['requirements'] . '</p>';
        echo '<p>Контактная информация: ' . $vacancy['contact'] . '</p>';
        echo '</div>';
    }
    ?>

    <!-- Форма добавления новой вакансии -->
    <h2>Добавить вакансию</h2>
    <form action="process_form.php" method="post">
        <label for="title">Название:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Описание:</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="requirements">Требования:</label>
        <textarea id="requirements" name="requirements" required></textarea>
        
        <label for="contact">Контактная информация:</label>
        <input type="text" id="contact" name="contact" required>
        
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
