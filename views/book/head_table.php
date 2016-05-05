<table>
    <tr>
        <td id="head">Название</td>
        <td id="head">Автор</td>
        <td id="head">Прочитано</td>
        <td id="head">Общее</td>
        <td id="head">Дата старта</td>
        <td id="head">Дата конца</td>
        <td id="head">A</td>
        <td id="head">X</td>
    </tr>
    <?php foreach ($list as $item):?>
        <?php $p = round($item['finish']/$item['total']*100); ?>
    <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
    <tr id="<?php echo $item['id_book']; ?>" class="<?php echo $style; ?>"
        style="background-size: 100%;
            /*background-image: linear-gradient(to right, #FF6D6D, #FF6D6D <?php echo $p; ?>%,  #72F48E <?php echo $p; ?>%, #72F48E);*/
            background-image: linear-gradient(#FF6D6D, #FF6D6D <?php echo $p; ?>%,  #72F48E <?php echo $p; ?>%, #72F48E);
            ">
        <td id="title"><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $item['id_book']; ?>"><?php echo $item['title']; ?></a></td>
        <td id="creator"><?php echo $item['creator']; ?></td>
        <td id="finish"><?php echo $item['finish']; ?></td>
        <td id="total"><?php echo $item['total']; ?></td>
        <td id="start_date"><?php echo $item['start_date']; ?></td>
        <td id="end_date"><?php echo $item['end_date']; ?></td>
        <td id="edit"><a href="<?php echo 'http://127.0.0.1/adminmvc/books/edit/' . $item['id_book']; ?>">A</a></td>
        <td id="delete"><a href="<?php echo 'http://127.0.0.1/adminmvc/books/delete/' . $item['id_book']; ?>">X</a></td>
    </tr>
    <?php endforeach;?>
</table>

<?php foreach ($list as $item):?>
    <?php $p = round($item['finish']/$item['total']*100); ?>
    <?php $item['finished'] ? $style = 'red' : $style = 'green'; ?>
    <div id="<?php echo $item['id_book']; ?>" class="<?php echo $style; ?> table"
    style="background-image: linear-gradient(to right, #FF6D6D, #FF6D6D <?php echo $p; ?>%,  #72F48E <?php echo $p; ?>%, #72F48E);">
        <div id="title" class="field"><a href="<?php echo 'http://127.0.0.1/adminmvc/books/' . $item['id_book']; ?>"><?php echo $item['title']; ?></a></div>
        <div id="creator" class="field"><?php echo $item['creator']; ?></div>
        <div id="finish" class="field"><?php echo $item['finish']; ?></div>
        <div id="total" class="field"><?php echo $item['total']; ?></div>
        <div id="start_date" class="field"><?php echo $item['start_date']; ?></div>
        <div id="end_date" class="field"><?php echo $item['end_date']; ?></div>
        <div id="edit" class="field"><a href="<?php echo 'http://127.0.0.1/adminmvc/books/edit/' . $item['id_book']; ?>">A</a></div>
        <div id="delete" class="field"><a href="<?php echo 'http://127.0.0.1/adminmvc/books/delete/' . $item['id_book']; ?>">X</a></div>
    </div>
<?php endforeach;?>


<script>
    "use strict";
    console.log($("tr[class='green']").children("td").not("#edit, #delete"));
    function edit() {
        $("tr[class='green']").children("td").not("#edit, #delete").bind( 'dblclick', 'td', function () {
            $("td").unbind();
            let id = $(this).parent().attr('id');
            let id_note = $(this).attr('id');
            let text = $(this).text();
            $(this).empty();
            $(this).css('padding', '0px 0px');
            console.log($(this).attr('id'));
            if ( $(this).attr('id') === 'start_date' || $(this).attr('id') === 'end_date'){
                $(this).append("<input type='date' id='input' value='" + text + "' autofocus />");
            } else {
                $(this).append("<input type='text' id='input' value='" + text + "' autofocus />");
            }
            $("#input").bind('keyup', function (e) {
                if (e.keyCode == 13) {
                    var request = $.ajax({
                        url: "http://127.0.0.1/adminmvc/books/edit/" + id,
                        method: "POST",
                        data: {id_note: id_note, val: $(this).val(), edit: true},
                        dataType: 'html'
                    });
                    request.done(function (msg) {
                        let td = $("#input").parent();
                        td.empty();
                        td.css('padding', '7px');
                        td.text(msg);
                        edit();
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