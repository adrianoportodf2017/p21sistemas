<?php
$dados = $this->dados['usuario'];
$msg = $this->input->get('msg');
$xml = $this->dados['xml'];
?>

<div class="page-wrapper"> 
    <style>

        input[type=text] {
            width: 110%;
            padding: 12px 20px;


        }


    </style>
    <div class="col-12"> 


        <div class="card" style="width: 100%;" >
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Inicio</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Menssagens</span></a> </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="p-3">


                            <h2 id="h2loader" align="center">Aguarde alguns instantes, estamos carregando a lista...  <div class="spinner-border text-muted"></div>
                                <div class="spinner-border text-primary"></div>


                            </h2>
                            <div  id="loader" class="progress-bar bg-danger wow animated progress-animated " style="width: 100%; height:50px;" role="progressbar"></div>
                            <form action="Dashboard/salvarXML" id="formxml" name="formxml" method="post" enctype="multipart/form-data">
                                <!-- CAMPO DE BUSCA DO ARQUIVO XML -->
                                <fieldset>
                                    <legend>Importar  Arquivo XML ou Excel(xls):</legend>
                                    <div class="campo_carregamento">
                                        <input type="file" name="XML" id="XML" required="" /><span class="loading_file_xml"></span>
                                    </div>
                                    <hr>
                                </fieldset>
                                
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-outline-primary btn-lg" id=""><b>Atualizar</b></button><br>
										<span>OBS:<b>Caso a lista já estiver inserida no sistema ao importar ele não duplicara as informações,<br>
                                        mais atualizara caso acha alguma modificação.</b></span>
                                </div> 
                            </form> 
                            <h2 class="card-title">Cartórios Cadastrados</h2>
                            <h6 class="card-subtitle">Lista de Cartórios Cadastrados no Sistema</h6>
                            <div class="table-responsive">
                                <div id="example23_wrapper" class="dataTables_wrapper">
                                    <div class="d-flex no-block">
                                        <a class="pull-right btn btn-success btn-xs" href="Dashboard/generateXls"><i class="fa fa-file-excel-o"></i> Baixar Planilha</a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Adicionar Novo Registro</button>
                                    </div>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <div class="modal-header modal-colored-header bg-success">
                                                    <h4 class="modal-title text-white" id="success-header-modalLabel">Desafio P21 - 
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="mt-0">Cadastrar Novo Registro</h5>
                                                    <form  method="post"  id="cadCartorio" name="cadCartorio" enctype="multipart/form-data">



                                                        <div class="row" style="width:100%;">
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Nome</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Adriano Alves">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Razão</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="razao" name="razao" placeholder="Razão social">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Documento</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="documento" name="documento" placeholder="Ex: 715988415989">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Cep</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Ex: 716910-054">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Bairro</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Jão Candido">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Endereco</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Rua 10 Casa 100">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Cidade</div>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="cidade" name="cidade"placeholder="Ex: Brasilia">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">Estado</div>
                                                                    </div>
                                                                    <select name="uf"  id="uf" class="form-control form-control-line">

                                                                        <option selected="" value="Estado">Estado</option>
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
                                                                    </select
                                                                </div>
                                                            </div>
                                                        </div>                                                 
                                                        <div class="form-group col-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">E-mail</div>
                                                                </div>
                                                                <input type="text" class="form-control" id="email" name="email" placeholder="Ex: adrianobr00@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">Telefone</div>
                                                                </div>
                                                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Ex: 61 994056034">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">Tabeliao</div>
                                                                </div>
                                                                <input type="text" class="form-control" id="tabeliao" name="tabeliao" placeholder="Ex: Adriano Alves">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">Ativo</div>
                                                                </div>
                                                                <select name="ativo"  id="ativo" name="ativo" class="form-control form-control-line">

                                                                    <option selected="" value="1">Sim</option>
                                                                    <option value="0">Nãoo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-outline-primary btn-lg"  id="salvar" value="Salvar"  /><b>Salvar</b></button>
                                            </div>
                                        </div> 
                                        </form>


                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>

                            <table id="example"  class="tabelaEditavel  table-striped" style="width: 100%;"  >
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 5px;">Cod</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px;">Nome</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Razão</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Documento</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">CEP</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 80px;">Endereco</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">bairro</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;">Cidade</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 20px;">UF</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Telefone</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 80px;">Tabelião</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 5px;">Ativo</th>
                                        <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Operações</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">cod</th>
                                        <th rowspan="1" colspan="1">Nome</th>
                                        <th rowspan="1" colspan="1">Razão</th>
                                        <th rowspan="1" colspan="1">Doc.</th>
                                        <th rowspan="1" colspan="1">CEP</th>
                                        <th rowspan="1" colspan="1">Endereco</th>
                                        <th rowspan="1" colspan="1">Bairro</th>
                                        <th rowspan="1" colspan="1">Cidade</th>
                                        <th rowspan="1" colspan="1">UF</th>
                                        <th rowspan="1" colspan="1">E-mail</th>
                                        <th rowspan="1" colspan="1">Telefone</th>
                                        <th rowspan="1" colspan="1">Tabelião</th>
                                        <th rowspan="1" colspan="1">Ativo</th>
                                        <th rowspan="1" colspan="1">Operaçoes</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($xml as $r) { ?>
                                        <tr role="row" class="even" style="width: 100%;" id="<?php echo $r->id; ?>">
                                            <td class="sorting_1" style="width: 5px;">
                                                <?php echo $r->id; ?>
                                            </td>
                                            <td class=""style="width: 100px;"><?php echo $r->nome; ?></td>
                                            <td class=""style="width: 100px;"><?php echo $r->razao; ?></td>
                                            <td class=""style="width: 100px;"><?php echo $r->documento; ?></td>
                                            <td class=""style="width: 50px;"><?php echo $r->cep; ?></td>
                                            <td class=""style="width: 80px;"><?php echo $r->endereco; ?></td>
                                            <td class=""style="width: 80px;"><?php echo $r->bairro; ?></td>
                                            <td class=""style="width: 50px;"><?php echo $r->cidade; ?></td>
                                            <td class=""style="width: 20px;"><?php echo $r->uf; ?></td>
                                            <td class=""style="width: 80px;"><?php echo $r->email; ?></td>
                                            <td class="" style="width: 50px;"><?php echo $r->telefone; ?></td>
                                            <td class=""style="width: 80px;"><?php echo $r->tabeliao; ?></td>
                                            <td class=""style="width: 30px;"><?php echo $r->ativo; ?></td>
                                            <td class="">
                                                <i  class="btn btn-outline-primary waves-effect waves-light btnEditar fa fa-pencil"  ></i>
                                                <button class="btn btn-outline-danger waves-effect waves-light" type="button"  onclick="excluirLinha(<?php echo $r->id; ?>)"><i class="mdi mdi-delete"></i></button>
                                            </td>

                                        </tr>

                                    <?php }?>

                                </tbody>
                            </table></div></div></div>
                <div class="tab-pane p-3" id="profile" role="tabpanel">  
                    <div class="row">
                        <div class="col-8">
                           
                            <form name="enviaremail" id="enviaremail" method="post">
                                <input type=hidden name="destino" value="adrianobr00@gmail.com">
                                <input type=hidden name="enviado" value="http://localhost/base/dashboard/contato?email=enviado">
                                <p><b>Nome:</b><br>
                                    <input type=text name="nome" id="nome" size="45"></p><br>
                                <p><b>Email(para enviar para mais de uma pessoa acrescente a virgula separando os email, sendo o que o limite e de 100 emails por vez):</b><br>
                                    <input type=text name="email" id="email" size="45" placeholder="ex: adrianobr00@gmail.com, adriano14orama@gmail.com, adrianomsn-2006@gmail.com"></p><br>
                                <p><b>Assunto:</b><br>
                                    <input type=text name="assunto" id="assunto" size="45"></p><br>
                                <p><b>Mensagem:</b><br>
                                    <textarea name="mensagem" id="mensagem" rows="10" cols="60" wrap="virtual"></textarea></p><br>
                                <p><input class="btn btn-outline-primary"type="reset" value="Limpar Formulário"></p>
                            </form>
                            <button id="email" name="email" class="btn btn-outline-primary btn-lg" type="button" onclick="enviar()">Enviar email</button> 
                            <h4>Segue os emails cadastrados, basta copiar e colar no destinatario</h4>
                         <?php foreach ($xml as $r)
                             
                             {
                             if(isset($r->email) && $r->email != null && $r->email != ""){
                                 echo $r->email.',<br>';
                                         
                             }
                         
                         
                         
                         } ?>
                            
                        <div class="tab-pane p-3" id="messages" role="tabpanel">

                        </div> </div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(''); ?>assets//plugins/jquery/jquery.min.js"></script>
      
        <script src="<?php echo base_url(''); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
        <script src="<?php echo base_url(''); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="<?php echo base_url(''); ?>assets//js/dashboard1.js"></script>
        <script src="<?php echo base_url(''); ?>/assets//js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('') ?>assets//js/waves.js"></script>
        <script src="<?php echo base_url('') ?>assets//js/sidebarmenu.js"></script>
        <script src="<?php echo base_url(''); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="<?php echo base_url(''); ?>/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(''); ?>/assets/plugins/toast-master/js/jquery.toast.js"></script>
        <script src="<?php echo base_url(''); ?>/assets//js/toastr.js"></script>
        <script src="<?php echo base_url(''); ?>/assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
        <script src="<?php echo base_url('') ?>assets//js/custom.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/plugins/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="<?php echo base_url('') ?>assets/plugins/wizard/steps.js"></script>
        <script src="<?php echo base_url('') ?>assets/plugins/icheck/icheck.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script src="<?php echo base_url(); ?>assets//plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets//plugins/html5-editor/wysihtml5-0.3.0.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(''); ?>assets/plugins/dropify/dist/js/dropify.min.js"></script>
    </div>
        <script>

                                                $(document).ready(function () {

                                                    document.getElementById('loader').className = 'progress-bar bg-sucess';
                                                    $('#h2loader').text('Lista carregada com Sucesso!!!');


                                                    var msg = "<?php echo $msg; ?>";
                                                    if (msg == 'sucess') {


                                                        swal({
                                                            title: "Parabéns",
                                                            text: "Seu arquivo foi importado com sucesso!",
                                                            type: "success",
                                                            confirmButtonClass: "btn-danger",
                                                            confirmButtonText: "ok, Obrigado!",

                                                        })
                                                    } else if (msg == 'error') {

                                                        swal({
                                                            title: "error",
                                                            text: "Seu arquivo não foi importado com sucesso, arquivo incompatível ou esta comrropido!",
                                                            type: "warning",
                                                            confirmButtonClass: "btn-danger",
                                                            confirmButtonText: "ok, Obrigado!",

                                                        })
                                                    } else if (msg == 'arquivoincompativel') {

                                                        swal({
                                                            title: "error",
                                                            text: "Arquivo com formato não surportado, por favor verifique e tente novamento!",
                                                            type: "warning",
                                                            confirmButtonClass: "btn-danger",
                                                            confirmButtonText: "ok, Obrigado!",

                                                        })
                                                    }
                                                });

                                                function excluirLinha(Id) {
                                                    var idItem = Id;
                                                    swal({
                                                        title: "Confirma exclusão?",
                                                        text: "Você não poderá mais visualizar as informações dessa linha!",
                                                        type: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonClass: "btn-danger",
                                                        confirmButtonText: "Sim, exclua ela!",
                                                        cancelButtonText: "Não",
                                                        closeOnConfirm: false,
                                                        closeOnCancel: true
                                                    }, function (isConfirm) {
                                                        if (isConfirm) {
                                                            $.ajax({
                                                                url: "<?php echo base_url('dashboard/excluirItem?ajax=true'); ?>",
                                                                type: "POST",
                                                                data: {idItem: idItem},
                                                                dataType: 'json',
                                                                success: function (data, textStatus, jqXHR) {
                                                                    if (data.situacao == true) {
                                                                        swal('Exclusão', data.mensagem, "success");
                                                                        document.getElementById(idItem).remove();
                                                                        $(this).parent().parent().remove();
                                                                        $(idItem).remove();

                                                                    } else {
                                                                        swal("Erro", "Erro causado por:" + data.mensagem, "error");
                                                                    }
                                                                }, error: function (jqXHR, textStatus, errorThrown) {
                                                                    swal("Erro", "Erro causado por:" + errorThrown, "error");
                                                                }
                                                            });
                                                        }
                                                    });
                                                }









        </script>

        <script>



            $(document).ready(function () {


                function Salvar() {
                    var par = $(this).parent().parent(); //tr
                    var tdId = par.children("td:nth-child(1)");
                    var tdNome = par.children("td:nth-child(2)");
                    var tdRazao = par.children("td:nth-child(3)");
                    var tdDocumento = par.children("td:nth-child(4)");
                    var tdCep = par.children("td:nth-child(5)");
                    var tdEndereco = par.children("td:nth-child(6)");
                    var tdBairro = par.children("td:nth-child(7)");
                    var tdCidade = par.children("td:nth-child(8)");
                    var tdUf = par.children("td:nth-child(9)");
                    var tdEmail = par.children("td:nth-child(10)");
                    var tdTelefone = par.children("td:nth-child(11)");
                    var tdTabeliao = par.children("td:nth-child(12)");
                    var tdAtivo = par.children("td:nth-child(13)");
                    var tdBotoes = par.children("td:nth-child(14)");

                    tdNome.html(tdNome.children("input[type=text]").val());
                    tdRazao.html(tdRazao.children("input[type=text]").val());
                    tdDocumento.html(tdDocumento.children("input[type=text]").val());
                    tdCep.html(tdCep.children("input[type=text]").val());
                    tdEndereco.html(tdEndereco.children("input[type=text]").val());
                    tdBairro.html(tdBairro.children("input[type=text]").val());
                    tdCidade.html(tdCidade.children("input[type=text]").val());
                    tdUf.html(tdUf.children("input[type=text]").val());
                    tdEmail.html(tdEmail.children("input[type=text]").val());
                    tdTelefone.html(tdTelefone.children("input[type=text]").val());
                    tdTabeliao.html(tdTabeliao.children("input[type=text]").val());
                    tdAtivo.html(tdAtivo.children("input[type=text]").val());
                    tdBotoes.html("<i class='btn btn-outline-primary waves-effect waves-light btnEditar fa fa-pencil'  ></i><button class='btn btn-outline-danger waves-effect waves-light fa fa-remove' type='button'  onclick='excluirLinha(" + tdId.html() + ")'><i class='mdi mdi-delete'></i></button>");

                    $.ajax({
                        url: "<?php echo base_url('dashboard'); ?>/SalvarItem?ajax=true",
                        type: "POST",
                        data: {id: tdId.html(),
                            nome: tdNome.html(),
                            razao: tdRazao.html(),
                            documento: tdDocumento.html(),
                            cep: tdCep.html(),
                            endereco: tdEndereco.html(),
                            bairro: tdBairro.html(),
                            cidade: tdCidade.html(),
                            uf: tdUf.html(),
                            email: tdEmail.html(),
                            telefone: tdTelefone.html(),
                            tabeliao: tdTabeliao.html(),
                            ativo: tdAtivo.html()},
                        dataType: 'json',
                        success: function (data) {
                            if (data.situacao == true) {
                                swal('Cadastro', data.mensagem, "success");
                            } else {
                                swal("Erro", "Erro causado por:" + data.mensagem, "error");
                            }
                        }, error: function (jqXHR, textStatus, errorThrown) {
                            swal("Erro", "Erro causado por:" + errorThrown, "error");
                        }
                    });



                    $(".btnEditar").bind("click", Editar);
                    $(".btnExcluir").bind("click", Excluir);
                }
                ;

                function Editar() {
                    var par = $(this).parent().parent(); //tr
                    var tdNome = par.children("td:nth-child(2)");
                    var tdRazao = par.children("td:nth-child(3)");
                    var tdDocumento = par.children("td:nth-child(4)");
                    var tdCep = par.children("td:nth-child(5)");
                    var tdEndereco = par.children("td:nth-child(6)");
                    var tdBairro = par.children("td:nth-child(7)");
                    var tdCidade = par.children("td:nth-child(8)");
                    var tdUf = par.children("td:nth-child(9)");
                    var tdEmail = par.children("td:nth-child(10)");
                    var tdTelefone = par.children("td:nth-child(11)");
                    var tdTabeliao = par.children("td:nth-child(12)");
                    var tdAtivo = par.children("td:nth-child(13)");
                    var tdBotoes = par.children("td:nth-child(14)");

                    tdNome.html("<input type='text'  rows='2' id='txNome' name='txNome' value='" + tdNome.html() + "' style='width:100%;font-size: 13px' />");
                    tdRazao.html("<input type='text' id='txtRazao' name='txRazao'  value='" + tdRazao.html() + "' style='width:100%;font-size: 13px' />");
                    tdDocumento.html("<input type='text' id='txtDocumento' name='txDocumento'  value='" + tdDocumento.html() + "'style='width:100%;font-size: 13px' />");
                    tdCep.html("<input type='text' id='txtCep' name='txCep'  value='" + tdCep.html() + "'style='width:100%;font-size: 13px' />");
                    tdEndereco.html("<input type='text' id='txtEndereco' name='txEndereco'  value='" + tdEndereco.html() + "'style='wwidth:100%;font-size: 13px' />");
                    tdBairro.html("<input type='text' id='txtBairro' name='txBairro'  value='" + tdBairro.html() + "'style='width:100%;font-size: 13px' />");
                    tdCidade.html("<input type='text' id='txtCidade'  name='txCidade'  value='" + tdCidade.html() + "'style='width:100%;font-size: 13px' />");
                    tdUf.html("<input type='text' id='txtUf' name='txUf'  value='" + tdUf.html() + "'style='width:100%;font-size: 13px' />");
                    tdEmail.html("<input type='text' id='txtEmail'  name='txEmail'  value='" + tdEmail.html() + "'style='width:100%;font-size: 10px' />");
                    tdTelefone.html("<input type='text' id='txtTelefone' name='txTelefone'  value='" + tdTelefone.html() + "'style='width:100%;font-size: 13px' />");
                    tdTabeliao.html("<input type='text'id='txtTabeliao'  name='txTabeliao' value='" + tdTabeliao.html() + "'style='width:100%;font-size: 13px' />");
                    tdAtivo.html("<input type='text' id='txtAtivo'  name='txAtivo' value='" + tdAtivo.html() + "'style='width:100%;font-size: 13px' />");
                    tdBotoes.html("<i class='btnSalvar  btn btn-outline-primary waves-effect waves-light fa fa fa-floppy-o pointer'></i>");

                    $(".btnSalvar").bind("click", Salvar);
                    $(".btnEditar").bind("click", Editar);
                    $(".btnExcluir").bind("click", Excluir);
                }
                ;


                $(".btnEditar").bind("click", Editar);
                $(".btnExcluir").bind("click", Excluir);
                $("#btnAdicionar").bind("click", Adicionar);
            });
            $(document).ready(function () {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: ['pdf', 'print', 'excel'],

                    "oLanguage": {
                        "sLengthMenu": "Mostrar _MENU_ registros por página",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                        "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
                        "sInfoFiltered": "(filtrado de _MAX_ registros)",
                        "sSearch": "<h5 >PESQUISAR: </h5>",
                        "oPaginate": {
                            "sFirst": "Início",
                            "sPrevious": "Anterior",
                            "sNext": "Próximo",
                            "sLast": "Último"
                        }
                    },

                });
            });



        </script>

        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                /// Quando usuário clicar em salvar será feito todos os passo abaixo
                $('#salvar').click(function () {

                    var dados = $('#cadCartorio').serialize();

                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: "<?php echo base_url(); ?>Dashboard/SalvarItem?ajax=true",
                        async: true,
                        data: dados,
                        success: function (data) {
                            if (data.situacao == true) {
                                swal('Cadastro', data.mensagem, "success");
                            } else {
                                swal("Erro", "Não foi possivel salvar, por favor contate o Administrador do sistema, email: adrianobr00@gmail.com", "error");
                            }
                        }, error: function (jqXHR, textStatus, errorThrown) {
                            swal("Erro", "Erro causado por: - Nº documento ja esta cadastrado, por favor verifique o numero de documento", "error");
                        }
                    });
                });
            });
            
           
                /// Quando usuário clicar em salvar será feito todos os passo abaixo
            function enviar(){
            alert('teste');
                var dados = $('#enviaremail').serialize();

                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: "<?php echo base_url(); ?>Dashboard/Contato?ajax=true",
                        async: true,
                        data: dados,
                        success: function (data) {
                            if (data.situacao == true) {
                                swal('Pronto', data.mensagem, "success");
                            } else {
                                swal("Erro", "Não foi possivel enviar contate o administrdor do sistema: adrianobr00@gmail.com", "error");
                            }
                        }, error: function (jqXHR, textStatus, errorThrown) {
                            swal("Erro", "Erro ao enviar", "error");
                        }
                    });
            
            }

                    
         




        </script>