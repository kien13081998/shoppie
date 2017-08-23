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
$(".updateCart").click(function (e) {
    e.preventDefault();
    var obj = this;
    var rowId=$(this).attr('id');
    var qty = $(this).prev().val();
    var token=$("input[name='_token']").val();
    $.ajax({
        url:'/cart/'+rowId+'/'+qty,
        type:"put",
        data:{"_token":token,"id":rowId,"qty":qty},
        success:function(data){
          var price = parseInt($(obj).closest('.quaranty').next().find('strong').text());
          var row_total = qty*price;
          $(obj).closest('.parent').find('.total strong').text(row_total+'.$');
          var t = 0;
          $('.total').each(function(k,v){

            t+=parseInt($(v).find('strong').text());
          })
          $('#total_order').text(t+'.$');
        }
    });
});
});
