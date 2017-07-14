$(document).ready(function(){
 $(document).on('click','.addshopcart',function(e){
   e.preventDefault();
   var pid = $(this).data('pid');
   var price = $(this).data('price');
   $.ajax({
     type: "get",
     url: '/cart-add',
     cache:false,
     data:{pid:pid,price:price,_token:$('input[name="_token"]').val()},
     success:function(result){
       var r = result;
       var start = parseFloat($('#show_item').text());
       var plus = parseFloat(price);
       var equa = start + plus;
       $('#show_item').text(equa);
       var i = 1;
       var qty = parseFloat($('#show_qty').text());
       var totalqty = qty + i;
       $('#show_qty').text(totalqty);
     }
   });
});
$(document).ready(function() {
    $(".updateCart").click(function (e) {
        e.preventDefault();
        var rowId=$(this).attr('id');
        var qty=$(this).parent().parent().find(".qty").val();
        var token=$("input[name='_token']").val();
        $.ajax({
            url:'/cart/'+rowId+'/'+qty,
            type:"put",
            data:{"_token":token,"id":rowId,"qty":qty},
            success:function (data) {
              if(data){
                window.location = "/show"
                }
            }
        });
    });
});
});
