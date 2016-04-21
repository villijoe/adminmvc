<?php $title = 'All Deals'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/finished">All Finished Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/process">All Process Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/add">Add Deal</a>
    <table>
        <tr>
            <td>Название</td>
            <td>Описание</td>
            <td>Задачи</td>
            <td>Дата старта</td>
            <td>Дата конца</td>
        </tr>
    <?php foreach ($dealsList as $dealsItem):?>
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