/**
 * Created by Orion on 02.05.2016.
 */
$(document).ready(
$("td").bind('dblclick', 'td', function(){
    $("td").unbind();
    var id = $(this).parent().attr('id');
    var id_note = $(this).attr('id');
    var text = $(this).text();
    $(this).empty();
    $(this).css('padding', '0px 0px');
    $(this).append("<input type='text' id='edit' value='"+ text +"' autofocus />");
    $("#edit").bind('keyup', function(e){
        if(e.keyCode == 13){
            var request = $.ajax({
                url: "http://127.0.0.1/adminmvc/books/edit/" + id,
                method: "POST",
                data: { id_note : id_note,  val: $(this).val(), edit: true },
                dataType: 'html'
            });
            request.done(function(msg){
                var td = $("#edit").parent();
                td.empty();
                td.css('padding', '7px');
                td.text(msg);
            });
            request.fail(function(jqXHR, textStatus){
                console.log( "Request failed: " + textStatus );
            });
        }
    });
})
);