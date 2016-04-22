<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['company']; ?></td>
        <td><?php echo $item['total_chapters']; ?></td>
        <td><?php echo $item['finished_chapters']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/games/">Вернуться ко всем играм</a></td></tr>
</table>