<table>
    <tr>
        <td>Название</td>
        <td>Компания</td>
        <td>Пройдено</td>
        <td>Главы</td>
        <td>Дата старта</td>
        <td>Дата конца</td>
        <td>A</td>
        <td>X</td>
    </tr>
    <?php foreach ($list as $item):?>
        <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/' . $item['id_game']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['company']; ?></td>
            <td><?php echo $item['finished_chapters']; ?></td>
            <td><?php echo $item['total_chapters']; ?></td>
            <td><?php echo $item['start_date']; ?></td>
            <td><?php echo $item['end_date']; ?></td>
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/edit/' . $item['id_game']; ?>">A</a></td>
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/delete/' . $item['id_game']; ?>">X</a></td>
        </tr>
    <?php endforeach;?>
</table>