<?php $title = 'All Books'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
    <table>
        <tr>
            <td>Название</td>
            <td>Автор</td>
            <td>Общее количество стр.</td>
            <td>Кол. прочитанных стр.</td>
            <td>Дата старта</td>
            <td>Дата конца</td>
        </tr>
    <?php foreach ($list as $item):?>
        <?php $item['reading'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $item['id_book']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['writer']; ?></td>
            <td><?php echo $item['total_pages']; ?></td>
            <td><?php echo $item['reading_pages']; ?></td>
            <td><?php echo $item['start_date']; ?></td>
            <td><?php echo $item['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>