<?php
class SecaoModel extends Model {

    public function selectAllSecao(){
        $list = [];
        $sql = "SELECT * FROM secao";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach($resultados as $linha){
            $list[] = new Secao($linha['id_secao'], $linha['id_trilha'], $linha['nome'], $linha['descricao']);
        }
        return $list;
    }

    public function selectSecaoById($id){
        $sql = "SELECT * FROM secao WHERE id_secao = :id";
        $linha = $this->ExecuteQuery($sql, [':id'=>$id])[0];
        return new Secao($linha['id_secao'], $linha['id_trilha'], $linha['nome'], $linha['descricao']);
    }

    public function selectSecaoByTrilhaId($id){
        $list = [];
        $sql = "SELECT * FROM secao WHERE id_trilha = :id";
        $resultados = $this->ExecuteQuery($sql, [':id'=>$id]);
        foreach($resultados as $linha){
            $list[] = new Secao($linha['id_secao'], $linha['id_trilha'], $linha['nome'], $linha['descricao']);
        }
        return $list;
    }

}
