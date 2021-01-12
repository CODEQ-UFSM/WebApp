<?php
class TrilhaModel extends Model {

    public function selectAllTrilha(){
        $list = [];
        $sql = "SELECT * FROM trilha";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach($resultados as $linha){
            $list[] = new Trilha($linha['id_trilha'], $linha['nome'], $linha['descricao'], $linha['frase'], $linha['autor'], $linha['imagem'], $linha['cor']);
        }
        return $list;
    }

    public function selectTrilhaById($id){
        $sql = "SELECT * FROM trilha WHERE id_trilha = :id";
        $linha = $this->ExecuteQuery($sql, [':id'=>$id])[0];
        return new Trilha($linha['id_trilha'], $linha['nome'], $linha['descricao'], $linha['frase'], $linha['autor'], $linha['imagem'], $linha['cor']);
    }

}
