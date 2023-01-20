
$(document).ready(function(){
  refreshTable();
});

function refreshTable(){
    $('.orderStatueParent').click(function(){
var orderStatus = $(this).find('.orderStatus').val();
var thisorderID = $(this).find('.orderStatus').attr('order-id');
if(orderStatus == "canceled"){
    $('.popApps').addClass('is-visible');
     $('.confirmStatus').val(orderStatus) ;
     $('.confirmOrderID').val(thisorderID);
//confirm cancele order
    $('.confirmCancle').click(function(){

        $.ajax({url: window.location.origin+"/goldenWay/admin/orders/change-order-status", type: "post", accept: "application/json",
   data: {"orderID": $('.confirmOrderID').val(),"status":$('.confirmStatus').val()}, success: function (result) {
        //popApps disapled
        $('.popApps').removeClass('is-visible');
      $('#'+$('.confirmOrderID').val()+'').remove();
           }});
    });
//

}else{
$.ajax({url: window.location.origin+"/goldenWay/admin/orders/change-order-status", type: "post", accept: "application/json",
   data: {"orderID": thisorderID,"status":orderStatus}

                , success: function (result) {
                    $('#'+thisorderID+'').remove();
                }});
            }
    });
}










