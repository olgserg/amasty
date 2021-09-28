$(document).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'action.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        success: function(data) {
            if (data) {
                $('#result_form').html(data);
            } else {
                $('#result_form').prepend('Введите корректные данные').css('color', 'red');
            }
        },
        error: function(response) {
            $('#result_form').html('Ошибка отправки');
        }
    });
}
