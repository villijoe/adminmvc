<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/finished">All Finished Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/process">All Process Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/add">Add Deal</a>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['description']; ?></td>
        <td><?php echo $item['tasks']; ?></td>
        <td><?php echo $item['start_date']; ?></td>
        <td><?php echo $item['end_date']; ?></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/deals/edit/' . $item['id_deal']; ?>">A</a></td>
    </tr>
        <tr><td colspan="5"><a href="http://127.0.0.1/adminmvc/deals/">Вернуться ко всем делам</a></td></tr>
</table>