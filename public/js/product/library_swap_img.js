$(document).ready(function () {
    $('.product-detail__left--item').click(function (e) { 
        e.preventDefault();
        $('.product-detail__left--item').each(function () { 
            $(this).removeClass('product-detail__left--active');
        });
       
        $('.product-detail__left--large').attr('src',$(this.children[0]).attr('src')); 
        $
        $(this).addClass('product-detail__left--active');
    });
});