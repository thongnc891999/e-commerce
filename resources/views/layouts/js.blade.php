{{-- /**
* define JS file GLOBAL
* START
*/ --}}

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/header_footer/menu_library.js') }}"></script>
<script src="{{ asset('js/product/library_swap_img.js') }}"></script>
<script src="{{ asset('js/product/library_slide.js') }}"></script>
<script src="{{ asset('js/product/library_product.js') }}"></script>
<script src="{{ asset('js/slideShow.js') }}"></script>

{{-- /**
* define JS file GLOBAL
* END
*/ --}}

<script>
    quantity = document.getElementById('quantity');
    
    button_up=document.getElementById('up');
    button_down=document.getElementById('down');
    
    button_up.onclick=function() {setQuantity('up');}
    button_down.onclick=function() {setQuantity('down');}
    
    function setQuantity(upordown) {
        var quantity = document.getElementById('quantity');
    
        if (quantity.value > 1) {
            if (upordown == 'up'){++quantity.value;}
            else if (upordown == 'down'){--quantity.value;}}
        else if (quantity.value == 1) {
            if (upordown == 'up'){++quantity.value;}}
        else
            {quantity.value= 1;}
    }
    </script>
@stack('js')