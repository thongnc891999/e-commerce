var changeNumberProduct = function(){
    var productNumber = parseInt($('.product--amount').val());
    $(".btn-sub").click(function (e) { 
        e.preventDefault();
        if (productNumber>1){
            productNumber -=1;
            $('.product--amount').val(productNumber);
        }
    });
    $(".btn-add").click(function (e) { 
        e.preventDefault();
        if (productNumber<1000){
            productNumber +=1;
            $('.product--amount').val(productNumber);
        }
    });
};
$(document).ready(function () {
    changeNumberProduct();
});     