<?php $title = 'All Deals'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/finished">All Finished Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/process">All Process Deals</a>
<a class="btn" href="http://127.0.0.1/adminmvc/deals/add">Add Deal</a>
<?php require_once("head_table.php");
    foreach ($list as $item):?>
        <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/deals/' . $item['id_deal']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['description']; ?></td>
            <td><?php echo $item['tasks']; ?></td>
            <td><?php echo $item['start_date']; ?></td>
            <td><?php echo $item['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>