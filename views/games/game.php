<?php require_once(ROOT . "/views/layouts/header.php"); ?>
<table>
    <tr>
        <td><?php echo $gamesItem['title']; ?></td>
        <td><?php echo $gamesItem['company']; ?></td>
        <td><?php echo $gamesItem['total_chapters']; ?></td>
        <td><?php echo $gamesItem['finished_chapters']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/games/">Вернуться ко всем играм</a></td></tr>
</table>