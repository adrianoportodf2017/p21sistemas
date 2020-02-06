<?php $dados = $this->dados['usuario']; ?>

<!--/*busca dados do usuario*/-->
<body class="fix-header card-no-border logo-center">

    <div id="main-wrapper">

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Perfil</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                            <li class="breadcrumb-item active">Perfil</li>
                        </ol>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo base_url(''); ?>assets/admin/img/perfil/<?php echo $this->session->userdata['id']; ?>.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $dados->nome; ?></h4>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Endereço de Email </small>
                                <h6><?php echo $dados->email; ?></h6> <small class="text-muted p-t-30 db">Telefone</small>
                                <h6><?php echo $dados->telefone; ?></h6> <small class="text-muted p-t-30 db">Celular</small>
                                <h6><?php echo $dados->celular; ?></h6> <small class="text-muted p-t-30 db">Endereço</small>
                                <h6><?php echo $dados->rua . " " . $dados->bairro . " " . $dados->rua . " " . $dados->cidade . " - " . $dados->estado; ?></h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Perfil Social</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Linha do Tempo</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Perfil</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Editar Conta</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="http://localhost/base/assets/admin/img/perfil/<?php echo $this->session->userdata['id']; ?>.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link"><?php echo $dados->nome; ?></a> <span class="sl-date">Primeiro Acesso em</span>
                                                        <p><?php echo $dados->dataCadastro; ?> <a href="#"></a></p>

                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Nome Completo</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $dados->nome; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Celular</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $dados->celular; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $dados->email; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Local</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $dados->cidade; ?></p>
                                            </div>
                                        </div>

                                    

                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form id="cadUsuario" method="post" class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Nome Completo</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->nome; ?>" class="form-control form-control-line" name="nome" id="nome" value="<?php echo $dados->nome; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="<?php echo $dados->email; ?>" class="form-control form-control-line" name="email" id="email" value="<?php echo $dados->email; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Tefone</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->telefone; ?>" class="form-control form-control-line" id="telefone" name="telefone" value="<?php echo $dados->telefone; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Celular</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->celular; ?>" class="form-control form-control-line" id="celular" name="celular" value="<?php echo $dados->celular; ?>">
                                                </div>
                                            </div>
                                            
                                          

                                            <div class="form-group">
                                                <label class="col-md-12">Bairro</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->bairro; ?>" class="form-control form-control-line" id="bairro" name="bairro" value="<?php echo $dados->bairro; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Rua</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->rua; ?>" class="form-control form-control-line" id="rua" name="rua" value="<?php echo $dados->rua; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Numero</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->numero; ?>" class="form-control form-control-line" id="numero" name="numero" value="<?php echo $dados->numero; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Cidade</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="<?php echo $dados->cidade; ?>" class="form-control form-control-line" id='cidade' name="cidade" value="<?php echo $dados->cidade; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Estado</label>
                                                <div class="col-sm-12">
                                                    <select name="estado"  id="estado" class="form-control form-control-line">

                                                        <option selected="" value="<?php echo $dados->estado ?>"><?php echo $dados->estado ?></option>
                                                        <option value="Acre">Acre</option>
                                                        <option value="Alagoas">Alagoas</option>
                                                        <option value="Amapá">Amapá</option>
                                                        <option value="Amazonas">Amazonas</option>
                                                        <option value="Bahia">Bahia</option>
                                                        <option value="Ceará">Ceará</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Espírito Santo">Espírito Santo</option>
                                                        <option value="Goiás">Goiás</option>
                                                        <option value="Maranhão">Maranhão</option>
                                                        <option value="Mato Grosso">Mato Grosso</option>
                                                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                                        <option value="Minas Gerais">Minas Gerais</option>
                                                        <option value="Pará">Pará</option>
                                                        <option value="Paraíba">Paraíba</option>
                                                        <option value="Paraná">Paraná</option>
                                                        <option value="Pernambuco">Pernambuco</option>
                                                        <option value="Piauí">Piauí</option>
                                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                        <option value="Rondônia">Rondônia</option>
                                                        <option value="Roraima">Roraima</option>
                                                        <option value="Santa Catarina">Santa Catarina</option>
                                                        <option value="São Paulo">São Paulo</option>
                                                        <option value="Sergipe">Sergipe</option>
                                                        <option value="Tocantins">Tocantins</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button id="salvar" class="btn btn-success" value="Salvar"  />Atualizar Cadastro</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-md-6 col-xs-6 b-r">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="widget-title">
                                                        <span class="icon">
                                                            <i class="icon-th-list"></i>
                                                        </span>

                                                        <h3 class="text-themecolor m-b-0 m-t-0">Alterar Senha</h3>
                                                    </div>
                                                    <div class="widget-content">
                                                        <div class="row-fluid">
                                                            <div class="span12" style="min-height: 260px">
                                                                <form id="formSenha" method="post" class="form-horizontal form-material">


                                                                    <div class="form-group">
                                                                        <label class="col-md-12">Senha Atual</label>
                                                                        <input type="password" id="oldSenha" name="oldSenha" class="span12"  />


                                                                        <label class="col-md-12">Nova Senha</label>
                                                                        <input type="password" id="novaSenha" name="novaSenha" class="span12" />


                                                                        <label class="col-md-12">Confirmar Senha</label>
                                                                        <input type="password" name="confirmarSenha"  id="confirmarSenha" class="span12" />

                                                                        <div class="form-group">
                                                                            <div class="col-sm-12">
                                                                                <br>
                                                                                <button  class="btn btn-danger" id="alterarsenha" />Alterar Senha</button>
                                                                            </div>
                                                                        </div>


                                                                </form>
                                                            </div>   </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- sample modal content -->

                <button type="button" id="call-modal" class="btn btn-primary" data-toggle="modal" data-target="#mymodal" style="display:none">

                </button>
                <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                            </div>
                            <div class="modal-body">       
                                <h2 id="myModalLabel" name="myModalLabel">Atualizando !</h2>
                                <p  id="Pmodal" name="Pmodal" style="display: block;">Isso leva alguns segundos.</p>
                                <div class="progress">
                                    <div id="resolucao"class="progress-bar bg-danger wow animated progress-animated" style="width: 100%; height:30px;" role="progressbar"> <span class="sr-only">100% Complete</span> </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose" name="btnClose"> OK</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>


            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


    </div></div></div>


<script src="<?php echo base_url(''); ?>assets/admin/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#salvar').click(function () {

            var dados = $('#cadUsuario').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo base_url(); ?>MinhaConta/update?ajax=true",
                async: true,
                data: dados,
                success: function (response) {
                    $('#myModalLabel').text('Atualizando...');
                    $('#Pmodal').text('Isso leva apenas alguns segundos');

                    if (response.success == true) {

                        document.getElementById("call-modal").click();
                        seconds = 3;
                        $("#btnClose").hide();
                        setTimeout(function () {
                            document.getElementById('resolucao').className = 'progress-bar bg-sucess';
                            $('#myModalLabel').text('Sucesso!!!');
                            $('#Pmodal').text('Parabens seus dados foram salvos com sucesso');


                            window.location.reload();
                        }, seconds * 2000)

                    } else {
                        document.getElementById("call-modal").click();
                        seconds = 3;
                        $("#btnClose").hide();
                        setTimeout(function () {
                            document.getElementById('resolucao').className = 'progress-bar bg-danger';
                            $('#myModalLabel').text('Sentimos muito');
                            $('#Pmodal').text('Mais não Foi possivel Alterar seus dados, tente novamente mais tarde');
                            $("#btnClose").style('background-color: rgb(221, 107, 85); border-left-color: rgb(221, 107, 85); border-right-color: rgb(221, 107, 85)');
                        }, seconds * 1000)
                        $("#btnClose").show();

                    }



                }
            });

            return false;
        });
    });

    $(document).ready(function () {

        $('#formSenha').validate({
            rules: {
                oldSenha: {
                    required: true
                },
                novaSenha: {
                    required: true
                },
                confirmarSenha: {
                    equalTo: "#novaSenha"
                }
            },
            messages: {
                oldSenha: {
                    required: '<h6 class="alert alert-success alert-rounded">Campo Requerido</h3>'
                },
                novaSenha: {
                    required: '<h6 class="alert alert-success alert-rounded">Campo Requerido</h3>'
                },
                confirmarSenha: {
                    equalTo: '<h6 class="alert alert-danger alert-rounded">As senhas não combinam.</h3>'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });


    });
</script>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#alterarsenha').click(function () {

            var dados = $('#formSenha').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo base_url(); ?>MinhaConta/alterarsenha?ajax=true",
                async: true,
                data: dados,
                success: function (response) {
                    if (response.success == true) {
                        $('#myModalLabel').text('Atualizando...');
                        $('#Pmodal').text('Isso leva apenas alguns segundos');

                        document.getElementById("call-modal").click();
                        seconds = 3;
                        $("#btnClose").hide();
                        setTimeout(function () {
                            document.getElementById('resolucao').className = 'progress-bar bg-sucess';
                            $('#myModalLabel').text('Sucesso!!!');
                            $('#Pmodal').text('Parabens seus dados foram salvos com sucesso');

                            $("#btnClose").show();
                        }, seconds * 1000)

                    } else if (response.senha_invalida == true) {
                        document.getElementById("call-modal").click();
                        seconds = 1;
                        $("#btnClose").hide();
                        setTimeout(function () {
                            document.getElementById('resolucao').className = 'progress-bar bg-danger';
                            $('#myModalLabel').text('senha invalida');
                            $('#Pmodal').text('Infelismente a senha digita esta incorreta :(');
                            $("#btnClose").style('background-color: rgb(221, 107, 85); border-left-color: rgb(221, 107, 85); border-right-color: rgb(221, 107, 85)');
                        }, seconds * 1000)
                        $("#btnClose").show();

                    } else if (response.senha_igual == true) {
                        document.getElementById("call-modal").click();
                        seconds = 1;
                        $("#btnClose").hide();
                        setTimeout(function () {
                            document.getElementById('resolucao').className = 'progress-bar bg-danger';
                            $('#myModalLabel').text('senhas nao coincidem');
                            $('#Pmodal').text(' :(');
                            $("#btnClose").style('background-color: rgb(221, 107, 85); border-left-color: rgb(221, 107, 85); border-right-color: rgb(221, 107, 85)');
                        }, seconds * 1000)
                        $("#btnClose").show();

                    }



                }
            });

            return false;
        });
    });
</script>

</body>

</html>