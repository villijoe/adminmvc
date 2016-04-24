<?php $title = 'Edit Book'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
<form action="http://127.0.0.1/adminmvc/wants/edit/<?php echo $item['id_want']; ?>" method="post">
    <p>Название желания:</p>
    <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>" autofocus />
    <input type="hidden" name="edit" value="true" />
    <p>Компания:</p>
    <input type="text" name="company" id="company" value="<?php echo $item['company']; ?>" />
    <p>Цена:</p>
    <input type="number" name="price" id="price" value="<?php echo $item['price']; ?>" />
    <p>Ссылка:</p>
    <input type="url" name="link" id="link" value="<?php echo $item['link']; ?>" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>