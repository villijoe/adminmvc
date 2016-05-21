<?php $title = 'Add Game'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/games/finished">All Finished Games</a>
<a class="btn" href="http://127.0.0.1/adminmvc/games/process">All Process Games</a>
<form action="http://127.0.0.1/adminmvc/games/add/" method="post">
    <p>Название игры:</p>
    <input type="text" name="title" id="title" autofocus />
    <p>Имя компании:</p>
    <input type="text" name="creator" id="company" />
    <p>Общее кол. страниц:</p>
    <input type="number" name="total" id="total_chapters" />
    <p>Количество прочитанных страниц:</p>
    <input type="number" name="finish" id="finished_chapters" />
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>
