<?php $title = 'All Finished wants'; require_once(ROOT . "/views/layouts/header.php"); ?>

<a class="btn" href="http://127.0.0.1/adminmvc/wants/process">All Process wants</a>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/add">Add Want</a>
<table>
    <tr>
        <td>Название</td>
        <td>Автор</td>
        <td>Общее количество стр.</td>
        <td>Дата старта</td>
        <td>Дата конца</td>
    </tr>
    <?php foreach ($list as $item):?>
        <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/wants/' . $item['id_want']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['description']; ?></td>
            <td><?php echo $item['tasks']; ?></td>
            <td><?php echo $item['start_date']; ?></td>
            <td><?php echo $item['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
</table>