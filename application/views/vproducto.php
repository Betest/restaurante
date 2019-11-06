<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zona de Categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        #display > img {
            width: 100px;
            height: 100px;
        }
    </style>
    <script>
        function mostrarcategoria() {
            document.getElementById('txtidentct').value=document.getElemetById('txtidentct').value;
        }

        function pasardatos(){
            document.getElementById('txtidentpract').value=document.getElementById('txtidentpr').value;  
            document.getElementById('txtnameact').value=document.getElementById('txtname').value;
            document.getElementById('txtdescact').value=document.getElementById('txtdesc').value;
            document.getElementById('txtidentctact').value=document.getElementById('txtidentct').value;
            document.getElementById('txtvalueact').value=document.getElementById('txtvalue').value;
        }

        function confirmarEliminar(){
            if(confirm("¿Esta seguro de eliminar esta Categoria?")){
                pasarident();
                document.getElementById('frmeliminar').submit();
                document.getElementById('btnbuscar').value=document.getElementById('').value;
            }
            else{
                return false;
            }
        }
        function pasarident(){
            document.getElementById('txtidentpr').value=document.getElementById('txtidentpr').value;
        }
    </script>
</head>

<body>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.mensaje').text("");
        }, 2000);
    });
</script>
<style>
    body{
    background-image: url('../img/fondo.jpg');
}
#footer{
    width: 100%;
    height: 280px;
    float: left;
    background-image: url('../img/fondoin.jpg')
}
#sectionfooter{
    width: 50%;
    margin-top: 40px;
    height: 240px;
    margin-left: 25%;
    float: left;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    background: #B9581C;
}
#datos{
    margin-top: 20px;
    width: 35%;
    float: left;
    margin-left: 10%;
    height: 200px;
    border: px solid black;
}
#display > img {
    width: 100px;
    height: 100px;
}
#divi1{
    width: 100%;
    height: 60px;
    float: left;
    border: px solid white;
}
#divi2{
    margin-top: 10px;
    width: 100%;
    height: 60px;
    float: left;
    border: px solid white;
}
#divi3{
    margin-top: 10px;
    width: 100%;
    height: 60px;
    float: left;
    border: px solid white;
}
#logodivi1{
    width: 18%;
    float: left;
    height: 100%;
    border: px solid red;
    background-image: url('../img/ubica.png');
    background-size: 100% 100%;
}
#txtdivi11{
    width: 70%;
    float: left;
    height: 50%;
    margin-left: 5%;
    margin-right: 7%;
    font-size: 18px;
    color: white;
    font-weight: bold;
    border: px solid blue;
}
#txtdivi12{
    width: 70%;
    float: left;
    height: 50%;
    margin-left: 5%;
    font-size: 18px;
    color: white;
    border: px solid blue;
}
#logodivi2{
    width: 18%;
    float: left;
    height: 100%;
    border: px solid red;
    background-image: url('../img/telefono.png');
    background-size: 100% 100%;
}
#txtdivi2{
    margin-top: 15px;
    width: 70%;
    float: left;
    height: 50%;
    margin-left: 5%;
    margin-right: 7%;
    font-size: 20px;
    color: white;
    font-weight: bold;
    border: px solid blue;
}
#logodivi3{
    width: 18%;
    float: left;
    height: 100%;
    border: px solid red;
    background-image: url('../img/sobre.png');
    background-size: 100% 100%;
}
#txtdivi3{
    margin-top: 15px;
    width: 70%;
    float: left;
    height: 50%;
    margin-left: 5%;
    margin-right: 7%;
    font-size: 20px;
    color: white;
    font-weight: bold;
    border: px solid blue;
}
#separador{
    margin-top:20px;
    width: 0.5%;
    height: 200px;
    float: left;
    margin-left: 4%;
    border: 1px solid white;
    background: white;
}
#horarioaper{
    margin-top: 20px;
    width: 35%;
    float: left;
    margin-left: 3%;
    height: 200px;
    border: px solid black;
}
#divih1{
    width: 100%;
    height: 100px;
    float: left;
    border: px solid white;
}
#haten{
    width: 60%;
    float: left;
    height: 30px;
    margin-left: 20%;
    border:px solid blue;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: white;
}
#rhaten{
    width: 70%;
    float: left;
    height: 50px;
    margin-left: 15%;
    border:px solid blue;
    text-align: center;
    font-size: 18px;
    color: white;
}
#divih2{
    width: 100%;
    height: 100px;
    float: left;
    border: px solid white;
}
#txtri{
    margin-top: 20px;
    width: 70%;
    float: left;
    height: 60px;
    margin-left: 15%;
    border:px solid blue;
    text-align: center;
    font-size: 15px;
    color: white;
}
#sepa{
    float: left;
    width: 80%;
    margin-left: 10%;
    height: 1px;
    border: 1px solid white;
}
#banner{
    width: 50%;
    margin-left: 25%;
    height: 300px;
    background-image: url('../img/banner.jpg');
    background-size: 100% 100%;
    margin-top:60px;
    border-radius: 10px;
}
@media screen and (min-width: 500px) and (max-width: 1280px) { 
    #footer{
        background-image: url('../img/fondoinres.jpg');
        background-size: 100% 100%;
    }
    #sectionfooter{
        width: 60%;
        margin-left: 20%;
    }
    #datos{
        width: 45%;
        margin-left:5% ;
    }
    #separador{
        margin-left: 1%;
    }
    #horarioaper{
        width: 40%;
    }
    #haten{
        width: 70%;
        margin-left: 15%;
    }
    #rhaten{
        width: 75%;
        margin-left: 12.5%;
    }
    #banner{
        height: 250px;
    }
    
}
</style>
<div id="banner">
            
            </div>
<center>
    <span style="color:red">
        <?php
        echo validation_errors();
        ?>
    </span>
    <div class="container p-4">
    <form id="form" method="POST" enctype="multipart/form-data" action="<?= base_url() ?>index.php/cproducto/agregarproducto">
        <div class="form-group">
                <h3>Codigo Producto</h3>
                
                        <input type="text" id="txtidentpr" name="txtidentpr" class="form-control" style="width:40%;"autocomplete="off" value=" <?php echo set_value('txtidentpr'); ?>">
                
        </div>
        <div class="form-group">
                <h3>Nombre Producto</h3>
                
                        <input type="text" id="txtname" name="txtname" class="form-control" style="width:40%;" value=" <?= (isset($detailproducto[0])) ? $detailproducto[0]->name : ""; ?>">
                
        </div>
        <div class="form-group">
                <h3>Descripción</h3>
                
                        <input type="text" id="txtdesc" name="txtdesc" class="form-control" style="width:40%;" value=" <?= (isset($detailproducto[0])) ? $detailproducto[0]->desc : ""; ?>">
                
        </div>

        <div class="form-group">
           <h3>Categoria</h3>
           
            <select id="txtidentct" name="txtidentct" style="width:40%;" class="form-control">
                <?php 
                foreach($categoria as $item):
                echo "<option>$item->identct</option>";
                endforeach;
                ?>
            </select>
            
        </div>
        <div class="form-group">
            <h3>Valor5745</h3>
            
                <input type="text" id="txtvalue" name="txtvalue" class="form-control" style="width:40%;" value="<?= (isset($detailproducto[0])) ? $detailproducto[0]->value : ""; ?>">
           
        </div>
        <div class="form-group">
            <h3>Imagen</h3>
            
                <input type="file" name="fileToUpload" id="fileToUpload"/>
            <br>
            <div id="display">
                <?= (isset($detailproducto[0])) ? "<img src='".base_url().$detailproducto[0]->ruta."'" : ""; ?>
            </div>
        </div>
        
        <div class="form-group" >
                <input type="submit" id="btnenviar" class="btn btn-success" name="btnenviar" style="margin-top:20px;width:15%;float:left;margin-left:20%;margin-right:5%;" value="Guardar">
                <input type="submit" id="btnactualizar" class="btn btn-info" name="btnactualizar" style="margin-top:20px;width:15%;float:left;margin-right:5%;" value="Actualizar">
                <input type="submit" id="btneliminar" class="btn btn-danger" name="btneliminar" style="margin-top:20px;width: 15%;float:left" value="Eliminar" onclick="confirmarEliminar()">
        </div>
     </form>

     <?php
            echo form_close();
         ?>
         </div>
     <span class="mensaje">
         <?php
            if(isset($mensaje)){
                print_r($mensaje);
            }
         ?>
     </span>
     <br>
     <br>
    <?php
    echo form_open('cproducto/listaproductosxident');
    ?>
    <form>
        <div class="form-group">
            <h3>Codigo Producto</h3>

            <input type="text" id="txtidentpr" name="txtidentpr" class="form-control" style="width:40%;" autocomplete="off" value="<?php echo set_value('txtidentpr'); ?>">

        </div>
        <div class="form-group" style="">
            <input type="submit" id="btnbuscar" class="btn btn-info" name="btnbuscar" style="margin-top:20px;width:15%;" value="Buscar">
        </div>
    </form>
    <?php
    echo form_close();
    ?>
    <h1>LISTA DE PRODUCTOS</h1>
    <table border="2" style="margin-top:20px;background: #FFFFFF; width:70%;" class="table table-striped">
        <th>Codigo de Producto</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Categoria</th>
        <th>Valor</th>
        <th>Imagen</th>
        <?php
        if ($detailproducto) {
            foreach ($detailproducto as $product) {
                echo "<tr>";
                echo "<td>" . $product->identpr . "</td>";
                echo "<td>" . $product->name . "</td>";
                echo "<td>" . $product->desc . "</td>";
                echo "<td>" . $product->identct . "</td>";
                echo "<td>" . $product->value . "</td>";
                echo "<td><img src='".base_url().$product->ruta."' style='width:100px'/> </td>";
                echo "<script>document.getElementById('txtidentprv').value='$product->identpr'</script>";
                echo "<script>document.getElementById('txtnamev').value='$product->name'</script>";
                echo "<script>document.getElementById('txtdescriptionv').value='$product->desc'</script>";
                echo "<script>document.getElementById('txtidentctv').value='$product->identct'</script>";
                echo "<script>document.getElementById('txtvaluev').value='$product->value'</script>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</center>
<script>
        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
 
                reader.onload = function (e) {
                    var filePreview = document.createElement('img');
                    filePreview.id = 'file-preview';
                    //e.target.result contents the base64 data from the image uploaded
                    filePreview.src = e.target.result;
                    console.log(e.target.result);
 
                    var previewZone = document.getElementById('display');
                    previewZone.appendChild(filePreview);
                }
 
                reader.readAsDataURL(input.files[0]);
            }
        }
 
        var fileUpload = document.getElementById('fileToUpload');
        fileUpload.onchange = function (e) {
            readFile(e.srcElement);
        }
</script>
<div id="footer">
        <div id="sectionfooter">
            <div id="datos">
                <div id="divi1">
                    <div id="logodivi1">

                    </div>
                    <div id="txtdivi11">
                            &nbsp &nbsp  Calle 10 con Carrera 33
                    </div>
                    <div id="txtdivi12">
                            &nbsp &nbsp  Medellin, Colombia.
                    </div>
                </div>
                <div id="divi2">
                    <div id="logodivi2">

                    </div>
                    <div id="txtdivi2">
                            &nbsp &nbsp  018000517740
                    </div>
                </div>
                <div id="divi3">
                    <div id="logodivi3">
                        
                    </div>
                    <div id="txtdivi3">
                            prestaurant@gmail.com
                    </div>
                </div>
            </div>
            <div id="separador">

            </div>
            <div id="horarioaper">
                <div id="divih1">
                    <div id="haten">
                        Horario de Atención
                    </div>
                    <div id="rhaten">
                        Todos los dias <br> 9am - 9pm
                    </div>
                </div>
                <div id="sepa">

                </div>
                <div id="divih2">
                    <div id="txtri">
                        Todos los derechos reservados.
                        <br>
                        Palacios Restaurant ® 2019.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>