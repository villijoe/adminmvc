<?php $title = 'Add Want'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/finished">All Finished Wants</a>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/process">All Process Wants</a>
<form action="http://127.0.0.1/adminmvc/wants/add/" method="post">
    <p>Название желания:</p>
    <input type="text" name="title" id="title" autofocus />
    <p>Компания:</p>
    <input type="text" name="company" id="company" />
    <p>Цена:</p>
    <input type="number" name="price" id="price" />
    <p>Ссылка:</p>
    <input type="url" name="link" id="link" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>
