<?php require_once(ROOT . "/templates/html/header.php"); ?>
    <table>
    <tr>
        <td><?php echo $newsItem['title']; ?></td>
        <td><?php echo $newsItem['writer']; ?></td>
        <td><?php echo $newsItem['total_pages']; ?></td>
        <td><?php echo $newsItem['reading_pages']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="http://127.0.0.1/adminmvc/books/">Вернуться ко всем книгам</a></td></tr>
</table>
</body>
</html>