function cerrarVentana(ide){
    Effect.Shrink(ide);    
}

function ValidarNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}


function verificauser(ide,tipouser){
    Effect.Grow(ide);
    var url = 'controllers/procesar.php';
    var pars = 'verificauser=ok&user='+$F('login')+'&clave='+$F('clave')+'&tipouser='+tipouser;

    var myAjax = new Ajax.Updater(ide, url, {
        method: 'post',
        parameters: pars
    });
}


function listaRegistros(ide,id,filtroestado){    
    Effect.Grow(ide);
    //alert(id);
    var url = '../controllers/procesar.php';
    var pars = 'listaRegistros=ok'+'&pagina='+id +'&filtroestado='+filtroestado;

    var myAjax = new Ajax.Updater(ide, url, {
        method: 'post',
        parameters: pars
    });
}






