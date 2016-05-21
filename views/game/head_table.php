<table>
    <tr>
        <td>Название</td>
        <td>Компания</td>
        <td>Пройдено</td>
        <td>Главы</td>
        <td>Дата старта</td>
        <td>Дата конца</td>
        <td>A</td>
        <td>X</td>
    </tr>
    <?php foreach ($list as $item): ?>

        <?php
        $p = round($item['finish'] / $item['total'] * 100);
        $item['finished'] ? $style = 'red' : $style = 'green';
        $item['finished'] ? $grad = '' : $grad = "background-image: linear-gradient(#FF6D6D $p%,  #72F48E $p%, #72F48E);";
        ?>

        <tr id="<?php echo $item['id_game']; ?>" class="<?php echo $style; ?>" style="<?php echo $grad ?>">
            <td id="title"><a
                    href="<?php echo 'http://127.0.0.1/adminmvc/games/' . $item['id_game']; ?>"><?php echo $item['title']; ?></a>
            </td>
            <td id="creator"><?php echo $item['creator']; ?></td>
            <td id="finish"><?php echo $item['finish']; ?></td>
            <td id="total"><?php echo $item['total']; ?></td>
            <td id="start_date"><?php echo $item['start_date']; ?></td>
            <td id="end_date"><?php echo $item['end_date']; ?></td>
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/edit/' . $item['id_game']; ?>">A</a></td>
            <td><a href="<?php echo 'http://127.0.0.1/adminmvc/games/delete/' . $item['id_game']; ?>">X</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    "use strict";

    function edit() {
        $("tr[class='green']").children("td").not("#edit, #delete").bind('dblclick', 'td', function () {
            $("td").unbind();
            let id = $(this).parent().attr('id');
            let id_note = $(this).attr('id');
            let text = $(this).text();
            $(this).empty();
            $(this).css('padding', '0px 0px');

            if ($(this).attr('id') === 'start_date' || $(this).attr('id') === 'end_date') {
                $(this).append("<input type='date' id='input' value='" + text + "' autofocus />");
            } else {
                $(this).append("<input type='text' id='input' value='" + text + "' autofocus />");
            }
            $("#input").bind('keyup', function (e) {
                if (e.keyCode == 13) {
                    var request = $.ajax({
                        url: "http://127.0.0.1/adminmvc/games/edit/" + id,
                        method: "POST",
                        data: {id_note: id_note, val: $(this).val(), edit: true},
                        dataType: 'html'
                    });
                    request.done(function (msg) {
                        location.reload();
                    });
                    request.fail(function (jqXHR, textStatus) {
                        console.log("Request failed: " + textStatus);
                    });
                }
            });
        });
    }
    edit();

</script>