{{-- /**
* define JS file GLOBAL
* START
*/ --}}
{{-- <script src="js/app.js"></script>
<script src="js/bootstrap.js"></script>
<script src="../../Jquery/prettify.js"></script>
<script src="js/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/header_footer/menu_library.js') }}"></script>
<script src="{{ asset('js/product/library_swap_img.js') }}"></script>
<script src="{{ asset('js/product/library_slide.js') }}"></script>
<script src="{{ asset('js/product/library_product.js') }}"></script>
<script src="{{ asset('js/slideShow.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

{{-- /**
* define JS file GLOBAL
* END
*/ --}}

<script>
    // quantity = document.getElementById('quantity');
    
    // button_up=document.getElementById('up');
    // button_down=document.getElementById('down');
    
    // if (button_up) {
    //     button_up.onclick=function() {setQuantity('up');}
    // }
    // if (button_down) {
    //     button_down.onclick=function() {setQuantity('down');}
    // }
    // function setQuantity(upordown) {
    //     var quantity = document.getElementById('quantity');
    
    //     if (quantity.value > 1) {
    //         if (upordown == 'up'){++quantity.value;}
    //         else if (upordown == 'down'){--quantity.value;}}
    //     else if (quantity.value == 1) {
    //         if (upordown == 'up'){++quantity.value;}}
    //     else
    //         {quantity.value= 1;}
    // }

    $(document).ready(function() {
        $('.addCart').click(function() {
            if(!"{{ auth()->check()}}"){
                window.location.href = '/login';
                return;
            }

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
            let currentTotal = $(`.totalPrice`).data('totalprice');
            qty = 1;
            if (value === '-') {
                qty = -1;
            } 

            
            //Call api
            axios.post('api/carts/calculate-cart', {
                product_id: $(this).data('id'),
                qty: qty,
                current_total: currentTotal,
            })
            .then(data => {
                //Data trả về
                response = data.data;
                $(`.productPrice${response.productId}`).text(response.productPrice);
                $(`.totalPrice`).data('totalprice',response.currentTotal); 
                $(`.totalPrice`).text(response.currentTotal);
                
                // console.log(currentTotal);
                if (response == 0) {
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