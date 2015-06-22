(function($){

    //    Запрос на список деятельности
    $('select[name=direction]').change(function(){
        $.post( "http://modulerate/show/list", { 
            _token: $( 'input[name=_token]' ).val(), 
            direction: $(this).val() })
            .done(function( data ) {
            var box = '<select name="block" class="form-control">';
            box += '<option></option>';
            for (var i=0; i<data.length; i++){
                box += '<option value="'+data[i].type+'-'+data[i].unit+'">';
                box += data[i].type;
                box += '</option>';
            }
            box += '</select>';
            $('#option-box').html(box);
        });
    });

//    Вид лейбов
    $('span:contains("Заплановано")').each(function(){
        $(this).addClass('badge');
    });

    $('span:contains("Готово")').each(function(){
        $(this).addClass('label label-success');
    });


})(jQuery);

