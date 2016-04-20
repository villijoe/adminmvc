<?php require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc">Main</a>
<a class="btn" href="http://127.0.0.1/adminmvc/games/">All Games</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
    <table>
        <tr>
            <td>Название</td>
            <td>Автор</td>
            <td>Общее количество стр.</td>
            <td>Кол. прочитанных стр.</td>
            <td>Дата старта</td>
            <td>Дата конца</td>
        </tr>
    <?php foreach ($booksList as $booksItem):?>
        <?php $booksItem['reading'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $booksItem['id_book']; ?>"><?php echo $booksItem['title']; ?></a></td>
            <td><?php echo $booksItem['writer']; ?></td>
            <td><?php echo $booksItem['total_pages']; ?></td>
            <td><?php echo $booksItem['reading_pages']; ?></td>
            <td><?php echo $booksItem['start_date']; ?></td>
            <td><?php echo $booksItem['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>