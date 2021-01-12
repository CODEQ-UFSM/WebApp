<?php
    $cor = $data[1];
    $id = $data[2];
    $nome = $data[3];
    $qtd = $data[4];
	$pag = $data[5];
    $data = $data[0];
?>

<div class="d-flex toggled" id="wrapper" style="width: 100%">
<!-- Sidebar -->
    <div class="bg-light" id="sidebar-wrapper">
      <div class="sidebar-heading fancy highlight-purple" style="text-align:left;" ><b><?php echo $nome ?></b></div>
      <div class="list-group list-group-flush" style="font-family:'Computer Modern Article' !important; text-align:left">
        <?php $i=0; foreach($pag as $nome): ?>
		<?php ++$i; ?>
        <a href="<?php echo $data->getIdAula(); ?>.<?php echo $i; ?>" class="list-group-item list-group-item-action bg-light <?php if($i == $data->getNumOrdem()):echo 'highlight-purple';endif; ?>"><b><?php echo $nome; ?></b></a>
        <?php endforeach; ?>
      </div>
    </div>
<!-- /#sidebar-wrapper -->
<div id="page-content-wrapper">
    <div class="container" id="arct">
        <div class="col-lg-12 align-items-center" style="margin-top: 10px">
            <button class="btn btn-default" id="menu-toggle" style="margin-bottom: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"viewBox="0 0 172 172"style=" fill:#000000;">
                    <defs>
                        <linearGradient x1="43.2365" y1="0.2365" x2="125.02608" y2="82.02608" gradientUnits="userSpaceOnUse" id="color-1_Rdp3AydLFY2A_gr1">
                            <stop offset="0.237" stop-color="rgb(<?php echo $cor?>)"></stop>
                            <stop offset="0.85" stop-color="rgb(<?php $x = explode(',', $cor); echo ($x[0]-50).",".($x[1]-50).",".($x[2]-50); ?>)"></stop>
                        </linearGradient>
                        <linearGradient x1="43.2365" y1="43.2365" x2="125.02608" y2="125.02608" gradientUnits="userSpaceOnUse" id="color-2_Rdp3AydLFY2A_gr2">
                            <stop offset="0.237" stop-color="rgb(<?php echo $cor?>)"></stop>
                            <stop offset="0.85" stop-color="rgb(<?php $x = explode(',', $cor); echo ($x[0]-50).",".($x[1]-50).",".($x[2]-50); ?>)"></stop>
                        </linearGradient>
                        <linearGradient x1="43.2365" y1="86.2365" x2="125.02608" y2="168.02608" gradientUnits="userSpaceOnUse" id="color-3_Rdp3AydLFY2A_gr3">
                            <stop offset="0.237" stop-color="rgb(<?php echo $cor?>)"></stop>
                            <stop offset="0.85" stop-color="rgb(<?php $x = explode(',', $cor); echo ($x[0]-50).",".($x[1]-50).",".($x[2]-50); ?>)"></stop>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M154.08333,53.75h-136.16667c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h136.16667c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-1_Rdp3AydLFY2A_gr1)"></path><path d="M154.08333,96.75h-136.16667c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h136.16667c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-2_Rdp3AydLFY2A_gr2)"></path><path d="M154.08333,139.75h-136.16667c-3.94167,0 -7.16667,-3.225 -7.16667,-7.16667v-7.16667c0,-3.94167 3.225,-7.16667 7.16667,-7.16667h136.16667c3.94167,0 7.16667,3.225 7.16667,7.16667v7.16667c0,3.94167 -3.225,7.16667 -7.16667,7.16667z" fill="url(#color-3_Rdp3AydLFY2A_gr3)"></path></g></g></svg>
            </button> 
            
            <?php echo $data->getHtml(); ?>
        