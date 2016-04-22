<?php $title = 'All Process Wants'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/finished">All Finished wants</a>
<a class="btn" href="http://127.0.0.1/adminmvc/wants/add">Add Want</a>
<?php require_once(ROOT . "/views/want/head_table.php");
    foreach ($list as $item):?>
        <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/wants/' . $item['id_want']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['company']; ?></td>
            <td><?php echo $item['price']; ?></td>
        </tr>
    <?php endforeach;?>
</table>