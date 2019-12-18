<!DOCTYPE html>
<html lang="en">
<?php

$msg = 'success';

?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Adriano Alves" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(''); ?>/assets/images/about.png">
        <title>Desafio P21 Sistemas</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- chartist CSS -->
        <link href="<?php echo base_url(''); ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="<?php echo base_url(''); ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <link href="<?php echo base_url(''); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!--This page css - Morris CSS -->
        <link href="<?php echo base_url(''); ?>assets/plugins/c3-master/c3.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(''); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
        <!-- You can change the theme colors from here -->
        <link href="<?php echo base_url(''); ?>/assets/css/colors/default.css" id="theme" rel="stylesheet">
        <link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-table/dist/bootstrap-table2.min.css" rel="stylesheet">

    </head>

    <body class="fix-header fix-sidebar card-no-border logo-center">
        <div id="main-wrapper">

            <header class="topbar">

                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <label style="color: white; align-content: flex-start; font-size: x-large; font-family: sans-serif; font-style:bold;  cursor: pointer;">P21 Sistemas </label>
                    </a>
                </nav>

            </header> 
            <div class="page-wrapper">
                <div class="container-fluid">
                    <body>
                        <div class="row">

                            <div class="col-lg-9 col-md-4">
                                <div class="row">
                                    <!-- Column --> <!-- Column --> <!-- Column -->
                                    <div class="col-12">
                                        <img  class="img-responsive"src="<?php echo base_url(''); ?>assets/images/bemvindo.png" width="800px" height="600px">  
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-3 col-md-5">
                                <div class="card-body">
                                    <h1 style="Text-Align:Center;"><b> Desafio</b>, proceso seletivo PHP P21 Sistemas!</h1>
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="card-title" style="Text-Align:Center;">Desenvolvido Por: Adriano Alves</h2>
                                            <h6 class="card-subtitle" style="Text-Align:Center;">adrianobr00@gmail.com</h6>
                             
                                        </div>
                                    </div>
                             <button data-toggle="modal" data-target="#Login" class="btn btn-outline-success waves-effect waves-light" style="width: 200px; height: 55px; text-align: center; font-size: 18px; margin: 10px">Entrar</button>

                                </div> 
                            </div>
                        </div>
                </div>
            </div>
     
                <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="col-md-12">
                                                <h3 class="modal-title" id="exampleModalLabel"><b>Cadastre-se</b><br></h2>
                                                    <form action="#" name="formusuario" id="formusuario">
                                                        <!-- Step 1 -->
                                                        <h6>Cadastre - se abaixo para acessar ao desafio :D <b>!!</b></h6>
                                                        <div class="row">
                                                       

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="Nome">Nome:</label>
                                                                    <input type="text" class="form-control" id="nome" name="nome" required> </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="Nome">Email:</label>
                                                                    <input type="email" class="form-control" id="email" name="email" required> </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="Nome">Senha:</label>
                                                                <input class="form-control" type="password" id="password" name="password" required>
                                                                <label for="Nome">Confirme a Senha:</label>
                                                                <input class="form-control" type="password"  id="confirm_password" required>
                                                            </div>
                                                        </div>
                                                        </div> 
                                                    </form>
                                                    <div class="modal-footer">
                                                        <div class="progress">
                                                            <div id="resolucao"class="" style="width: 100%; height:30px;" role="progressbar"> <span class="sr-only">100% Complete</span> </div>
                                                        </div>
                                                        <button onclick="validatePassword()"  class="btn btn-outline-danger waves-effect waves-light"  id="cadastrarusuario"><span class="btn-label"><i class="fa fa-heart"></i></span>Cadastrar</button>
                                                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Fechar</button>
                                                    </div> </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                          
        
        
        <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="col-md-12">
                                <div class="card-body wizard-content">

                                    <div class="card-body">
                                        <form  class="form-horizontal form-material" id="cadUsuario" method="post" >
                                            <h3  class="box-title m-b-20"  >Bem vindo.</h3>
                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control"  id="email" name="email" type="email" required=""  placeholder="E-mail"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control"  id="senha" name="senha" type="password"  required=""  placeholder="Senha"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="checkbox checkbox-primary pull-left p-t-0">
                                                        <input id="checkbox-signup" type="checkbox">
                                                        <label for="checkbox-signup"> Lembrar - me  </label>
                                                    </div>
                                                            <div class="col-sm-12 text-center">   <button id="salvar" class="btn btn-outline-success waves-effect waves-light" value="Salvar"  />Acessar</button></div>
                                            </div> 
                                            </div>
                                    </div> 
                               
                                    </form>
                                        
                                    <div class="form-group m-b-0">
                                        <div class="col-sm-12 text-center">  <p>Não tem uma conta? <button  data-toggle="modal" data-target="#cadastrar" data-dismiss="modal" class="btn btn-outline-primary waves-effect waves-light" style="width: 200px; height: 55px;  text-align: center; font-size: 18px; margin: 10px" ><b>Cadastrar</b></button></p>
                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- fim da modal ************************************** -->    

<script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script src="<?php echo base_url(''); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/plugins/c3-master/c3.min.js"></script>
<script src="<?php echo base_url(''); ?>assets/js/dashboard1.js"></script>
<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(''); ?>/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url() ?>assets/js/waves.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
<script src="<?php echo base_url(''); ?>/assets/js/toastr.js"></script>
<script src="<?php echo base_url(''); ?>/assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="<?php echo base_url() ?>/assets/plugins/wizard/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url(''); ?>assets/js/validador.js"></script>





<script src="<?php echo base_url(''); ?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
                    $(document).ready(function () {
                        // Quando usuário clicar em salvar será feito todos os passo abaixo
                        $('#salvar').click(function () {

                            var dados = $('#cadUsuario').serialize();

                            $.ajax({
                                type: 'POST',
                                dataType: 'json',
                                url: "<?php echo base_url(); ?>Login/verificarLogin?ajax=true",
                                async: true,
                                data: dados,
                                success: function (response) {
                                    if (response.success == true) {
                                                        
                                       swal('Logado com sucesso!');                                      
                                       window.location.href = "<?php echo base_url(); ?>";
                             

                                    } else {
                                       
                                        swal('E-mail ou senhas estão incorretos caso nao tenha cadastro clique no botão cadastrar!');    

                                    }



                                }
                            });

                            return false;
                        });
                    });
</script>
<script>
    var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");



    function validatePassword() {
        if (password.value != confirm_password.value) {
            
            swal('Senhas não coincidem!!');
        } else {

            document.getElementById('resolucao').className = 'progress-bar bg-danger wow animated progress-animated';
            var dados = $('#formusuario').serialize();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo base_url(); ?>Usuarios/cadastrarUsuario?ajax=true",
                async: true,
                data: dados,
                success: function (response) {

                    if (response.success == true) {
                        window.location.href = "<?php echo base_url(); ?>Usuarios/ativar";

                    } else if (response.erroremail == true) {
                         swal('Email já cadastrado por favor tente outro!');
                    }
                }

            }
            );
        }
    }
       $(document).ready(function () {
                    swal({
                        title: "Parabéns",
                        text: "Seu Cadastro foi realizado com sucesso, agora e só efetuar o login :D!",
                        type: "success",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "ok, Obrigado!",

                    });
                })

</script>

</body>

</html>