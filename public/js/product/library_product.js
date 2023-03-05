var changeNumberProduct = function(){
    $(".btn-sub").click(function (e) { 
        id = $(this).data('id');
        var productNumber = parseInt($('.product--amount'+id).val());
        e.preventDefault();
        
        if (productNumber>1){
            productNumber -=1;
            $(`.product--amount${id}`).val(productNumber);
        }
    });
    $(".btn-add").click(function (e) { 
        e.preventDefault();
        id = $(this).data('id');
        var productNumber = parseInt($(`.product--amount${id}`).val());
        if (productNumber<1000){
            productNumber +=1;
            $(`.product--amount${id}`).val(productNumber);
        }
    });
};
$(document).ready(function () {
    changeNumberProduct();
});     