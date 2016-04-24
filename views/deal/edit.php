<?php $title = 'Edit Deal'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/finished">All Finished Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/process">All Process Deals</a>
<form action="http://127.0.0.1/adminmvc/deals/edit/<?php echo $item['id_deal']; ?>" method="post">
    <p>Название задания:</p>
    <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>" autofocus />
    <input type="hidden" name="edit" value="true" />
    <p>Описание задания:</p>
    <input type="text" name="description" id="description" value="<?php echo $item['description']; ?>" />
    <p>Пункты задания:</p>
    <textarea name="tasks" id="tasks"><?php echo $item['tasks']; ?></textarea>
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" value="<?php echo $item['start_date']; ?>" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" value="<?php echo $item['end_date']; ?>" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>