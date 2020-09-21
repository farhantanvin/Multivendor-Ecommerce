$(document).ready(function () {
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var url = $('#orderStatusUrl').val();
    $(document).on('change','.order-status',function () {
        var currentSelect = $(this);
        var orderStatus = currentSelect.val();
        var orderDetailId = currentSelect.attr('orderDetailId');
        $.ajax({
            type:'post',
            url: url,
            data:{
                orderStatus:orderStatus,
                orderDetailId:orderDetailId,
                _token:csrf,
            },
            success:function (data) {
             if(data==1){

                   if(orderStatus == 1){
                       currentSelect.closest('tr').find('td.status').html('<span class="badge badge-danger">Cancel </span>');
                   }

                 if(orderStatus == 2){
                     currentSelect.closest('tr').find('td.status').html('<span class="badge badge-warning">On Hold </span>');
                 }

                 if(orderStatus == 3){
                     currentSelect.closest('tr').find('td.status').html('<span class="badge badge-primary">Pending </span>');
                 }

                 if(orderStatus == 4){
                     currentSelect.closest('tr').find('td.status').html('<span class="badge badge-info">Processing</span>');
                 }

                 if(orderStatus == 5){
                     currentSelect.closest('tr').find('td.status').html('<span class="badge badge-success">Complete </span>');
                 }

                   Swal.fire('Order Status Change', "", "success");
               }else{
                   Swal.fire('Order Status Not Change', "", "error");
               }
            }
        });
    });
});
