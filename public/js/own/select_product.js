$(function(){
    $('#select-prod_id').on('change', productChange);
});

function productChange(){
    var producto_id = $(this).val();

    if(!producto_id)
    {
        return null;
    }

    $.get('/api/product/'+producto_id, function(data){
        $('#prod_id').val(data.prod_id);
        $('#prod_name').val(data.prod_name);
        $('#prod_sale_price').val(data.prod_sale_price);
        $('#prod_stock').val(data.prod_stock);
    });

}
