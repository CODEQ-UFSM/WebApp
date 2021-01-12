<?php
class Explorar extends Controller{

    public function __construct() {
        parent::__construct();
        $this->SecaoModel = new SecaoModel();
        $this->AulaModel = new AulaModel();
        $this->TrilhaModel = new TrilhaModel();
    }

    public function index(){

        $data = $this->TrilhaModel->selectAllTrilha();

        $this->view->load('headerexplorar');
        $this->view->load('explorar', $data);
        $this->view->load('footer');
    }

    public function viewTrilha($id){

        $data = $this->TrilhaModel->selectTrilhaById($id);
        $dataaulas = $this->AulaModel->selectAulaByTrilhaId($id);
        $datasecao = $this->SecaoModel->selectSecaoByTrilhaId($id);

        $this->view->load('headertrilha', $data);
        $this->view->load('trilha', [$data, $dataaulas, $datasecao]);
        $this->view->load('footer');
    }

    public function viewAula($parametro){
        try{
            
            $pecas = explode('.', $parametro);
            $id_aula = $pecas[0];
            $num_ordem = $pecas[1];
            
            $auladata = $this->AulaModel->selectAulaById($id_aula);
            
            $aulanome = $auladata->getNome();
            
            $data = $this->AulaModel->selectAulaByPaginaId($id_aula, $num_ordem);
            if($data == 'bug') $this->reload();
			
            [$trilhaid, $cor] = $this->AulaModel->selectTrilhaIdCorByPaginaId($data->getIdPagina());
            
			$pag_names = $this->AulaModel->getNames($id_aula);
			
            $quantidade = $this->AulaModel->getQuantidade($id_aula);
            
            if($num_ordem == $quantidade){
                $data->setUltimo('sim');
            }else{
                $data->setUltimo('nao');
            }
            $this->view->load('headerartigo', $cor);
            $this->view->load('artigo', [$data, $cor, $trilhaid, $aulanome, $quantidade, $pag_names]);
            $this->view->load('footerartigo', [$data, $trilhaid, $cor, $quantidade]);
			
        }catch(Error $e){
			
            $this->reload();  
			
        }
    }

}
