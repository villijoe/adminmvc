<html>
    <head>
        <title>Books</title>
        <link href="templates/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <table>
    <?php foreach ($newsList as $newsItem):?>
        <tr>
            <td><a href="<?php echo '../news/' . $newsItem['id_book']; ?>"><?php echo $newsItem['title']; ?></a></td>
            <td><?php echo $newsItem['writer']; ?></td>
            <td><?php echo $newsItem['total_pages']; ?></td>
            <td><?php echo $newsItem['reading_pages']; ?></td>
        </tr>
    <?php endforeach;?>
    </table>
    </body>
</html>