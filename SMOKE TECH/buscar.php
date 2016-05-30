<?php
    session_start();
    if($_SESSION['logado']<>"OK")
    {
        header('Location: canvas.html');
    }
?>
<html >

<head>
    <title>buscar</title>
    
    <link rel="stylesheet" type="text/css" href="buscar.css" />   
</head>

<body background="black2.gif">

<div id="bg"><img src="fire-5.jpg" width="200"> </div>
<div id="foto1"><img src="S.png" width="110"></div>
<div id="middlebg"><img src="middle bg.gif" width="1000"></div>
<div id="box" width="500"></div>    


<div id="whiteb"></div>
<div id="cl4"></div>    
        <div id="menu1">
            <ul>
                <li><a href="canvas.html">Inicio</a></li>
                <li><a href="ecigs page.html">E-cigs</a></li>
                <li><a href="atomizadores.html">Atomizadores</a></li>
                <li><a href="eliquidos.html">E-Liquidos</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </div>

  <div id="caixa"></div>   
    <div id="cad"> 
        <form action="filtro.php"method="post">

           <br><br><br>
                <label for="estado"><b>ESTADO POR SIGLA</b></label><br>
                <select name="estado" id="estado"><br>
                    <option value=""></option>
                    <option value="sp">sp</option>
                    <option value="rj">rj</option>
                    <option value="pr">pr</option>
                    <option value="mg">mg</option>
                    <option value="rs">rs</option>
                    <option value="am">am</option>
                    <option value="ac">ac</option>
                    <option value="al">al</option>
                    <option value="df">df</option>
                    <option value="ms">ms</option>
                    <option value="ro">ro</option>
                    <option value="rr">rr</option>
                    <option value="pr">sc</option>
                </select>
            <input type="hidden" name="pag" value="1">
            <input type="submit">
        </form>
    </div>
        <div id="cad2"> 
        <form action="filtrocidade.php"method="post">
           <br><br><br><b>CIDADE</b> <br>          
            <input type="text" name="cidade">
            <input type="hidden" name="pag" value="1">
            <input type="submit">
        </form>
    </div>
    </div>  
    <div id="cad3"> 
        <form action="filtronome.php">
           <br><br><br><b>NOME</b><br>          
            <input type="text" name="nome">
            <input type="hidden" name="pag" value="1">
            <input type="submit">
        </form>
    </div>             
    <div id="todos">
        <form action="todos.php">
        <input type="hidden" name="pag" value="1">   
        <input type="submit" name="todos" value="todos">
        </form>
    </div>  

    <div id="caixa"></div>   
 
            
        </form>
    </div>




</body>

</html>