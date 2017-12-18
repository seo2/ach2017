<?
/*

Template name: Home

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>  
	<section class="main_content">
    	<div class="container">
<?php wp_reset_query(); ?>	
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "Subscribe here";
	$tit2 = "Photo Gallery";
	$tit3 = "HIGHLIGHTS";
	$btn1 = "View all our stores";
	$btn2 = "View more";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Inscreva-se";
	$tit2 = "Galeria";
	$tit3 = "DESTACADOS";
	$btn1 = "Veja todas as nossas lojas";
	$btn2 = "Veja mais";
}else{ 
	$tit1 = "Inscríbete";
	$tit2 = "Galería";
	$tit3 = "destacados";
	$btn1 = "ver todas las tiendas";
	$btn2 = "ver más";
} ?>      	
<?php	                                         
    $args = array(
		'post_type' => array('home')
    );
	$the_query = new WP_Query ($args);
    $i = 0;
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    	$i++;
?>	
        	<div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('distrito_de_lujo_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	                        
                          <div class="item">
                              <a href="<?php bloginfo('url'); ?>/tiendas#tiendas">
	                            <?php if($e==1){ ?>
                                   <div class="caption tiendas">
                                      <p>NUESTRAS </p>
                                       <h3>TIENDAS </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('distrito_de_lujo_imagen_slider',$slider); ?>);"> </div>
                              </a>
                          </div>
                        <?php } ?>
                          
                      </div><!-- box slider  -->
                  </div> <!-- slider distrito -->
              </div> 

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                      <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('piso_de_diseno_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                           <div class="item">
                               <a href="<?php bloginfo('url'); ?>/food-court-tiendas/#tiendas">
	                            <?php if($e==1){ ?>
                                   <div class="caption foodcourt">
                                      <p>NUESTRA VARIEDAD </p>
                                       <h3>Patio de Comidas </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('piso_de_diseno_imagen_slider',$slider); ?>);"> </div>              
                               </a>
                            </div> <!-- item -->
                        <?php } ?>
                       </div><!-- box slider  -->
                   </div>
              </div> <!-- piso diseño -->
                
              <div class="col-sm-12">
                    <!-- NOVEDADES -->
                    <div class="box_horizontal">
                       <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('slider_medio_imagen_desktop');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                         <div class="item">
                            <div class="img_slide hidden-xs hidden-sm"  style="background: url(<?php echo get('slider_medio_imagen_desktop',$slider); ?>);"> </div>
                            <!-- 700 x 400px -->
                            <div class="img_slide visible-xs visible-sm"  style="background: url(<?php echo get('slider_medio_imagen_mobile',$slider); ?>);"> </div> 
				  			<div class="caption">
					  			<?php if(get('slider_medio_texto_1',$slider)){ ?>
                               	<h3><?php echo get('slider_medio_texto_1',$slider); ?></h3>
                               	<?php } ?>
					  			<?php if(get('slider_medio_texto_2',$slider)){ ?>
                               	<h4 class="divider"><?php echo get('slider_medio_texto_2',$slider); ?></h4>
                               	<?php } ?>
					  			<?php if(get('slider_medio_texto_3',$slider)){ ?>
                               	<p><?php echo get('slider_medio_texto_3',$slider); ?></p>
                               	<?php } ?>
					  			<?php if(get('slider_medio_link',$slider)){ ?>
							   	<div class="text-center">
                               		<a href="<?php echo get('slider_medio_link',$slider); ?>" class="btn btn-default btn_blanco"  role="button"><?php echo $btn2; ?></a>
                               	</div>
                               	<?php } ?>
                            </div>
                         </div><!-- item -->
                        <?php } ?>
                      </div>
                    </div><!-- box horizontal -->
              </div>

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                         <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('travellers_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                              <div class="item">
                                  <a href="https://s219687.gridserver.com/clientes/bond/ach2017/novedades-galeria/#galerias">                                   
	                            <?php if($e==1){ ?>
                                   <div class="caption galeria">
                                      <p>NUESTRA </p>
                                       <h3>GALERÍA </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('travellers_imagen_slider',$slider); ?>);"> </div>                       
                                  </a>
                               </div>
                        <?php } ?>
                          </div><!-- box slider  -->
                   </div><!-- travellers -->
              </div>

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('boulevard_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>  
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/novedades/#entretencion">     
	                            <?php if($e==1){ ?>
                                       <div class="caption entretencion">
                                          <p></p>
                                           <h3>ENTRETENCIÓN </h3>
                                           <div class="divider"> </div>
                                       </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('boulevard_imagen_slider',$slider); ?>);"> </div>                       
                                  </a>
                               </div> <!-- item -->
                        <?php } ?>
                        </div><!-- box slider  -->
                 </div>
              </div> <!-- slider zona boulevard -->
                
            </div> <!-- row -->
<?php endwhile; else: ?>
<?php endif; ?>


  <div class="modal_overlay" data-url="<?php bloginfo('url') ?>" data-template="<?php bloginfo('template_url') ?>" style="display:none;">
        <div class="box_modal">
			<a href="javascript:(0);" class="close_modal"></a>

            <div class="header_modal">
                <div class="row">
                    <div class="col-9">
                      <div class="img_mall"> </div>
                    </div>
                     <div class="col-3">
                      <div class="logo"> </div>
                    </div>
                </div><!--

                <div class="row hidden-xs">
                    <div class="col-12">
                      <div class="img_mall2"> </div>
                    </div>
                </div>
-->
           
                  <h2 class="title_modal">Suscríbete y sé el primero en enterarte de nuestras novedades</h2>
                </div>
           
            <div class="box_form">
      
                <form id="formModal" action="<?php bloginfo('template_directory') ?>/ajax/grabamodal.php">
                    <div class="row">
						<div class="col-6">
                        	<div class="form-group">
                            	<label for="exampleInputEmail1">Nombres:</label>
								<input type="text" class="form-control" id="modNom" placeholder="Ingreso de datos" name="modNom" required>
                        	</div>
                      	</div>
					  	<div class="col-6">
                        	<div class="form-group">
								<label for="exampleInputEmail1">Apellidos:</label>
								<input type="text" class="form-control" id="modApe" placeholder="Ingreso de datos" name="modApe" required>
                        	</div>
                      	</div>

						<div class="col-6">
                        	<div class="form-group">
								<label for="exampleInputEmail1">RUT/DNI/Pasaporte</label>
								<input type="text" class="form-control" id="modRut" placeholder="Ingreso de datos" name="modRut" required>
                    		</div>
						</div>

						<div class="col-6">
                        	<div class="form-group">
								<label for="exampleInputEmail1">correo electrónico:</label>
								<input type="email" class="form-control" id="modMail" placeholder="Ingreso de datos" name="modMail" required>
                    		</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Comuna:</label>
								<select class="form-control" name="modCom" id="modCom" required>
									<option value="">Seleccione</option>
									<?php
									$regiones = get_comunas(8);
									foreach($regiones as $r){	
									?>
									<option value="<?= $r->comuna_nombre; ?>" ><?= $r->comuna_nombre; ?></option>	
									<?php 
									}  
									?>
								</select>
							</div>
						</div>
                    </div>
                   
                   <div class="checkbox center-block">
                   		<label>
                       		<input type="checkbox" id="acepto"> Estoy de acuerdo con los <a href="<?php bloginfo('template_url');?>/assets_modal/TerminosyCondicionesNewsletter_ACH.pdf" target="_blank">términos y condiciones</a>
						</label>
                   </div>
                   <button type="submit" class="btn btn-default btn_rojo center-block">Enviar</button>
                 </form>
            </div><!-- box_form -->
          
        </div><!-- box_modal -->
  </div><!-- modal overlay -->
<?php include('footer.php') ?>

