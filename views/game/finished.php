<?php $title = 'All Finished Games'; require_once(ROOT . "/views/layouts/header.php"); ?>

<a class="btn" href="http://127.0.0.1/adminmvc/games/process">All Process games</a>
<?php require_once('head_table.php'); ?>
    <?php foreach ($list as $item):?>
        <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/game/' . $item['id_game']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['company']; ?></td>
            <td><?php echo $item['total_chapters']; ?></td>
            <td><?php echo $item['finished_chapters']; ?></td>
            <td><?php echo $item['start_date']; ?></td>
            <td><?php echo $item['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
</table>