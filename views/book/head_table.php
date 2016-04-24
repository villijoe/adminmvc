<table>
    <tr>
        <td>Название</td>
        <td>Автор</td>
        <td>Прочитано</td>
        <td>Общее</td>
        <td>Дата старта</td>
        <td>Дата конца</td>
        <td>A</td>
    </tr>
    <?php foreach ($list as $item):?>
    <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
    <tr class="<?php echo $style; ?>">
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $item['id_book']; ?>"><?php echo $item['title']; ?></a></td>
        <td><?php echo $item['writer']; ?></td>
        <td><?php echo $item['reading_pages']; ?></td>
        <td><?php echo $item['total_pages']; ?></td>
        <td><?php echo $item['start_date']; ?></td>
        <td><?php echo $item['end_date']; ?></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/edit/' . $item['id_book']; ?>">A</a></td>
    </tr>
    <?php endforeach;?>
</table>