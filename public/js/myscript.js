$(document).ready(function(){
  // $(".shoppingcart").click(function(){
  //   var rowid = $(this).attr('id');
  //   var qty = $(this).parent().parent().find(".qty").val();
  //   var token = $("input['name='_token]").val();
  // });
  $(document).on('click','.addcart',function(e){
    e.preventDefault();
    var pid = $(this).data('pid');
    var price = $(this).data('price');
    $.post(
      '/cart/addcart',
      {pid:pid,price:price,_token:$('input[name="_token"]').val()},
      function(result){
        var r = result;
        var start = parseFloat($('#show_item').text());
        var plus = parseFloat(r.price);
        var equa = start + plus;
        $('#show_item').text(equa);
      }
    );
  })

  // $(document).on('click','.addcart',function(e){
  //   e.precentDefault();
  //   $ var uid = $(this).data('uid');
  //   $ var pid = $(this).data('pid');
  //   $.post(
  //     '/cart/addcart',
  //     {pid:pid,uid:uid,_token:$('input[name="_token"]').val()},
  //   )
  //
  // })
});
