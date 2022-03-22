<!-- Bootstrap core JavaScript

================================================= -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/holder.js"></script>
<script>
    $(function() {
        $('.like').on('click',function() {
            let id = $(this).attr('id').split('_')[1];
            $.ajax({
                url: '/api/likes',
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
</script>
