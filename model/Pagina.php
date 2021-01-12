<?php

class Pagina{
    public $id_pagina;
    public $id_aula;
    public $num_ordem;
    public $html;
    public $ultimo;

    public function __construct($id_pagina, $id_aula, $num_ordem, $html, $ultimo)
    {
        $this->id_pagina = $id_pagina;
        $this->id_aula = $id_aula;
        $this->num_ordem = $num_ordem;
        $this->html = $html;
        $this->ultimo = $ultimo;
    }

    /**
     * @return mixed
     */
    public function getIdPagina()
    {
        return $this->id_pagina;
    }

    public function getUltimo()
    {
        return $this->ultimo;
    }

    /**
     * @param mixed $id_pagina
     */
    public function setIdPagina($id_pagina)
    {
        $this->id_pagina = $id_pagina;
    }

    /**
     * @return mixed
     */
    public function getIdAula()
    {
        return $this->id_aula;
    }

    /**
     * @param mixed $id_aula
     */
    public function setIdAula($id_aula)
    {
        $this->id_aula = $id_aula;
    }

    /**
     * @return mixed
     */
    public function getNumOrdem()
    {
        return $this->num_ordem;
    }

    /**
     * @param mixed $num_ordem
     */
    public function setNumOrdem($num_ordem)
    {
        $this->num_ordem = $num_ordem;
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param mixed $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }
    
    public function setUltimo($ultimo)
    {
        $this->ultimo = $ultimo;
    }

}
