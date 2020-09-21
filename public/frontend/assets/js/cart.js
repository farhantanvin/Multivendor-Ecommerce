$(document).ready(function () {

    $(document).on("click", ".product_varient", function () {
        var varientPrice = $(this).attr("vPrice"),
            varientId = $(this).attr("vId");
        $("#productPrice").text(varientPrice);
        $("#varientId").val(varientId);
    });

    var minCart = $('#mini-cart');
    var mainCart = $('#main-cart');
    // Add product to cart
    $("form.add-to-cart").submit(function (e) {
        e.preventDefault();
        var id = $(this).find('.id').val();
        var quantity = $(this).find('.quantity').val();
        var varient_id = $(this).find('.varient_id').val();
        var add_url = $(this).find('.add_url').val();
        var csrf = $(this).find("input[name='_token']").val();

        if (Boolean(varient_id)){
        $.ajax({
            type:'post',
            url: add_url,
            data:{
                id:id,
                quantity:quantity,
                varient_id:varient_id,
                _token:csrf,
            },
            success:function (data) {
                minCart.empty();
                minCart.append(data);
                $("#productAdd").text("Product added to cart").fadeIn("slow").delay(800).fadeOut("slow");
            }
        });
        }else{
            Swal.fire("Error", "You haven't select any Spec. Please Select.", "error");
        }

    });

    // Remove product from cart
    $(document).on('click','.removeCartItem',function () {
        var url = $(this).attr('removeUrl');
        var mainCartUrl = $(this).attr('mainCartUrl');
        $.ajax({
            type:'get',
            url: url,
            success:function (data) {
                minCart.empty();
                minCart.html(data);

                $.ajax({
                    type:'get',
                    url: mainCartUrl,
                    success:function (data) {
                        mainCart.empty();
                        mainCart.html(data);
                    }
                });
                $("#productRemove").text("Product remove from cart").fadeIn("slow").delay(800).fadeOut("slow");
            }
        });
    });

    // update main cart
    $(document).on('input','.mquantity',function () {
        var rowId = $(this).attr('rowId');
        var updateUrl = $(this).attr('updateUrl');
        var quantity = $(this).val();
        var miniCarturl = $(this).attr('miniCarturl');

        $.ajax({
            type:'get',
            url: updateUrl,
            data:{
                rowId:rowId,
                quantity:quantity,
            },
            success:function (data) {
                mainCart.empty();
                mainCart.html(data);

                $.ajax({
                    type:'get',
                    url: miniCarturl,
                    success:function (data) {
                        minCart.empty();
                        minCart.html(data);
                    }
                });
                $("#productAdd").text("Cart Updated").fadeIn(500).delay(800).fadeOut("slow");
            }
        });

    });

    // Remove product from main cart
    $(document).on('click','.removeMainCartItem',function () {
        var url = $(this).attr('removeUrl');
        var miniCarturl = $(this).attr('miniCarturl');
        $.ajax({
            type:'get',
            url: url,
            success:function (data) {
                mainCart.empty();
                mainCart.html(data);

                $.ajax({
                    type:'get',
                    url: miniCarturl,
                    success:function (data) {
                        minCart.empty();
                        minCart.html(data);
                    }
                });

                $("#productRemove").text("Product remove from cart").fadeIn(500).delay(800).fadeOut("slow");

            }
        });
    });

});
