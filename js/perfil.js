
function editarCampos(){
     $(".non-editable").each(function () {
        $(this).attr("readonly", false);
        $(this).css("border", "1px solid black");
     });
}

function guardarCampos() {
    $(".btn btn-info").attr("visibility", "hidden");
    $(".non-editable").each(function () {
        $(this).attr("readonly", true);
        $(this).css("outline", "none");
        $(this).css("border", "0px");
    });
    location.reload();
}


// JQuery para esconder y mostrar los botones de editar/guardar

$(document).ready(function(){
    $("#btn-guardar").hide();
});

$(document).ready(function(){
    $("#btn-guardar").click(function(){
        $("#btn-guardar").hide();
        $("#btn-editar").show();
    });
});

$(document).ready(function(){
    $("#btn-editar").click(function(){
        $("#btn-editar").hide();
        $("#btn-guardar").show();
    });
});



