<?php
$aulas = $data[1];
$secoes = $data[2];
$data = $data[0];
?>
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="p-5">
          <h3 class="display-6 fancy"><?php echo $data->getFrase(); ?></h3><h5 style="text-align:right">- <span class="shadow" style="background: rgba(<?php echo $data->getCor(); ?>,0.5)"><?php echo $data->getAutor(); ?></span></h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--SEÇÃO REPRODUÇÃO-->
<section>
    <div class="container">
        <?php foreach($secoes as $secao): ?>
        <div class="p-5">
            <h2 class="display-4"><span class="shadow-lg fancy" style="background: rgba(<?php echo $data->getCor(); ?>,0.5)"><?php echo $secao->getNome(); ?></span></h2>
        </div>
        <div class="row row-scroll">
            <?php foreach ($aulas as $aula): ?>
            <?php if($aula->getId_secao() == $secao->getId()): ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card shadow fancy_card">
                    <img class="card-img-top" style="height:100px; object-fit: cover;filter:grayscale(100%)" src="<?php echo $aula->getImagem(); ?>">
                    <div class="card-block">
                        <h4 class="card-title mt-3 fancy"><?php echo $aula->getNome(); ?></h4>
                        <div class="card-text">
                            <?php //echo substr($aula->getDescricao(),0,150); if($aula->getDescricao() != null){echo "...";} ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../viewAula/<?php echo $aula->getId(); ?>.1"><button style="background: linear-gradient( 45deg, rgb(<?php echo $data->getCor(); ?>) 0%, <?php $x = explode(',', $data->getCor()); echo "rgb(".($x[0]-100).",".($x[1]-100).",".($x[2]-100).")"; ?> 100%);color:white;border:none;margin-bottom: 10px !important;" class="btn float-right btn-block">Começar</button></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section>
  <div class="container">
    <div class="col-lg-12">
      <div style="text-align:left" >
        <a href="<?php echo $this->base_url ?>Explorar" class="shadow btn btn-dark btn-small mt-5 js-scroll-trigger">
          <h4 class="display-6"> <svg class="bi bi-arrow-left-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 0 1 0 .708L5.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
<path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
</svg>Explore</h4>
        </a>
      </div>
    </div>
  </div>
</section>
</br>

