<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/finished">All Finished Wants</a>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/process">All Process Wants</a>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/add">Add Want</a>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['company']; ?></td>
        <td><?php echo $item['price']; ?></td>
        <td><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?>---></a></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/wants/">Вернуться ко всем желаниям</a></td></tr>
</table>