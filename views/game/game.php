<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/games/finished">All Finished Games</a>
<a class="btn" href="http://127.0.0.1/adminmvc/games/process">All Process Games</a>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['company']; ?></td>
        <td><?php echo $item['total_chapters']; ?></td>
        <td><?php echo $item['finished_chapters']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/games/">Вернуться ко всем играм</a></td></tr>
</table>