<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/vloginestilo.css">
</head>
<style>
    body {
        background-image: url('../img/fondo.jpg');
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

    #banner {
        width: 70%;
        margin-left: 15%;
        height: 300px;
        background-image: url('../img/banner.jpg');
        background-size: 100% 100%;
        margin-top: 60px;
        border-radius: 10px;
    }

    @media screen and (min-width: 500px) and (max-width: 1280px) {
        #footer {
            background-image: url('../img/fondoinres.jpg');
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

        #banner {
            height: 250px;
        }

    }
    .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
</style>

<body>
    <div class="container pt-4">
        <div id="banner">

        </div>
        <div class="form_error">
            <?php echo validation_errors(); ?>
        </div>
        <form action="" method="POST">
            <legend style="text-align: center;">
                <h1>Iniciar Sesion</h1>

                <div class="form-group" style="width:40%;margin-left:30%;">

                    <input type="text" name="txtident" id="txtident" placeholder="Documento" class="form-control">
                </div>

                <div class="form-group">

                    <input type="password" style="width:40%;margin-left:30%;" name="txtpassword" id="txtpassword" placeholder="Contraseña" class="form-control">

                </div>

                <div class="form-group">

                    <div class="row">
                        <legend style="text-align: center;">
                            <input type="submit" class="btn btn-success" value="Ingresar">
                            <a href="recuperar.php" class="btn">¿Olvido su contraseña?</a>
                    </div>
                    <div class="row">
                        <legend style="text-align: center;">
                            <a href="<?= site_url('cregister') ?>" class="btn">Registrarse</a>
                    </div>


                </div>
        </form>


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