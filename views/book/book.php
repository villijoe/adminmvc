<?php $title = $booksItem['title']; require_once(ROOT . "/views/layouts/header.php"); ?>
<a href="../">Main</a>
<table>
    <tr>
        <td><?php echo $booksItem['title']; ?></td>
        <td><?php echo $booksItem['writer']; ?></td>
        <td><?php echo $booksItem['total_pages']; ?></td>
        <td><?php echo $booksItem['reading_pages']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/books/">Вернуться ко всем книгам</a></td></tr>
</table>