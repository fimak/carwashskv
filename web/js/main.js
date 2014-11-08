// listen click, open modal and .load content
$('button#leave-feedback, .book-car-wash').click(function (){
    $('#modal').modal('show')
        .find('#modalContent').html(' ')
        .load($(this).attr('value'));
});

// serialize form, render response and close modal
$(document).on('beforeSubmit', '#feedback-create', function(e) {
    var form = $(this);
    $.post(
            form.attr("action"), // serialize Yii2 form
            form.serialize()
        )
        .done(function(result) {
            form.parent().html("Отзыв добавлен успешно!");
            //$('#site-feedback .container .dark-wrap .light-wrap').
            $('#modal').modal('hide');
            location.reload();
        })
        .fail(function() {
            console.log("server error");
            form.replaceWith('<button class="newType">Fail</button>').fadeOut()
        });
    return false;
}).on('submit', function(e){
    e.preventDefault();
});

$(document).on('beforeSubmit', '#schedule-create', function(e) {
    var form = $(this);
    $.post(
            form.attr("action"), // serialize Yii2 form
            form.serialize()
        )
        .done(function(result) {
            form.parent().html(result['message'] + '<br /><button class="btn btn-success" data-dismiss="modal">Закрыть</button>');
        })
        .fail(function() {
            console.log("server error");
            form.replaceWith('<button class="newType">Fail</button>').fadeOut()
        });
    return false;
}).on('submit', function(e){
    e.preventDefault();
});