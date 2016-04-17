<html>
    <head>
        <title>Books</title>
        <link href="templates/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <table>
    <tr>
        <td><?php echo $newsItem['title']; ?></td>
        <td><?php echo $newsItem['writer']; ?></td>
        <td><?php echo $newsItem['total_pages']; ?></td>
        <td><?php echo $newsItem['reading_pages']; ?></td>
    </tr>
        <tr><td colspan="4"><a href="<?php echo '../news/'; ?>">Вернуться ко всем новостям</a></td></tr>
</table>
</body>
</html>