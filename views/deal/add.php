<?php $title = 'Add Deal'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/finished">All Finished Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/process">All Process Deals</a>
<form action="http://127.0.0.1/adminmvc/deals/add/" method="post">
    <p>Название задания:</p>
    <input type="text" name="title" id="title" autofocus />
    <p>Описание задания:</p>
    <input type="text" name="description" id="description" />
    <p>Пункты задания:</p>
    <textarea name="tasks" id="tasks"></textarea>
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>
