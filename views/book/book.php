<?php $title = $item['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/add">Add Books</a>
<table>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['writer']; ?></td>
        <td><?php echo $item['reading_pages']; ?></td>
        <td><?php echo $item['total_pages']; ?></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/edit/' . $item['id_book']; ?>">A</a></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/books/delete/' . $item['id_book']; ?>">X</a></td>
    </tr>
    <tr><td colspan="6"><a href="http://127.0.0.1/adminmvc/books/">Вернуться ко всем книгам</a></td></tr>
</table>