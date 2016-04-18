<?php require_once(ROOT . "/templates/html/header.php"); ?>
    <table>
        <tr>
            <td>Название</td>
            <td>Автор</td>
            <td>Общее количество стр.</td>
            <td>Кол. прочитанных стр.</td>
            <td>Дата старта</td>
            <td>Дата конца</td>
        </tr>
    <?php foreach ($newsList as $newsItem):?>
        <?php $newsItem['reading'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $newsItem['id_book']; ?>"><?php echo $newsItem['title']; ?></a></td>
            <td><?php echo $newsItem['writer']; ?></td>
            <td><?php echo $newsItem['total_pages']; ?></td>
            <td><?php echo $newsItem['reading_pages']; ?></td>
            <td><?php echo $newsItem['start_date']; ?></td>
            <td><?php echo $newsItem['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>
    </body>
</html>