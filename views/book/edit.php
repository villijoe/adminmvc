<?php $title = 'Edit Book'; require_once(ROOT . "/views/layouts/header.php"); ?>
<a class="btn" href="http://127.0.0.1/adminmvc/books/finished">All Finished Books</a>
<a class="btn" href="http://127.0.0.1/adminmvc/books/process">All Process Books</a>
<form action="http://127.0.0.1/adminmvc/books/edit/<?php echo $item['id_book']; ?>" method="post">
    <p>Название книги:</p>
    <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>" />
    <input type="hidden" name="edit" value="true" />
    <p>Имя автора:</p>
    <input type="text" name="creator" id="creator" value="<?php echo $item['creator']; ?>" />
    <p>Количество прочитанных страниц:</p>
    <input type="number" name="finish" id="finish" value="<?php echo $item['finish']; ?>" autofocus />
    <p>Общее кол. страниц:</p>
    <input type="number" name="total" id="total" value="<?php echo $item['total']; ?>" />
    <p>Start Date:</p>
    <input type="date" name="start_date" id="start_date" value="<?php echo $item['start_date']; ?>" />
    <p>End Date:</p>
    <input type="date" name="end_date" id="end_date" value="<?php echo $item['end_date']; ?>" />
    <p><input type="checkbox" name="finished" id="finished" /> Finished</p>
    <input type="submit" />
</form>
<script>
    let checkbox = document.getElementById("finished"),
        total = document.getElementById("total").value,
        finish = document.getElementById("finish"),
        finishValue = finish.value,
        end_date = document.getElementById("end_date");
    checkbox.addEventListener('click', function(){
        if (checkbox.checked) {
            finish.value = total;
            var date = new Date();
            var month = parseInt(1+date.getMonth()).toString();
            if (month.length === 1) { month = "0" + month; }
            var day = date.getDate().toString();
            if (day.length === 1) { day = "0" + day; }
            var now = date.getFullYear() + '-' + month + '-' + day;
            end_date.value = now;
        } else {
            finish.value = finishValue;
            end_date.value = '0000-00-00';
        }
    });
</script>