<?php require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc">Main</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/">All Books</a>
    <table>
        <tr>
            <td>Название</td>
            <td>Компания</td>
            <td>Общее количество глав</td>
            <td>Кол. пройденных глав</td>
            <td>Дата старта</td>
            <td>Дата конца</td>
        </tr>
    <?php foreach ($gamesList as $gamesItem):?>
        <?php $gamesItem['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/' . $gamesItem['id_game']; ?>"><?php echo $gamesItem['title']; ?></a></td>
            <td><?php echo $gamesItem['company']; ?></td>
            <td><?php echo $gamesItem['total_chapters']; ?></td>
            <td><?php echo $gamesItem['finished_chapters']; ?></td>
            <td><?php echo $gamesItem['start_date']; ?></td>
            <td><?php echo $gamesItem['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>