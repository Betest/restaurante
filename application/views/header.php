    <style>
        #navp {
            background: black;
            color: white;
        }
    </style>
    <header>
        <nav id="navp" class="navbar navbar-expand-lg ">
            <!--navbar-expand-lg navbar-blue bg-light-->
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/cwelcome">Palacios Restaurant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="border:1px solid black;">

                <ul class="navbar-nav">
                    <li class="nav-item active" id="lionea">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/cwelcome">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/restaurante5/index.php/cmenu">Menu</a>
                    </li>

                    <?php if ($this->session->userdata('txtident')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('categoria') ?>">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/clistarproducto">Productos</a>
                        </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/ccontactenos">Contacto</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item">
                        <!-- si hay sesion muestra salir, si no hay muestra conectar -->
                        <?php if ($this->session->userdata('txtident')) : ?>
                            <a class="nav-link" href="<?= site_url('clogin/logout') ?>">Salir</a>
                        <?php else : ?>
                         <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('login') ?>">Conectarse</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('register') ?>">Registrarse</a>
                        </li>
                        <?php endif ?>

                    </li>

                </ul>
            </div>
        </nav>
    </header>