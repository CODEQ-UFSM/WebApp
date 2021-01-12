<?php
    $trilhas = $data;

?>
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="p-5">
          <h3 class="display-6 fancy">“Traveling through a maze looks easy from above.”</h3><h5 style="text-align:right">- <span class="bluemarker shadow">Unknown author</span></h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--SEÇÃO REPRODUÇÃO-->
<div class="container">
    <div class="p-5">
        <h3 class="display-5"><span class="bluemarker shadow-lg fancy">Trilhas de aprendizado</span></h3>
    </div>
</div>
<?php foreach($trilhas as $trilha): ?>
    <section>
      <div class="container">
          <div class="card mb-3 shadow">
	      <span style="background-color:rgb(<?php echo $trilha->getCor(); ?>)">
              <img class="card-img-top" src="<?php echo $trilha->getImagem(); ?>" style="height:100px; object-fit: cover;opacity:0.6;filter:grayscale(100%)" alt="Card image cap">
              </span>
		<div class="card-body">
                  <div style="text-align:center;">
                      <h2 class="display-4"><span class="fancy" style=""><?php echo $trilha->getNome(); ?></span></h2>
                  </div>
                  <p class="card-text"><?php echo $trilha->getDescricao(); ?></p>
                  <div class="card-footer">
                      <a href="Explorar/viewTrilha/<?php echo $trilha->getIdTrilha(); ?>"><button style="background: linear-gradient( 45deg, rgb(<?php echo $trilha->getCor(); ?>) 0%, <?php $x = explode(',', $trilha->getCor()); echo "rgb(".($x[0]-100).",".($x[1]-100).",".($x[2]-100).")"; ?> 100%);color:white;border:none;" class="btn btn-lg float-right btn-block fancy">Começar</button></a>
                  </div>
              </div>
          </div>
    </div>
    </section>
<br>
<?php endforeach;?>
<!--FIM SEÇÃO REPRODUÇÃO-->

<section>
  <div class="container">
    <div class="col-lg-12">
      <div style="text-align:left" >
        <a href="index.html" class="shadow btn btn-dark btn-small mt-5 js-scroll-trigger">
          <h4 class="display-6"> <svg class="bi bi-arrow-left-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 0 1 0 .708L5.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
<path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
</svg>Home</h4>
        </a>
      </div>
    </div>
  </div>
</section>
</br>
