<?php
/**
 * Created by PhpStorm.
 * User: potato
 * Date: 30/09/2019
 * Time: 02:23 PM
 */
$CI =& get_instance();
?>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/ui/public/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/ui/public/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/ui/public/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/ui/public/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/ui/public/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/ui/public/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/ui/public/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/ui/public/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/ui/public/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/ui/public/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/ui/public/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/ui/public/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/ui/public/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/ui/public/images/icons/manifest.json">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>ui/public/css/style.css">
    <?php echo $this->section('css_p') ?>
    <title>GP CASAS</title>
</head>
<body>
<header>
    <div id="top_header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="d-block d-sm-none col-2 ">
                    <a id="movil_menu_open">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a id="movil_menu_close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

                <div class="col-6 col-md-2">
                    <a href="<?php echo base_url()?>">
                        <img src="<?php echo base_url()?>ui/public/images/logo.png" class="img-fluid">
                    </a>
                </div>
                <div class="d-none d-sm-block col-md-7 text-center">
                    <span id="top_titulo" >www.gpcasas.net</span>
                </div>
                <div class="col-4 col-md-3">
                    <?php
                    if ($CI->ion_auth->logged_in()) { ?>
                        <a class="top_boton" href="<?php echo base_url()?>User/perfil">Perfil <i class="fas fa-sign-in-alt"></i></a>
                    <?php }
                    else{ ?>
                        <a class="top_boton"  href="<?php echo base_url()?>User/login">Ingresar <i class="fas fa-sign-in-alt"></i></a>
                        <a class="top_boton">Registrarse <i class="fas fa-user-plus"></i></a>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</header>
<section id="menu_banner_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column" id="top_menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url()?>admin/subir_propiedad">Subir propiedad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Propiedades Pendientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lista de usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Canners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <section id="main_content">
                    <!-- Content Wrapper. Contains page content -->
                    <?php echo $this->section('page_content') ?>
                    <!-- /.content-wrapper -->
                </section>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-6 col-md-2">
                <img src="<?php echo base_url()?>ui/public/images/logo.png" class="img-fluid">
            </div>
            <div class=" col-md-2"></div>
            <div class="col-6 col-md-5">
                <ul>
                    <li><a>Quienes somos</a></li>
                    <li><a>Creditos Bancarios</a></li>
                    <li><a>Serguro para vivianda</a></li>
                    <li><a>Anunciate</a></li>
                    <li><a>Contactenos</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <ul>
                    <li><i class="fab fa-facebook-square"></i> gpcasas_net</li>
                    <li><i class="fab fa-instagram"></i> gpcasas_net</li>
                    <li><i class="fab fa-whatsapp"></i> 34045515</li>
                    <li><i class="fas fa-envelope"></i> info@gpcasas.net</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/90b8541e9b.js"></script>
<?php echo $this->section('js_p') ?>

<script>
    $("#movil_menu_open").click(function () {
        $("#top_menu").addClass('movil_menu_display');
        $("#movil_menu_close").addClass('movil_menu_close_display');
        $("#movil_menu_open").addClass('movil_menu_open_hide');
    });
    $("#movil_menu_close").click(function () {
        $("#top_menu").removeClass('movil_menu_display');
        $("#movil_menu_close").removeClass('movil_menu_close_display');
        $("#movil_menu_open").removeClass('movil_menu_open_hide');
    });
</script>
</body>
</html>
