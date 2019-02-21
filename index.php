<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">        
        <title>Desamar</title>
        <?php
        include('includes.php'); // se encarga de incluir las librerías necesarias
        $lang = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        ($lang == 'en') ? include('lang/lang.en') : include('lang/lang.es');
        ?>

    </head>

    <body> 
        <header class="section-container">  
            <div class="header-container"> 
                <h1>  <?= $vocab["titulo_principal"] ?></h1>
                <h3>  <?= $vocab["lema"] ?></h3>
            </div>
            <?php include('header.php'); ?>
        </header>        

        <!------------------------------------ NUESTRA EMPREAS -------------------------------------->
        <section class="section-container">
            <div class="nuestra-empresa">                
                <h2><?= $vocab["titulo_nuestra_empresa"] ?></h2>
                <p> <?= $vocab["contenido_nuestra_empresa"] ?></p>
            </div>
        </section>

        <!------------------------------------ NUESTROS SERVICIOS -------------------------------------->
        <section class="section-container">
            <div class="nuestros-servicios">                
                <h2><?= $vocab["titulo_nuestros_servicios"] ?></h2>
                <div class="row"> 
                    <article class="servicio col-lg-3 col-md-6 col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio">
                                <i class="fas fa-warehouse fa-4x colores"></i>                                
                            </div>                            
                            <h4> <?= $vocab["subtitulo_almacen_fiscal"] ?> </h4>
                            <p> <?= $vocab["contenido_agencia_aduanal"] ?> </p>                           
                        </div>              
                    </article>

                    <article class="servicio col-lg-3 col-md-6  col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio">
                                <i class="fas fa-box-open  fa-4x colores"></i>
                            </div>                            
                            <h4> <?= $vocab["subtitulo_agencia_aduanal"] ?> </h4>
                            <p> <?= $vocab["contenido_agencia_aduanal"] ?> </p>                           
                        </div>              
                    </article>

                    <article class="servicio col-lg-3 col-md-6  col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio">
                                <i class="fas fa-ship fa-4x colores"></i>
                            </div>                            
                            <h4> <?= $vocab["subtitulo_transporte"] ?> </h4>
                            <p> <?= $vocab["contenido_transporte"] ?> </p>                           
                        </div>              
                    </article>

                    <article class="servicio col-lg-3 col-md-6  col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio">
                                <i class="fas fa-lock fa-4x colores"></i>
                            </div>                            
                            <h4> <?= $vocab["subtitulo_seguridad"] ?> </h4>
                            <p> <?= $vocab["contenido_seguridad"] ?> </p>                           
                        </div>              
                    </article>
                </div>
            </div>
        </section>


        <!------------------------------------ ADUANAS -------------------------------------->
        <section class="section-container">
            <div class="nuestras-aduanas ">  
                <h2><?= $vocab["titulo_aduanas"] ?></h2> 
                <div class="row">                     
                    <article class="servicio col-md-6 col-sm-6">     
                        MAPITA
                    </article>

                    <article class="servicio col-md-6 col-sm-6">     
                        <p>  <?= $vocab["contenido_aduanas"] ?>  </p>
                    </article>
                </div>
            </div>
        </section>



        <!------------------------------------ ALIANZAS -------------------------------------->
        <section class="section-container">
            <div class="nuestras-alianzas container">                
                <h2><?= $vocab["titulo_alianzas"] ?></h2> 
                <div class="alianzas row ">  
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 "> 
                        <img src="../desamar/img/siati.png" height="70%">                        
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3  ">  
                        <p>  <?= $vocab["contenido_alianza_siati"] ?>  </p>
                    </div>
                </div>
            </div>
        </section>


        <!------------------------------------ CONTACTO -------------------------------------->
        <section class="section-container container-fluid">
            <div class="nuestro-contacto row"> 
                <div class="col-md-12 col-lg-6 col-sm-12 col-12">                     
                    <h2><?= $vocab["titulo_contactenos"] ?></h2>                    
                    <article class="row">
                        <div class="offset-1 offset-md-1 offset-sm-1 col-2 col-sm-2 col-md-1 col-lg-1">
                            <i class="fas  fa-2x fa-phone-square colores-invertido"></i>
                        </div>
                        <div class="col-9 col-sm-9 col-md-6 col-lg-10">         
                            <h3> <?= $vocab["contacto_telefono"] ?></h3>
                            <p> <?= $vocab["info_telefono"] ?></p>
                        </div>
                    </article>
                    <br>
                    <article class="row">
                        <div class="offset-1 offset-md-1 offset-sm-1 col-2 col-sm-2 col-md-1 col-lg-1  ">
                            <i class="fas fa-envelope fa-2x colores-invertido"></i>
                        </div>
                        <div class="col-9 col-sm-9 col-md-6 col-lg-10">  
                            <h3> <?= $vocab["contacto_correo"] ?></h3>
                            <p> <?= $vocab["info_correo"] ?></p>
                        </div> 
                    </article>
                    <br>
                    <article class="row">
                        <div class="offset-1 offset-md-1 offset-sm-1 col-2 col-sm-2 col-md-1 col-lg-1  ">
                            <i class="fas fa-map-marker-alt fa-2x colores-invertido"></i>
                        </div>
                        <div class="col-9 col-sm-9 col-md-6 col-lg-10">  
                            <h3> <?= $vocab["contacto_ubicacion"] ?></h3>
                            <p> <?= $vocab["info_ubicacion"] ?></p>
                        </div> 
                    </article>

                    <article class="row">
                        <div class="col-11 col-sm-11 col-md-11 col-lg-11 d-flex justify-content-end">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d502354.17798478546!2d-83.95263494999999!3d10.37048155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scr!4v1550770062233" width="200" height="200" frameborder="0" style="border:0 ;    border-radius:250px; padding: 5" allowfullscreen></iframe>
                        </div> 
                    </article>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">  

                </div>
            </div>
        </section>
        <?php include('footer.php'); ?>

        <script src="inc/js/menuSticky.js" type="text/javascript"></script>

    </body>

</html>