<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
   /**
* Classe controladora da painel inicial ou Dashboard.
    * nessa classe ele carrega todas views  e model do sistema inicial, incluindo o javascript que esta
    * na view footer
*
* Gerenciamento de usuários e políticas de acesso.
*
* Essa aplicação requer CodeIgniter 3.+.
*
* @package    Project extends CodeIgniter
* @subpackage 
* @author     Adriano alves <adrianobr00@gmail.com>
* @since      v1.0
* @category   Controller
*/

    
    
    /**
    *nessa função ele carrega sem os dados do usuario como padrão.
    *
    * @access public
    * @return array dados[usuario]
    */
    public function __construct() {
        parent::__construct();
        $this->dados['usuario'] = $this->MinhaConta_Model->getDados();
      
    }
    /**
    * A index carrega a model todos os dados da tabela xml, já convertendo em html .
    *
    * @access public
    * @return array dados[xml] 
    */

    public function index() {
        $this->dados['xml'] = $this->Dashboard_Model->getDadosXML();
        $this->data['qntLinhas'] = $this->Dashboard_Model->qntLinhas();
        $this->load->view('tema/header');
        $this->load->library('form_validation');
        $this->load->view('dashboard/dashboard');
        //$this->load->view('tema/footer');
    }
    
     /**
    * A Função contato recebe string  menssagem e enviar para o email do destinatário
      * sendo que essa função mail já e nativa do proprio codeigneter;
    *
    * @access public
    * @return string menssagem
    */

    public function Contato() {

        $email = $this->input->post('email');        
       
        if ($email) {
            $assunto = $this->input->post('assunto');
            $Mensagem = $this->input->post('mensagem');
            $nome = $this->input->post('nome');
            $this->email->from("adriano14orama@gmail.com", 'adriano14orama@gmail.com');
            $this->email->subject($assunto);
            $this->email->to($email);
            $this->email->message("Olá!! Tudo bem Sr(a)" . $this->input->post('nome') . " Recebemos a sua mensagem com sucesso, assim que possível retornaremos o contato"
                    . ""
                    . ""
                    . ">>>>>>segue mensagem envianda:"
                    . ""
                    . $Mensagem);
            $this->email->send();
            die(die(json_encode(array('mensagem' => ' Mensagem envianda com  sucesso!', 'situacao' => true))));
        } else {            
                     die(die(json_encode(array('mensagem' => ' Nenhum campo foi alterado', 'situacao' => false))));
            }
            
        }
    
        
         /**
    * A Função salvarXML Atualiza os dados tabela xml com o arquivo anexado em $_Files, sendo que 
          * pode ser em XML ou excel, seguindo a sequencia dos dados da tabela.
          * Nessa função está incluso as biblioteca PHPExcee SimpleXml, que converte os dados em html para xml e excel.
    *
    * @access public
    * @return string menssagem
    */

    public function salvarXML() {


        if (isset($_FILES) && $_FILES != NULL && $_FILES['XML']['name'] != "") {
            $path = $_FILES['XML']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            if ($ext == "xml") {
                $xml = simplexml_load_file($_FILES['XML']['tmp_name']);
                foreach ($xml as $x) {
                    $data = array(
                        'nome' => $x->nome,
                        'razao' => $x->razao,
                        'documento' => $x->documento,
                        'cep' => $x->cep,
                        'endereco' => $x->endereco,
                        'bairro' => $x->bairro,
                        'cidade' => $x->cidade,
                        'uf' => $x->uf,
                        'ativo' => $x->ativo,
                        'tabeliao' => $x->tabeliao);
                    $query = $this->Dashboard_Model->xml($data);
                };

                if ($query === true) {
                    header('Location:' . base_url('?msg=sucess'));
                } else {
                    header('Location:' . base_url('?msg=error'));
                }
            } elseif ($ext == "xls" or $ext == "xlsx" or $ext == "xlsm" or $ext == "xlsb") {

                $path = $_FILES['XML']['tmp_name'];
                $object = PHPExcel_IOFactory::load($path);
                foreach ($object->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
                    for ($row = 2; $row <= $highestRow; $row++) {
                        $nome = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                        $razao = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $documento = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                        $cep = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                        $bairro = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                        $endereco = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                        $cidade = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                        $uf = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                        $email = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                        $telefone = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                        $tabeliao = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                        $ativo = $worksheet->getCellByColumnAndRow(11, $row)->getValue();

                        $data = array(
                            'nome' => $nome,
                            'razao' => $razao,
                            'documento' => $documento,
                            'cep' => $cep,
                            'endereco' => $endereco,
                            'bairro' => $bairro,
                            'cidade' => $cidade,
                            'uf' => $uf,
                            'email' => $email,
                            'telefone' => $telefone,
                            'ativo' => $ativo,
                            'tabeliao' => $tabeliao
                        );
                        $query = $this->Dashboard_Model->excel($data);
                    }
                }
                if ($query === true) {
                    header('Location:' . base_url('?msg=sucess'));
                } else {
                    header('Location:' . base_url('?msg=error'));
                }
            } else {

                header('Location:' . base_url('?msg=arquivoincompativel'));
            }
        }
    }

    function excluirItem() {
        $idItem = $this->input->post('idItem');
        if ($this->Dashboard_Model->excluirItem($idItem) == true) {

            die(die(json_encode(array('mensagem' => 'Item excluida com sucesso!', 'situacao' => true))));
        } else {
            die(die(json_encode(array('mensagem' => 'Erro ao Deletar', 'situacao' => false))));
        }
    }

    function SalvarItem() {

        $id = trim($this->input->post('id'), " \t\n\r");
        if (isset($id) && $id != NULL && $id != "") {
            $data = array(
                'nome' => $this->input->post('nome'),
                'razao' => $this->input->post('razao'),
                'documento' => $this->input->post('documento'),
                'cep' => $this->input->post('cep'),
                'endereco' => $this->input->post('endereco'),
                'bairro' => $this->input->post('bairro'),
                'cidade' => $this->input->post('cidade'),
                'uf' => $this->input->post('uf'),
                'email' => $this->input->post('email'),
                'telefone' => $this->input->post('telefone'),
                'tabeliao' => $this->input->post('tabeliao'),
                'ativo' => $this->input->post('ativo')
            );



            if ($this->Dashboard_Model->EditarItem($id, $data) == true) {

                die(die(json_encode(array('mensagem' => ' Item salvo com sucesso!', 'situacao' => true))));
            } else {

                die(die(json_encode(array('mensagem' => ' Nenhum campo foi alterado', 'situacao' => false))));
            }
        } else {

            $data = array(
                'nome' => $this->input->post('nome'),
                'razao' => $this->input->post('razao'),
                'documento' => $this->input->post('documento'),
                'cep' => $this->input->post('cep'),
                'endereco' => $this->input->post('endereco'),
                'bairro' => $this->input->post('bairro'),
                'cidade' => $this->input->post('cidade'),
                'uf' => $this->input->post('uf'),
                'email' => $this->input->post('email'),
                'telefone' => $this->input->post('telefone'),
                'tabeliao' => $this->input->post('tabeliao'),
                'ativo' => $this->input->post('ativo')
            );

            if ($this->Dashboard_Model->addItem('xml', $data) == true) {

                die(die(json_encode(array('mensagem' => ' Registro salvo com sucesso!', 'situacao' => true))));
            } else {

                die(die(json_encode(array('mensagem' => ' Nenhum campo foi alterado', 'situacao' => false))));
            }
        }
    }

    // create xlsx
    public function generateXls() {
        // create file name
         $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        
        $this->load->library('excel');
        $empInfo =  $this->Dashboard_Model->getDadosXML();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Nome');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Razão');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Documento');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'CEP');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Bairro');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Endereco');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Cidade');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'UF');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'email');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'telefone');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'tabeliao');
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Ativo');
     
        // set Row
        $rowCount = 2;
        foreach ($empInfo  as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->nome);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->razao);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->documento);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->cep);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->bairro);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->endereco);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->cidade);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $list->uf);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $list->telefone);
            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $list->tabeliao);
            $objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $list->ativo);
            $rowCount++;
        }
        $filename = "Cartorio" . date("Y-m-d-H-i-s") . ".xlsx";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('php://output');
        
    }

}
