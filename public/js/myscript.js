$(document).ready(function(){
  // $(".shoppingcart").click(function(){
  //   var rowid = $(this).attr('id');
  //   var qty = $(this).parent().parent().find(".qty").val();
  //   var token = $("input['name='_token]").val();
  // });
  $(document).on('click','.addcart',function(e){
    e.preventDefault();
    var pid = $(this).data('pid');
    var uid = $(this).data('uid');
    var price = $(this).data('price');
    $.ajax({
     type: "post",
     url: '/cart/addcart',
     cache:false,
     data:{pid:pid,uid:uid,price:price,_token:$('input[name="_token"]').val()},
     success:function(result){
       var r = result;
       var start = parseFloat($('#show_item').text());
       var plus = parseFloat(r.total);
       var equa = start + plus;
       $('#show_item').text(equa);
       var i = 1;
       var qty = parseFloat($('#show_qty').text());
       var totalqty = qty + i;
       $('#show_qty').text(totalqty);
     }
   });
 });
});
