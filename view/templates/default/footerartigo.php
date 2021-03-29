
<?php
    $trilhaid = $data[1];
    $cor = $data[2];
    $qtd = $data[3];
    $data = $data[0];
?>
<?php if($data->getUltimo() == 'sim'): ?>
<br><br>
<p><center><button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#disqus" aria-expanded="false" aria-controls="collapseExample">Possui alguma dúvida?</button></center></p><div class="collapse" id="disqus"><div id="disqus_thread" style="margin:20px"></div></div>

<?php endif; ?>
<br/>
<section>
    <div class="container-fluid">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color:rgba(<?php echo $cor?>,0.5); width: <?php echo 100*($data->getNumOrdem()/$qtd)?>%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="row align-items-center">
            <?php if ($data->getUltimo() == 'sim' && $data->getNumOrdem() == 1): ?>
                <div class="col-lg-12" >
                    <a href="../viewTrilha/<?php echo $trilhaid; ?>" class="shadow btn btn-primary btn-block mt-5 js-scroll-trigger degrade">
                        <h4 class="display-6">Voltar para seção</h4>
                    </a>
                </div>
            <?php elseif($data->getUltimo() == 'sim' && $data->getNumOrdem() != 1):?>
                <div class="col-lg-12">
                    <a href="../viewTrilha/<?php echo $trilhaid; ?>" class="shadow btn btn-primary btn-block mt-5 js-scroll-trigger degrade " style="border: none; background :linear-gradient(45deg, rgba(<?php echo $cor; ?>, 0.7) 0%, rgba(<?php $x = explode(',', $cor); echo ($x[0]+100).",".($x[1]+100).",".($x[2]+100); ?>, 0.7) 100%)">
                        <h4 class="display-6">Voltar para seção</h4>
                    </a>
                </div>
                <div class="col-lg-12">
                    <a href="<?php echo $data->getIdAula(); ?>.<?php echo $data->getNumOrdem()-1; ?>" class="shadow btn btn-dark btn-block mt-5 js-scroll-trigger">
                        <h4 class="display-6">Página anterior</h4>
                    </a>
                </div>
            <?php elseif($data->getNumOrdem() == 1): ?>
                <div class="col-lg-12">
                    <a href="<?php echo $data->getIdAula(); ?>.<?php echo $data->getNumOrdem()+1; ?>" class="shadow btn btn-primary btn-block mt-5 js-scroll-trigger" style="border:none; background :linear-gradient(45deg, rgba(<?php echo $cor; ?>, 0.5) 0%, rgba(<?php $x = explode(',', $cor); echo ($x[0]+100).",".($x[1]+100).",".($x[2]+100); ?>, 0.5) 100%)">
                        <h4 class="display-6">Próxima página</h4>
                    </a>
                </div>
                <div class="col-lg-12">
                    <a href="../viewTrilha/<?php echo $trilhaid; ?>" class="shadow btn btn-dark btn-block mt-5 js-scroll-trigger">
                        <h4 class="display-6">Voltar para seção</h4>
                    </a>
                </div>
            <?php else: ?>
                <div class="col-lg-12">
                    <a href="<?php echo $data->getIdAula(); ?>.<?php echo $data->getNumOrdem()+1; ?>" class="shadow btn btn-primary btn-block mt-5 js-scroll-trigger" style="border:none; background :linear-gradient(45deg, rgba(<?php echo $cor; ?>, 0.7) 0%, rgba(<?php $x = explode(',', $cor); echo ($x[0]+100).",".($x[1]+100).",".($x[2]+100); ?>, 0.7) 100%)">
                        <h4 class="display-6">Próxima página</h4>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="../viewTrilha/<?php echo $trilhaid; ?>" class="shadow btn btn-dark btn-block mt-5 js-scroll-trigger">
                        <h4 class="display-6">Voltar para trilha</h4>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="<?php echo $data->getIdAula(); ?>.<?php echo $data->getNumOrdem()-1; ?>" class="shadow btn btn-dark btn-block mt-5 js-scroll-trigger">
                        <h4 class="display-6">Página anterior</h4>
                    </a>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
<br/>
</div>
</div>
<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small" style="font-size:12px !important; font-family:'Computer Modern Italic' !important">
            <br/> Conteúdo por <span class="fancy">CodeQ.</span>
            <br/>
            Eng. Química UFSM
        </p>
    </div>
    <!-- /.container -->
</footer>
</div><!--Essa div fechada está certa-->
</div><!--Essa também-->
<!-- Bootstrap core JavaScript -->
<script>
	var toggle = document.getElementsByClassName("toggle");
	var str, res, test, count = 0, respostas = [],newtest = [], newtoggle = [], bool =false
	vz = toggle.length
	
	$(function(){
		
		if (bool){
			
			<?php for($i = 0; $i < 10; $i++): ?>
			
				var loading = $('#loadbar'+<?php echo $i ?>).hide();
				$(document)
					.ajaxStart(function () {
						loading.show();
					}).ajaxStop(function () {
					loading.hide();
				});
				
				$(".but"+<?php echo $i ?>).on('click',function () {
					var choice = $(this).find('input:radio').val();
					$('#loadbar'+<?php echo $i ?>).show();
					$('#quiz'+<?php echo $i ?>).fadeOut();
					setTimeout(function(){
						$("#answer"+<?php echo $i ?>).html(  $(this).checking(choice,ans,<?php echo $i ?>) );
						$('#explicacao'+<?php echo $i ?>).show();
						$('#loadbar'+<?php echo $i ?>).fadeOut();
					}, 1500);
				});
			<?php endfor;?>
		}
		$.fn.checking = function(ck,ans,cnt) {
			if (ck != ans[cnt])
				return '<h2 style="color: #f03434">Incorreto!</h2><p style="color: dimgrey; font-size:15px;">Não há nenhum problema nisso, errar é aprender.</p>';
			else
				return '<h2 style="color: #00b16a">Correto!</h2><p style="color: dimgrey; font-size:15px;">Veja a explicação para o problema, pode conter detalhes não observados à primeira vista.</p>';
		};
	});
	
	for (i = 0; i < vz; i++) {
		newtoggle.push(toggle.item(i));
	}
	
	vz = newtoggle.length
	var ans=[];
	
	for (i = 0; i < vz; i++) {
		str = (newtoggle[i].innerText);
		str.replace(/\n/ig, '');
		res = str.split(/\n/ig);
		if(res[0].toLowerCase() == 'trinket'){
                    message = ""
                    newtoggle[i].outerHTML = message.concat(res[1]);
		}
		if(res[0].toLowerCase() == 'pergunta'){
			bool = true;
			var newtest = [];
			test = document.createRange().createContextualFragment(newtoggle[i].innerHTML);
			test = test.querySelectorAll("LI")
			for(j = 1; j < test.length; j++){
				newtest.push(test.item(j));
			}
			var resp = newtest[6].innerHTML
			
			newtoggle[i].outerHTML = '<div class="modal-dialog modal-lg mb-3 col-lg-12"> <div class="modal-content col-lg-12 shadow" style="border:none"><div class="modal-header"><h3>Pergunta</h3></div><div class="modal-body"><div style="text-align: justify"><p>'+newtest[0].innerHTML+'</p></div><div id="explicacao'+count+'" style="display: none;"><span id="answer'+count+'" style="text-align: center;"></span><h3>Explicação:</h3><p style="text-align: justify;">'+newtest[5].innerHTML+'</p></div><div class="quiz" id="quiz'+count+'" data-toggle="buttons" style="text-align: left;"><label class="element-animation1 btn btn-lg btn-dark btn-block shadow but'+count+'" style="text-align: left;"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">&nbsp'+newtest[1].innerHTML+'</label><label class="element-animation2 btn btn-lg btn-dark btn-block shadow but'+count+'" style="text-align: left;"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">&nbsp'+newtest[2].innerHTML+'</label><label class="element-animation3 btn btn-lg btn-dark btn-block shadow but'+count+'" style="text-align: left;"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">&nbsp'+newtest[3].innerHTML+'</label><label class="element-animation4 btn btn-lg btn-dark btn-block shadow but'+count+'" style="text-align: left;"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4">&nbsp'+newtest[4].innerHTML+'</label></div></div></div></div>'
							
				if(resp.toLowerCase() == 'a'){
					ans.push(1);
				}
				if(resp.toLowerCase() == 'b'){
					ans.push(2);
				}
				if(resp.toLowerCase() == 'c'){
					ans.push(3);
				}
				if(resp.toLowerCase() == 'd'){
					ans.push(4);
				}
				//console.log(ans[0])
			count = count+1;
			
			delete newtest
		}
                if(res[0].toLowerCase() == 'solucao' || res[0].toLowerCase() == 'solução' || res[0].toLowerCase() == 'resposta' || res[0].toLowerCase() == 'ver resposta'){
			//newtoggle[i].outerHTML = res[1];
                        var solucao, trinkets
                        
                        fullt = document.createRange().createContextualFragment(newtoggle[i].innerHTML).querySelectorAll(".toggle")[0]
                        
						if(typeof (fullt) !== 'undefined'){
							trinkets = fullt.innerText
                                     
							var res2 = []
							res2[0] = trinkets.substring(0,7)
							res2[1] = trinkets.substring(94)
							if(res2[0].toLowerCase() == 'trinket'){
                                                                message = ""
								newtoggle[i+1].outerHTML = message.concat(res2[1]);
							}
						}
						                  
                        solucao = document.createRange().createContextualFragment(newtoggle[i].innerHTML).querySelectorAll("details")[0]
                        solucao.removeChild(solucao.getElementsByTagName('summary')[0])
                                               
                        var botao
                        botao = '<p><button class="btn executar btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Solução</button></p><div class="" id="collapseExample">'+solucao.innerHTML+'</div>'
                        newtoggle[i].outerHTML = botao
		}
	}
	
	var callout = document.getElementsByClassName("callout");
	
	for (i = 0; i < callout.length; i++) {
                console.log(callout.item(i).childNodes[0].childNodes[0].innerText)
		callout.item(i).classList.remove("block-color-purple_background");
		callout.item(i).classList.add("block-color-gray_background");
		if('https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/police-cars-revolving-light_1f6a8.png'==callout.item(i).childNodes[0].childNodes[0].src){
			callout.item(i).classList.add("blinking-red");
		}else if('https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/warning-sign_26a0.png'==callout.item(i).childNodes[0].childNodes[0].src){ 
			callout.item(i).classList.add("blinking-yellow");
						
		}else if('https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/pencil_270f.png'==callout.item(i).childNodes[0].childNodes[0].src){ 
			callout.item(i).setAttribute("style", "border:solid 2px #41403E;border-top-left-radius: 255px 15px;border-top-right-radius: 15px 225px;border-bottom-right-radius: 225px 15px;border-bottom-left-radius:15px 255px;");
			callout.item(i).childNodes[0].setAttribute("style","display: inline-block;float:left")			
		}else if('https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/left-pointing-magnifying-glass_1f50d.png'==callout.item(i).childNodes[0].childNodes[0].src || 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/right-pointing-magnifying-glass_1f50e.png'==callout.item(i).childNodes[0].childNodes[0].src){
			callout.item(i).classList.add("blurry");
                        callout.item(i).classList.add("shadow-sm");
		}else{
			callout.item(i).classList.add("shadow-sm");
		}
                
                if(callout.item(i).childNodes[0].childNodes[0].innerText == '?'){
                    
                    callout.item(i).childNodes[0].childNodes[0].innerHTML = '<img class="icon" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/white-right-pointing-backhand-index_1f449.png">'
                }
	}
	
</script>
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
	$(window).load(function(){
		setTimeout(function(){
			$("#collapseExample").addClass("collapse");
		}, 3000);
	});
  </script>
<script src="<?php echo $this->asset ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php if($data->getUltimo() == 'sim'): ?>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '<?php echo $this->url; ?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo $data->getIdAula(); ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-simulaeq-000webhostapp-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; ?>

</body>

</html>
