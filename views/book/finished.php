<?php $title = 'All Finished Books'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
<?php require_once('head_table.php'); ?>
    <?php foreach ($list as $item):?>
        <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
        <tr class="<?php echo $style; ?>">
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $item['id_book']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['writer']; ?></td>
            <td><?php echo $item['total_pages']; ?></td>
            <td><?php echo $item['reading_pages']; ?></td>
            <td><?php echo $item['start_date']; ?></td>
            <td><?php echo $item['end_date']; ?></td>
        </tr>
    <?php endforeach;?>
</table>