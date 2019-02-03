
String.prototype.toPermalink = function(){
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};

$('.add-to-cart-btn').on('click', function(){


$.ajax({

    url: BASE_URL + 'shop/add-to-cart',
    type: 'GET',
    dataType: 'html',
    data: { pid: $(this).data('id') },
    success: function(res){

        window.location.reload();

    }

});


});

$('.field-input-cms').on('focusin focusout', function(){

    $(this).next().toggleClass('text-warning').toggleClass('text-muted');

});

$('.original-text').on('focusout', function(){

    $('.target-text').val($(this).val().toPermalink());


});



$('#search').on('keyup', function(){

    var search = $(this).val().trim();
    if( search.length > 0){
        $.ajax({
            url: BASE_URL + 'shop/autocomplete',
            type: 'GET',
            dataType: 'json',
            data: {search: search},
            success: function(res){                

                var availableTags = [];

                $.each(res, function (key, value) {
                    availableTags.push(value.ptitle);
                  });
      
                  $('#search').autocomplete({
                    source: availableTags,
                    select: function (event, ui) {
                      $('.submit').click();
                    }
                  });
      
                  


                // $output = '<select name="menu_search" id="menu-search" class="form-control" size="7" style="display:block;">';
                // res.forEach(row => {
                //     $output += '<option value="..."><a href="#">' + row.ptitle + '</a></option>';
                // });
                // $output += '</select>';

                // $('#list').html($output);
            }
        })
    }


});