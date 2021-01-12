<?php
class AulaModel extends Model {

    public function selectAllAula(){
        $list = [];
        $sql = "SELECT * FROM aula";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach($resultados as $linha){
            $list[] = new Aula($linha['id_aula'], $linha['id_secao'], $linha['nome'],$linha['descricao'], $linha['data'], $linha['imagem']);
        }
        return $list;
    }
    
    public function selectAulaById($id){
        $sql = "SELECT * FROM aula WHERE id_aula = :id";
        $linha = $this->ExecuteQuery($sql, [':id'=>$id])[0];
        return new Aula($linha['id_aula'], $linha['id_secao'], $linha['nome'],$linha['descricao'], $linha['data'], $linha['imagem']);
    }

    public function selectAulaByTrilhaId($id){
        $list = [];
        $sql = "SELECT aula.id_aula, aula.id_secao, aula.nome, aula.descricao, aula.data, aula.imagem FROM aula JOIN secao ON secao.id_secao = aula.id_secao WHERE secao.id_trilha = :id";
        $resultados = $this->ExecuteQuery($sql, [':id'=>$id]);
        foreach($resultados as $linha){
            $list[] = new Aula($linha['id_aula'], $linha['id_secao'], $linha['nome'],$linha['descricao'], $linha['data'], $linha['imagem']);
        }
        return $list;
    }

    public function selectAulaByPaginaId($id_aula, $num_ordem){
		
		$sql = "SELECT * FROM pagina WHERE id_aula = ".$id_aula." AND num_ordem = ".$num_ordem;
		$linha = $this->ExecuteQuery($sql, array())[0];
		if(!isset($linha)) return 'bug';
		return new Pagina($linha['id_pagina'], $linha['id_aula'], $linha['num_ordem'],$linha['html'],'nao');	
        $this->view->load('footerartigo', [$data, $trilhaid, $cor, $quantidade]);
    }
	

    public function selectSecaoIdByPaginaId($id){
        $sql = "SELECT aula.id_secao FROM aula INNER JOIN pagina ON pagina.id_aula=aula.id_aula WHERE pagina.id_pagina = :id";
        $resultados = $this->ExecuteQuery($sql, [':id'=>$id])[0];
        return $resultados['id_secao'];
    }
    
    public function selectTrilhaIdCorByPaginaId($id){
        $sql = "SELECT secao.id_trilha, trilha.cor FROM secao INNER JOIN trilha on trilha.id_trilha = secao.id_trilha INNER JOIN aula on aula.id_secao = secao.id_secao INNER JOIN pagina ON pagina.id_aula=aula.id_aula WHERE pagina.id_pagina = :id";
        
        $resultados = $this->ExecuteQuery($sql, [':id'=>$id])[0];
        
        return [$resultados['id_trilha'], $resultados['cor']];
    }
	
	public function getNames($id_aula){
				
		$sql = "SELECT  SUBSTRING(html, 1, 100) as sbstr FROM pagina WHERE id_aula = :id ORDER BY num_ordem";
		$resultados = $this->ExecuteQuery($sql, [':id'=>$id_aula]);
		
		foreach($resultados as $linha){
			//$data = $linha['sbstr']; // your HTML data from the question
			//preg_match( '/<h1 class="\page-title\">(.*?)<\/h1>/', $data, $match);
            //$list[] = $match[1];
            $data = strip_tags($linha['sbstr']);
            $list[] = $data;
        }
		
		return $list;
		
	}
    
    public function getQuantidade($id){
        $sql = "SELECT count(*) FROM pagina WHERE id_aula = :id";
        $resultados = $this->ExecuteQuery($sql, [':id'=>$id])[0];
        $resultado = intval($resultados['count(*)']);
        return $resultado;
    }



}
