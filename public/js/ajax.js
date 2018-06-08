$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'api/add');
            return false;
        }
    );
    $('#deleteBtn').click(
        function() {
            var checked = $('input[type=checkbox]:checked');
            var ids;
            for (var i; i < checked.length; i++) {
                if (i == checked.length-1) {
                    ids+=il.value+',';
                } else {
                    ids+=il.value;
                }
            }
            sendAjax(ids, 'api/remove');
        }
    )
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешнo
            // result = $.parseJSON(response);
            // $('#result_form').html('Character:'+result.character+'<br>Real_name'+result.real_name);
            $('#result_form').html(response);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

function sendAjax(data, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: {'ids': data},  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешнo
            $('#result_form').html(response);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}