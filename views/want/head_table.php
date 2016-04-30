<table>
    <tr>
        <td>Название</td>
        <td>Компания</td>
        <td>Цена</td>
        <td>Ссылка</td>
        <td>A</td>
        <td>X</td>
    </tr>
    <?php foreach ($list as $item):?>
    <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
    <tr class="<?php echo $style; ?>">
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/wants/' . $item['id_want']; ?>"><?php echo $item['title']; ?></a></td>
        <td><?php echo $item['company']; ?></td>
        <td><?php echo $item['price']; ?></td>
        <td><a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title']; ?>---></a></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/wants/edit/' . $item['id_want'] ?>">A</a></td>
        <td><a href="<?php echo 'http://127.0.0.1/adminmvc/wants/delete/' . $item['id_want'] ?>">X</a></td>
    </tr>
    <?php endforeach;?>
</table>