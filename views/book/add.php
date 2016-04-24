<?php $title = 'Add Book'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
<form action="http://127.0.0.1/adminmvc/books/add/" method="post">
    <p>Название книги:</p>
    <input type="text" name="title" id="title" autofocus />
    <p>Имя автора:</p>
    <input type="text" name="writer" id="writer" />
    <p>Общее кол. страниц:</p>
    <input type="number" name="total_pages" id="total_pages" />
    <p>Количество прочитанных страниц:</p>
    <input type="number" name="reading_pages" id="reading_pages" />
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>
