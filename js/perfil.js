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


