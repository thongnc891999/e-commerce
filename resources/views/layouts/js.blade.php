{{-- /**
* define JS file GLOBAL
* START
*/ --}}

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
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
    
    if (button_up) {
        button_up.onclick=function() {setQuantity('up');}
    }
    if (button_down) {
        button_down.onclick=function() {setQuantity('down');}
    }
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

    $(document).ready(function() {
        $('.addCart').click(function() {
            // Url nhận request
            let url = '/api/carts/add-cart';

            //Id sản phẩm
            id = $(this).data('id');

            //Params truyền vào controller api
            const payload = {
                    product_id: id,
                }
            
            //Call api
            axios.post(url, payload)
            .then(data => {
                //Data trả về
                $('.cartQty').text(data.data.qtyCart);
            }).catch(error => {
                //Lỗi
                console.log(error);
            });
        });

        $('.calculate').click(function() {
            let value = $(this).text();

            qty = 1;
            if (value === '-') {
                qty = -1;
            } 

            //Call api
            axios.post('/api/carts/calculate-cart', {
                product_id: $(this).data('id'),
                qty: qty,
            })
            .then(data => {
                //Data trả về
                if (data.data == 0) {
                    location.reload();
                }
            }).catch(error => {
                //Lỗi
                console.log(error);
            });
        });
    });

    
</script>
@stack('js')