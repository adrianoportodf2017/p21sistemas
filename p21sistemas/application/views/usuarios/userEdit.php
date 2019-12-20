      
<?php $dados = $this->data['userEdit'];?>
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
                <h3 class="text-themecolor">Seja Bem Vindo</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item active">Painel de Edição do Usuario</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <div class="d-flex m-t-10 justify-content-end">
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>Usuarios Ativos</small></h6>
                            <h4 class="m-t-0 text-info">100</h4></div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>Usuarios Online</small></h6>
                            <h4 class="m-t-0 text-primary">43</h4></div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <!-- Column -->
            <!-- Column -->


            <!-- Column -->
            <!-- Col8umn -->
            <div class="col-lg-5 col-md-5">
                <div class="card">
                    <img class="" src="<?php echo base_url(''); ?>assets/admin/assets/images/background/weatherbg.jpg" alt="Card image cap">
                    <div class="card-img-overlay" style="height:110px;">
                        <h3 class="card-title text-white m-b-0 dl">Previsão do tempo</h3>
                        <small class="card-text text-white font-light">Segunda 15 de Abril</small>
                    </div>
                    <div class="card-body weather-small">
                        <div class="row">
                            <div class="col-8 b-r align-self-center">
                                <div class="d-flex">
                                    <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                                    <div class="m-l-20">
                                        <h1 class="font-light text-info m-b-0">32<sup>0</sup></h1>
                                        <small>Dia Chuvoso </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h1 class="font-light m-b-0">25<sup>0</sup></h1>
                                <small>A noite</small>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <button class="btn btn-outline-primary waves-effect waves-light" type="button" id="EditUser" name="EditUser" value="EditUser">
                            <span class="btn-label"><i class="fa fa-heart"></i></span>Salvar</button>
                    </div>
                </div>
            </div>


            <div class="col-lg-7 col-md-7">

                <div class="row">
                    <!-- Column --> <!-- Column --> <!-- Column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form id="EditUsuario" method="post" class="form-horizontal form-material">
                                            <div class="table-responsive m-t-20">        
                                                <div class="card-body">
                                                    <h2 class="card-title">Editar Usuario</h2>
                                                    <h6 class="card-subtitle">Dados Usuario</h6>


                                                    <form id="EditUsuario" method="post" class="form-horizontal form-material">

                                                        <div class="form-group">
                                                            <label class="col-md-12">Nome Completo</label>
                                                            <div class="col-md-12">
                                                                <input type="text" placeholder="<?php echo $dados->nome; ?>" class="form-control form-control-line" name="nome" id="nome" value="<?php echo $dados->nome; ?>">
                                                                <input type="text" placeholder="<?php echo $this->uri->segment(3); ?>" style="display: none" name="idUsuarios" id="idUsuarios" value="<?php echo $this->uri->segment(3); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-email" class="col-md-12">Email</label>
                                                            <div class="col-md-12">
                                                                <input type="email" placeholder="<?php echo $dados->email; ?>" class="form-control form-control-line" name="email" id="email" value="<?php echo $dados->email; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-email" class="col-md-12">Tipo de Conta</label>
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
                                                            <label class="col-md-12">Cargo</label>
                                                            <div class="col-md-12">
                                                                <input type="text" placeholder="<?php echo $dados->cargo; ?>" class="form-control form-control-line" id="cargo" name="cargo" value="<?php echo $dados->cargo; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-12">Perfil</label>
                                                            <div class="col-md-12">
                                                                <textarea rows="5" class="form-control form-control-line" id="perfil" name="perfil" value="<?php echo $dados->perfil; ?>"><?php echo $dados->perfil; ?></textarea>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div></div></div></div>


        <button type="button" id="call-modal" class="btn btn-primary" data-toggle="modal" data-target="#mymodal" style="display: none">

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

</div>				 


<script src="<?php echo base_url(''); ?>assets/admin/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#EditUser').click(function () {

            var dados = $('#EditUsuario').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo base_url(); ?>Usuarios/userEditar?ajax=true",
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
</script>	