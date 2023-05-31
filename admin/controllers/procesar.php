<?php
session_start();

if (isset($_POST['enviaradmin'])){
    //print_r($_POST);
    $login = $_POST['login'];
    $clave = md5($_POST['clave']);
    
    include "../DAO/connect.php";            
    $query="select * from users  where login='$login' and clave='$clave' and flagusers='1'";
    //echo $query;
    $result= mysqli_query($enlace, $query);
    $fila= mysqli_fetch_array($result);
    
    if (!empty($fila)){
        $_SESSION['id_admin']=$fila['idusers'];
        $_SESSION['nivel_admin']=$fila['nivel'];
        $_SESSION['nom_admin']=$fila['nombres'].' '.$fila['appaterno'].' '.$fila['apmaterno'];
        include "../templates/home.tpl.php";
    }
    else{
        include "../templates/login_error_admin.tpl.php"; 
    }

}

if (isset($_POST['listaRegistros'])){
    //print_r($_POST);
    include "../DAO/connect.php";
    //echo $_POST['filtroestado'].'<br><br>';
    $datos=explode("|",$_POST['filtroestado']);
    $flpago=$datos['0'];
    $estado=$datos['1'];
    
    $query_tot="select count(*) as cantidad from asistentes a inner join paises p on (a.idpais=p.idpais) 
        inner join tipodocumento td on (a.idtipodocumento=td.idtipodocumento)  
    where a.indicador='1'";
    
    $result_tot=mysqli_query($enlace, $query_tot);
    $fila_tot=mysqli_fetch_array($result_tot);
    $rows=$fila_tot['cantidad'];
    $bloque=30;
    
    
    if (!isset($_POST['pagina'])){
        $inicio=0;
        $registros=$rows;
        $uso_sp=false;
    }
    else{
        if ($_POST['pagina']<=0){
            $inicio=0;
            $registros=$rows;
            $uso_sp=false;
        }
        elseif ($_POST['pagina']<=1){
            $uso_sp=true;
            $inicio=0;
            $registros=$bloque;            
        }
        else{
            $uso_sp=true;
            $inicio=($_POST['pagina']-1)*$bloque;
            $registros=$bloque;
        }
    }
    
    
    $query="select a.idasistente, a.idtipoasistente, a.idpais, a.apaterno, a.amaterno, a.nombres, 
        td.abrevtipodoc, a.nrodoc, a.codestudiante, a.genero, a.direccion, a.tfijo, a.tmovil, a.email, 
        a.fechareg, a.idregistro
        from asistentes a  inner join tipodocumento td on (a.idtipodocumento=td.idtipodocumento) 
        where a.indicador='1' 
    order by a.fechareg desc limit $inicio,$registros";
    
    //echo $query;
    
    $result= mysqli_query($enlace, $query);
    $paginas=ceil($rows/$bloque);
    include "../templates/listaregistros.tpl.php"; 

}

?>