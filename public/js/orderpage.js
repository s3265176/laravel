 $(function(){
    $('.adjust-quantity .btn.btn-default').each(function(index,value){
        $(value).on('click',function(){
            var quantityIncrease = $(this).data('value');
            
            updateQuantity(quantityIncrease);
        })
    })

    $('.adjust-quantity .btn.btn-warning').on('click',function(){
        updateQuantity(0,'update');
    })

    $('.deliver_method span.btn').each(function(index,value){
        $(value).on('click',function(){
            $('.deliver_method span.btn').removeClass('btn-success')
            $(this).addClass('btn-success');

            $('input[name=deliver_method]').val($(this).data('value'));
        })
    })
})


 function updateQuantity(value, action='increase') {
    $displayTarget = $('.quantity-dispaly');
    $inputTarget = $('input[name=quantity]');

    var targetQuantity;

    if(action=='increase'){
        var currentQuantity = parseInt($inputTarget.val());

        targetQuantity = currentQuantity+parseInt(value);
        
        console.log($inputTarget.val());

    }else if(action=='update'){
        targetQuantity = parseInt(value);
    }

    $displayTarget.html(targetQuantity);
    $inputTarget.val(targetQuantity);
}