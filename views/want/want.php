<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['company']; ?></td>
        <td><?php echo $item['price']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/wants/">Вернуться ко всем желаниям</a></td></tr>
</table>