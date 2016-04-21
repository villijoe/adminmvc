<?php $title = 'All Finished deals'; require_once(ROOT . "/views/layouts/header.php"); ?>

<a class="btn" href="http://127.0.0.1/adminmvc/deals/process">All Process deals</a>
<table>
    <tr>
        <td>Название</td>
        <td>Автор</td>
        <td>Общее количество стр.</td>
        <td>Дата старта</td>
        <td>Дата конца</td>
    </tr>
    <?php foreach ($dealsFinishedList as $dealsItem):?>
        <?php $dealsItem['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/deals/' . $dealsItem['id_deal']; ?>"><?php echo $dealsItem['title']; ?></a></td>
            <td><?php echo $dealsItem['description']; ?></td>
            <td><?php echo $dealsItem['tasks']; ?></td>
            <td><?php echo $dealsItem['start_date']; ?></td>
            <td><?php echo $dealsItem['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
</table>