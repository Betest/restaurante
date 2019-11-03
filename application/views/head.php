<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/css/main.css">
    <script>
        function mostrarcategoria() {
            document.getElementById('txtidentct').value=document.getElemetById('txtidentct').value;
        }
        function pasardatos(){
            document.getElementById('txtidentpract').value=document.getElementById('txtidentpr').value;  
            document.getElementById('txtnameact').value=document.getElementById('txtname').value;
            document.getElementById('txtdescriptionact').value=document.getElementById('txtdescription').value;
            document.getElementById('txtidentctact').value=document.getElementById('txtidentct').value;
            document.getElementById('txtvalueact').value=document.getElementById('txtvalue').value;
        }

        function confirmarEliminar(){
            if(confirm("¿Esta seguro de eliminar este Producto?")){
                pasarident();
                document.getElementById('frmeliminar').submit();
                document.getElementById('btnbuscar').value=document.getElementById('').value;
            }
            else{
                return false;
            }
        }
        function pasarident(){
            document.getElementById('txtidentpre').value=document.getElementById('txtidentpr').value;
        }
    </script>
</head>