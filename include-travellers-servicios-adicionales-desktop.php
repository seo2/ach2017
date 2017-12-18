<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv1box">
          <a href="javascript:void(0);" class="borde_verde"  data-toggle="collapse" data-target="#content_fotoescrito">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/FOTOESCRITO.svg"  class="center-block">
            <!--   <p><?php echo $serv1; ?></p> -->
                  <p>Fotoescrito</p>
          </a>
        </div>
        <div class="box_more_info">
          <a  data-toggle="collapse" data-target="#content_fotoescrito" ><?php echo $btn1; ?></a>
        </div>
    </div>


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv2box">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#content_buses">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/BUSES.svg"   class="center-block">
              <p>Servicio de buses</p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_buses" ><?php echo $btn1; ?></a>
          </div>
    </div>


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv3box">
          <a href="javascript:void(0);" class="borde_naranja" data-toggle="collapse" data-target="#content_fatima">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/LLAVES.svg"  class="center-block">
              <p>Llaves Fátima</p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_agencia" ><?php echo $btn1; ?></a>
          </div>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_amarillo" data-toggle="collapse" data-target="#content_super">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/SUPERMERCADO.svg"  class="center-block">
              <p>Supermercado</p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_super" ><?php echo $btn1; ?></a>
        </div>
    </div>



    <div id="content_fotoescrito" class="content_servicio collapse">
		<div id="content_fotoescritoancla" class="anclita"></div>
		<div class="container">
			<h4 class="divider verde">Fotoescrito</h4>
			<div class="close_servicio" data-target="#serv2"> </div>
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<div class="img_servicio"  style="background: url(<?php bloginfo('template_url'); ?>/assets/img/Fotoescrito.jpg);"></div>
				</div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<p>Lugar donde puedes realizar tus impresiones y sacar las fotocopias que necesitas. Te esperamos!<br>Módulo 603</p>
						<p>Teléfono: +56.42239768</p>
						<a href="mailto:fotoescrito@hotmail.com" target="_blank">Enviar E-mail</a>
            		</div>
		    	</div>
			</div>
		</div>
	</div><!-- casas de cambio -->


    <div id="content_buses" class="content_servicio collapse">
    	<div id="content_busesancla" class="anclita"></div>
    	<div class="container">
        	<h4 class="divider verde">Farmacias</h4>
			<div class="close_servicio" data-target="#serv1"></div>
			<div class="row">
            	<div class="col-md-6 col-md-push-6">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/linea_azul.jpg" alt="" width="70" height="45">
                        </div>
                 <div class="desc_servicio">

				 	<p>Hoy, con más de 40 años de existencia, Buses Línea Azul se encuentra presente en las principales ciudades desde Viña del Mar hasta Puerto Montt, brindando servicios con una moderna flota de buses que hacen que cada una de las más de 200 salidas diarias sean cómodas y seguras experiencias de viaje.</p>
                     <p>Tel.: 042-2237484 | Módulo 618 </p>
                <a href="http://www.buseslineazul.cl/" target="_blank" class="url_agencia">www.buseslineazul.cl</a>
                     <a href="mailto:raul.rivas@linezazul.cl" target="_blank" class="url_agencia">Enviar E-mail</a>
            	</div>
               </div>

				<div class="col-md-6 col-md-pull-6 ">
                    <div class="head_agencia">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/TURBUS.jpg" alt="" width="70" height="45">
                    </div>
                    <div class="desc_servicio">
                     <p>Empresa que ofrece servicios de traslado de pasajeros, carga y servicios adicionales.</p>
                     <p>Tel.: +56.422205710 | Local 414 </p>
                     <a href="http://www.turbus.cl/" target="_blank" class="url_agencia">www.turbus.cl</a>
                     <a href="mailto:tbriones@turbus.cl" target="_blank" class="url_agencia">Enviar E-mail</a>

                    </div>
            	</div>
            </div>
          <!--   <h4 class="divider verde"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $tit3; ?></h4> -->
             <!-- row -->
		</div> <!-- container -->
	</div> <!-- content transfer -->
	
    <div id="content_fatima" class="content_servicio collapse">
		<div id="content_fatimaancla" class="anclita"></div>
		<div class="container">
			<h4 class="divider naranja">Llaves Fátima</h4>
			<div class="close_servicio" data-target="#serv3"> </div>
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<div class="img_servicio"  style="background: url(<?php bloginfo('template_url'); ?>/assets/img/Llaves-Fatima.jpg);"></div>
				</div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<p>En Llaves Fátima puedes resolver trámites desde sacarle copia a una Llave hasta encontrar productos asociados a la cerrajería.<br>Módulo 605 </p>
						<p>Teléfono: 77778948 </p>
						<a href="mailto:kako.m.campos@gmail.com" target="_blank">Enviar E-mail</a>
            		</div>
		    	</div>
			</div>
		</div>
	</div><!-- casas de cambio -->

    <div id="content_super" class="content_servicio collapse">
		<div id="content_superancla" class="anclita"></div>
		<div class="container">
			<h4 class="divider amarillo">Santa Isabel</h4>
			<div class="close_servicio" data-target="#serv4"> </div>
			<div class="row">
				<div class="col-md-6 col-md-push-6">
<!-- 					<div class="img_servicio"  style="background: url(<?php bloginfo('template_url'); ?>/assets/img/Llaves-Fatima.jpg);"></div> -->
				</div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<p>Nos especializamos en brindar más y mejores promociones a todos nuestros clientes, pero sin descuidar nuestra esencia: ser un supermercado familiar, amable y cercano a tus necesidades.</p>
						<p>Teléfono: +56 4 2222 0080 | Local B</p>
            		</div>
		    	</div>
			</div>
		</div>
	</div><!-- casas de cambio -->



	</div>
</div>








