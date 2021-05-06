var index=0;
var codigos = [];

$('#btnSubmit').attr("disabled", true);
function addcolor()
{
    colordata=document.getElementById('color_id').value.split('_');
    for(c in codigos)
    {
        if(colordata[0]==codigos[c])
        {
            alert("Color ya Seleccionado");
            return false;
        }
    }
    codigos[index]=colordata[0];
    fila='<tr id="fila'+index+'"><td class="text-center"><input type="hidden" name="idcolors[]" value="'+colordata[0]+'">'+colordata[0]+'</td><td class="text-center">'+colordata[1]+'</td><td class="text-center">'+colordata[2]+'</td><td class="text-center"><input class="text-center" name="colorstocks[]"></td><td class="text-center"><a href="#" onclick="quitar('+index+')">Quitar</a></td></tr>';
    $('#color_detail').append(fila);
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