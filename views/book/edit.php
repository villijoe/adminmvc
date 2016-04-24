<?php $title = 'Edit Book'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
<form action="http://127.0.0.1/adminmvc/books/edit/<?php echo $item['id_book']; ?>" method="post">
    <p>Название книги:</p>
    <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>" autofocus />
    <input type="hidden" name="edit" value="true" />
    <p>Имя автора:</p>
    <input type="text" name="writer" id="writer" value="<?php echo $item['writer']; ?>" />
    <p>Общее кол. страниц:</p>
    <input type="number" name="total_pages" id="total_pages" value="<?php echo $item['total_pages']; ?>" />
    <p>Количество прочитанных страниц:</p>
    <input type="number" name="reading_pages" id="reading_pages" value="<?php echo $item['reading_pages']; ?>" />
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" value="<?php echo $item['start_date']; ?>" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" value="<?php echo $item['end_date']; ?>" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>