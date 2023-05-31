/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ValidarNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function validaDatosR(){
    if($F('nombre')===''){
        alert('Ingrese Nombre');
	$('nombre').focus();
	return false;
    }
}