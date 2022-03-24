$(function() {
    $('.like').on('click',function() {
        let id = $(this).attr('id').split('_')[1];
        $.ajax({
            url: '/api/like',
            type: "POST",
            data: {id : id},
            success: function (data) {
                $('#like_result_' + id).text(data.cnt_like);
            },
            error: function (msg) {
                alert('Ошибка');
            }
        });
    });
})
