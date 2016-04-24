<?php $title = 'Edit Game'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/games/finished">All Finished Games</a>
<a class="btn" href="http://127.0.0.1/adminmvc/games/process">All Process Games</a>
<form action="http://127.0.0.1/adminmvc/games/edit/<?php echo $item['id_game']; ?>" method="post">
    <p>Название книги:</p>
    <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>" autofocus />
    <input type="hidden" name="edit" value="true" />
    <p>Имя автора:</p>
    <input type="text" name="company" id="company" value="<?php echo $item['company']; ?>" />
    <p>Общее кол. страниц:</p>
    <input type="number" name="total_chapters" id="total_chapters" value="<?php echo $item['total_chapters']; ?>" />
    <p>Количество прочитанных страниц:</p>
    <input type="number" name="finished_chapters" id="finished_chapters" value="<?php echo $item['finished_chapters']; ?>" />
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" value="<?php echo $item['start_date']; ?>" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" value="<?php echo $item['end_date']; ?>" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>