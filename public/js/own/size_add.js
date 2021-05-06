var index=0;
var codigos = [];

$('#btnSubmit').attr("disabled", true);
function addsize()
{
    sizedata=document.getElementById('size_id').value.split('_');
    for(c in codigos)
    {
        if(sizedata[0]==codigos[c])
        {
            alert("Talla ya Seleccionado");
            return false;
        }
    }
    codigos[index]=sizedata[0];
    fila='<tr id="fila'+index+'"><td class="text-center"><input type="hidden" name="idsizes[]" value="'+sizedata[0]+'">'+sizedata[0]+'</td><td class="text-center">'+sizedata[1]+'</td><td class="text-center"><input class="text-center" name="sizestocks[]"></td><td class="text-center"><a href="#" onclick="quitar('+index+')">Quitar</a></td></tr>';
    $('#size_detail').append(fila);
    index++;
    evaluar();
}

function quitar(item)
{
    $('#fila'+item).remove();
    index--;
    codigos[item]="";
}

function evaluar()
{
    if(index>0)
        $('#btnSubmit').attr("disabled", false);
    else
        $('#btnSubmit').attr("disabled", true);
}