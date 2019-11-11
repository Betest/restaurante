<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zona de Menú</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
        #display > img {
            width: 100px;
            height: 100px;
        }
    </style>
    
    <body>

</head>

<body>
<script>
        $(document).ready(function(){
            setTimeout(function(){
                $('.mensaje').text("");
            },2000);
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

.container-productos {
        -webkit-box-shadow: 0px 0px 46px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 46px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 46px 0px rgba(0,0,0,0.75);
        background: white;
        width: 90%;
        margin-top: 25px;
        border-radius: 25px;
        padding-bottom: 20px;
        margin-bottom: 20px;
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

<center>
        <?php 
            echo form_close();
        ?>
        <div class='container-productos'>
            <h1>LISTA DE PRODUCTOS</h1>
            <div style="display:flex; flex-wrap:wrap; width:800px; margin-top: 25px;">
                <form style='display: flex; width: 85%; float: left;' method="get">
                    <input type="text" id="buscar" name="buscar" class="form-control" placeholder='Buscar producto'>
                    <div class="input-group">
                        <input type="submit" class="btn btn-success" name="btnenviar"/>
                    </div>
                </form>
                <a href='/restaurante5/index.php/cagregarproducto' class="btn btn-success" style="margin-left: 7%; color: white; cursor: pointer;"><i class="fas fa-plus"></i></a>
            </div>
            <table border="2" style="margin-top:20px;background: #FFFFFF; width:70%;" class="table table-striped">
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Imagen</th>
                <th>#</th>
                <?php
                if (isset($productos)) {
                    foreach ($productos as $product) {
                        echo "<tr>";
                            echo "<td>" . trim($product->name) . "</td>";
                            echo "<td>" . trim($product->desc) . "</td>";
                            echo "<td>" . trim($product->identct) . "</td>";
                            echo "<td>" . trim($product->value) . "</td>";
                            echo "<td><img src='".trim(base_url().$product->ruta)."' style='width:100px'/> </td>";
                            echo "<td style='display=flex'><a href='/restaurante5/index.php/ceditarproducto?id=".trim($product->identpr)."' style='margin: auto; width: 100%; height: 100%; font-size: 25px; cursor: pointer; color: blue;'><i class='fas fa-pencil-alt'></i></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
        </center>
        <div id="footer">
        
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
