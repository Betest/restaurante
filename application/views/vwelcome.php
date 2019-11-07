<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/footer.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../img/filete.png">
    <title>Palacio Restaurant</title>
</head>
<style>
    body {
        margin: 0px;
        padding: 0px;
        text-decoration: none;
    }

    #contenedor {
        width: 100%;
        margin: 0px;
        padding: 0px;
        background-image: url('../img/fondo.jpg');
        background-size: 100% 100%;
        height: 1000px;
        float: left;
    }

    #banner {
        float: left;
        width: 60%;
        margin-left: 20%;
        height: 300px;
        background-image: url('../img/banner.jpg');
        background-size: 100% 100%;
        margin-top: 60px;
        border-radius: 10px;
    }

    #section {
        margin-top: 50px;
        float: left;
        width: 60%;
        margin-left: 20%;
        height: 650px;
        border: px solid black;
    }

    #dif {
        font-style: italic;
        font-family: fantasy;
        font-size: 20px;
    }

    #msg {
        margin-top: 10px;
        width: 90%;
        float: left;
        height: 120px;
        margin-left: 5%;
        font-size: 20px;
        border: px solid black;
        font-family: sans-serif;
    }

    #logseccion {
        margin-top: 10px;
        width: 90%;
        float: left;
        margin-left: 5%;
        height: 500px;
        border: px solid yellow;
    }

    #logseccion1 {
        margin-top: 20px;
        width: 25%;
        margin-left: 15%;
        height: 400px;
        float: left;
        border: px solid black;
    }

    #imglogo1 {
        width: 100%;
        float: left;
        height: 290px;
        background-image: url('../img/vermenu1.png');
        background-size: 100% 100%;
    }

    #btnlogo1 {
        margin-top: 10px;
        float: left;
        width: 100%;
        height: 100px;
        border: px solid red;
    }

    #logseccion2 {
        margin-top: 20px;
        width: 25%;
        margin-left: 15%;
        height: 400px;
        float: left;
        border: px solid black;
    }

    #imglogo2 {
        width: 100%;
        float: left;
        height: 290px;
        background-image: url('../img/empleado.png');
        background-size: 100% 100%;
    }

    #btnlogo2 {
        margin-top: 10px;
        float: left;
        width: 100%;
        height: 100px;
        border: px solid red;
    }

    #btn1 {
        width: 60%;
        margin-left: 20%;
        margin-top: 20px;
        height: 50px;
        background: #B9581C;
        color: white;
    }

    #btn2 {
        width: 80%;
        margin-left: 10%;
        margin-top: 20px;
        height: 50px;
        background: #B9581C;
        color: white;
    }

    #btn1:hover {
        background: #E86C20;

    }

    #btn2:hover {
        background: #E86C20;

    }

    /*AQUI EMPIEZA EL RESPONSIVE*/
    @media screen and (min-width: 500px) and (max-width: 1600px) {
        #contenedor {
            height: 1100px;
        }

        #banner {
            height: 250px;
        }

        #section {
            width: 65%;
            margin-left: 17.5%;
        }

        #msg {
            height: 130px;
        }

        #logseccion1 {
            width: 34%;
            margin-left: 10%;
        }

        #logseccion2 {
            width: 34%;
        }

        #btn2 {
            width: 90%;
            margin-left: 5%;
        }
    }

    #footer {
        width: 100%;
        height: 280px;
        float: left;
        background-image: url('../img/fondoin.jpg')
    }

    #sectionfooter {
        width: 50%;
        margin-top: 40px;
        height: 240px;
        margin-left: 25%;
        float: left;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background: #B9581C;
    }

    #datos {
        margin-top: 20px;
        width: 35%;
        float: left;
        margin-left: 10%;
        height: 200px;
        border: px solid black;
    }

    #divi1 {
        width: 100%;
        height: 60px;
        float: left;
        border: px solid white;
    }

    #divi2 {
        margin-top: 10px;
        width: 100%;
        height: 60px;
        float: left;
        border: px solid white;
    }

    #divi3 {
        margin-top: 10px;
        width: 100%;
        height: 60px;
        float: left;
        border: px solid white;
    }

    #logodivi1 {
        width: 18%;
        float: left;
        height: 100%;
        border: px solid red;
        background-image: url('../img/ubica.png');
        background-size: 100% 100%;
    }

    #txtdivi11 {
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

    #txtdivi12 {
        width: 70%;
        float: left;
        height: 50%;
        margin-left: 5%;
        font-size: 18px;
        color: white;
        border: px solid blue;
    }

    #logodivi2 {
        width: 18%;
        float: left;
        height: 100%;
        border: px solid red;
        background-image: url('../img/telefono.png');
        background-size: 100% 100%;
    }

    #txtdivi2 {
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

    #logodivi3 {
        width: 18%;
        float: left;
        height: 100%;
        border: px solid red;
        background-image: url('../img/sobre.png');
        background-size: 100% 100%;
    }

    #txtdivi3 {
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

    #separador {
        margin-top: 20px;
        width: 0.5%;
        height: 200px;
        float: left;
        margin-left: 4%;
        border: 1px solid white;
        background: white;
    }

    #horarioaper {
        margin-top: 20px;
        width: 35%;
        float: left;
        margin-left: 3%;
        height: 200px;
        border: px solid black;
    }

    #divih1 {
        width: 100%;
        height: 100px;
        float: left;
        border: px solid white;
    }

    #haten {
        width: 60%;
        float: left;
        height: 30px;
        margin-left: 20%;
        border: px solid blue;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: white;
    }

    #rhaten {
        width: 70%;
        float: left;
        height: 50px;
        margin-left: 15%;
        border: px solid blue;
        text-align: center;
        font-size: 18px;
        color: white;
    }

    #divih2 {
        width: 100%;
        height: 100px;
        float: left;
        border: px solid white;
    }

    #txtri {
        margin-top: 20px;
        width: 70%;
        float: left;
        height: 60px;
        margin-left: 15%;
        border: px solid blue;
        text-align: center;
        font-size: 15px;
        color: white;
    }

    #sepa {
        float: left;
        width: 80%;
        margin-left: 10%;
        height: 1px;
        border: 1px solid white;
    }

    @media screen and (min-width: 500px) and (max-width: 1280px) {
        #footer {
            background-image: url('img/fondoinres.jpg');
            background-size: 100% 100%;
        }

        #sectionfooter {
            width: 60%;
            margin-left: 20%;
        }

        #datos {
            width: 45%;
            margin-left: 5%;
        }

        #separador {
            margin-left: 1%;
        }

        #horarioaper {
            width: 40%;
        }

        #haten {
            width: 70%;
            margin-left: 15%;
        }

        #rhaten {
            width: 75%;
            margin-left: 12.5%;
        }
    }
</style>
<script>
</script>

<body>
    <div id="contenedor">
        <div id="menu">
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/cwelcome" style="text-decoration: none;color: white;">Inicio</a></li>
                <li><a href="<?php echo base_url(); ?>/" style="text-decoration: none;color: white;">Menu</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/ccontactenos" style="text-decoration: none;color: white;">Contactanos</a></li>
                <li><a class="active" href="<?php echo base_url(); ?>index.php/csomos" style="text-decoration: none;color: white;">Quienes somos</a></li>
                
                <?php if ($this->session->userdata('txtident')) : ?>
                    <li style="float:right" class="nav-item">
                        <a style="text-decoration: none;color: white;" href="<?= site_url('clogin/logout') ?>">Salir</a>
                    </li>
                    <?php else : ?>
                    <li style="float:right" class="nav-item">
                        <a style="text-decoration: none;color: white;" href="<?= site_url('cregister') ?>">Registrarse</a>
                    </li>
                    <li style="float:right" class="nav-item">
                        <a style="text-decoration: none;color: white;" href="<?= site_url('clogin') ?>">Conectarse</a>
                    </li>
                    
                <?php endif ?>


            </ul>

        </div>
        <div id="banner">

        </div>
        <div id="section">
            <div id="msg">
                <!-- Bienvenido a  &nbsp <b id="dif">Palacios Restaurant</b> , &nbsp Esperamos que el servicio sea de tu agrado. A continuacion podras seleccionar las opciones que desees llevar a cabo-->
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius deserunt distinctio veniam fugiat! Fugiat repellat maiores eligendi, tempora eveniet mollitia quaerat suscipit harum necessitatibus doloribus error reprehenderit, omnis, iure voluptatibus!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div id="logseccion">
                <div id="logseccion1">
                    <div id="imglogo1">

                    </div>
                    <div id="btnlogo1">
                        <button id="btn1" class="btn">Ver Platillos</button>
                    </div>
                </div>
                <div id="logseccion2">
                    <div id="imglogo2">

                    </div>
                    <div id="btnlogo2">
                        <button id="btn2" class="btn"><a href="<?php echo base_url(); ?>index.php/clogin" style="color:white;text-decoration:none;"> Iniciar como Empleado</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="footer">
        <div id="sectionfooter">
            <div id="datos">
                <div id="divi1">
                    <div id="logodivi1">

                    </div>
                    <div id="txtdivi11">
                        &nbsp &nbsp Calle 10 con Carrera 33
                    </div>
                    <div id="txtdivi12">
                        &nbsp &nbsp Medellin, Colombia.
                    </div>
                </div>
                <div id="divi2">
                    <div id="logodivi2">

                    </div>
                    <div id="txtdivi2">
                        &nbsp &nbsp 018000517740
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