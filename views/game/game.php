<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/games/finished">All Finished Games</a>
<a class="btn" href="http://127.0.0.1/adminmvc/games/process">All Process Games</a>
<a class="btn" href="http://127.0.0.1/adminmvc/games/add">Add Games</a>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['creator']; ?></td>
        <td><?php echo $item['finish']; ?></td>
        <td><?php echo $item['total']; ?></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/edit/' . $item['id_game']; ?>">A</a></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/delete/' . $item['id_game']; ?>">X</a></td>
    </tr>
        <tr><td colspan="6"><a href="http://127.0.0.1/adminmvc/games/">Вернуться ко всем играм</a></td></tr>
</table>