$(document).ready(function(){
    $('.add_cart').click(function (){
        var id = $(this).attr('data-id');
        var csrf = $(this).find('input').attr('value');
        $.ajax({
            url: '/check/cookie',
            type: 'post',
            data: {id: id, _csrf: csrf},
            success: function (answer) {
                location.reload();
            }
        })
    })
    $('.quantit').change(function(){
        var id = $(this).attr('name');
        var url = $(this).attr('data-url');
        var quant = $(this).val();

        $.ajax({
            url: '/' + url,
            type: 'get',
            data: {id: id, quantity: quant},
            success: function (answer) {
                location.reload();
            }

        })
    })

    $('.assessments').click(function(){
        var assessment = $(this).attr('name');
        var url = $(this).attr('data-url');
        var id = $(this).attr('data-id');

        $.ajax({
            url: url,
            type: 'get',
            data: {assessment: assessment, id: id},
            success: function (answer) {
                location.reload();
            }
        })
    })

})