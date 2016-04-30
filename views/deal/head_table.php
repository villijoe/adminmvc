<table>
    <tr>
        <td>Название</td>
        <td>Описание</td>
        <td>Задачи</td>
        <td>Дата старта</td>
        <td>Дата конца</td>
        <td>A</td>
        <td>X</td>
    </tr>
    <?php foreach ($list as $item):?>
    <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
    <tr class="<?php echo $style; ?>">
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/deals/' . $item['id_deal']; ?>"><?php echo $item['title']; ?></a></td>
        <td><?php echo $item['description']; ?></td>
        <td><?php echo $item['tasks']; ?></td>
        <td><?php echo $item['start_date']; ?></td>
        <td><?php echo $item['end_date']; ?></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/deals/edit/' . $item['id_deal']; ?>">A</a></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/deals/delete/' . $item['id_deal']; ?>">X</a></td>
    </tr>
    <?php endforeach; ?>
</table>