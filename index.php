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

        <?php //include('headerResponsive.php'); ?>

        <!--  INICIO DEL CARRUSEL-->

        <section id ="inicio" class="section-container ">


            <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-interval="5000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>



                <div class="carousel-inner">
                    <div class="carousel-item active portada1">
                        <div class="carousel-caption d-none d-md-block mask pattern-8 pantalla-1-Carrusel">
                            <h2 class="tituloCarrusel aniview animated bounceInDown"><?= $vocab["carrusel_titulo"] ?></h2>
                            <p class="textoCarrusel aniview animated bounceInUp"> <?= $vocab["sliderUno"] ?>
                                <span class="textoCarrusel textoAzul"><?= $vocab["sliderUnoSatiscaccion"] ?> </span>
                                <?= $vocab["sliderUnoImpulso"] ?>
                            </p>                           
                        </div>
                    </div>

                    <div class="carousel-item portada2">
                        <div class="carousel-caption d-none d-md-block pantalla-2-Carrusel">
                            <h2 class="textoCarrusel aniview animated bounceInLeft"><?= $vocab["sliderDos"] ?>
                                <span class="textoCarrusel textoAzul"> <?= $vocab["sliderDosRecurso"] ?> </span>
                                <?= $vocab["sliderDosDisposicion"] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="carousel-item portada3">
                        <div class="carousel-caption d-none d-md-block pantalla-3-Carrusel">
                            <h2 class="textoCarrusel aniview animated bounceInRight"> <?= $vocab["sliderTres"] ?>
                                <span class="textoCarrusel textoAzul"> <?= $vocab["sliderTresexperiencia"] ?> </span>

                            </h2>
                        </div>
                    </div>
                </div>



            </div>

            <?php include('header.php'); ?>
        </section>
        <!--  FINAL DEL CARRUSEL-->

        <!------------------------------------ NUESTRA EMPRESAS -------------------------------------->
        <section id ="acerca" class="section-container">
            <div class="nuestra-empresa">                
                <h2><?= $vocab["titulo_nuestra_empresa"] ?></h2>
                <p> <?= $vocab["contenido_nuestra_empresa"] ?></p>
            </div>

            <div id ="valores"  class="section-container container-fluid">
                <div class="nuestro-valor row">
                    <div class="contenedorValores col-lg-3 col-md-6 col-sm-12">
                        <h1 id="comprimiso"> <?= $vocab["valorUno"] ?> </h1>
                    </div>    

                    <div class="contenedorValores col-lg-3 col-md-6 col-sm-12">
                        <h1 id="confianza"> <?= $vocab["valorDos"] ?>  </h1>
                    </div> 

                    <div class="contenedorValores col-lg-3 col-md-6 col-sm-12">
                        <h1 id="liderazgo"> <?= $vocab["valorTres"] ?>  </h1>
                    </div> 

                    <div class="contenedorValores col-lg-3 col-md-6 col-sm-12">
                        <h1 id="calidad">  <?= $vocab["valorCuatro"] ?> </h1>
                    </div> 

                </div>
            </div>

        </section>


        <!------------------------------------ NUESTROS VALORES -------------------------------------->



        <!------------------------------------ NUESTROS SERVICIOS -------------------------------------->
        <section id ="servicios"  class="section-container">
            <div class="nuestros-servicios">                
                <h2><?= $vocab["titulo_nuestros_servicios"] ?></h2>
                <div class="row"> 
                    <article class="servicio col-lg-3 col-md-6 col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio">
                                <i class="fas fa-warehouse fa-4x colores"></i>                                
                            </div>                            
                            <h4> <?= $vocab["subtitulo_almacen_fiscal"] ?> </h4>
                            <p> <?= $vocab["contenido_almacen_fiscal"] ?> </p>                           
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
        <section id ="aduanas" class="section-container  ">
            <div class="parallax"> 
                <div class="nuestras-aduanas   ">  
                    <h2><?= $vocab["titulo_aduanas"] ?></h2> 


                    <div class="row">  
                        <div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#costaRica-map').JSMaps({
                                        map: 'costaRica'
                                    });
                                });
                            </script>
                        </div>            
                        <div class="container containermap ">                        
                            <div class="jsmaps-wrapper" id="costaRica-map"></div>                      
                        </div>
                    </div>



                </div>
            </div>
        </section>



        <!------------------------------------ ALIANZAS -------------------------------------->
        <section id ="alianzas"  class="section-container">
            <div class="nuestras-alianzas container"> 
                <div class="row">  

                    <div class="linea">&nbsp;</div>
                    <div class="leyenda h2">Dirección en Miami</div>
                    <div class="linea">&nbsp;</div>

                </div>    

                <div class="alianzas row ">  
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 "> 
                        <img src="../desamar/img/siati.png" height="50%">                        
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3  ">  
                        <p>  <?= $vocab["contenido_alianza_siati"] ?>  </p>
                    </div>
                </div>
            </div>
        </section>


        <!------------------------------------ CONTACTO -------------------------------------->
        <section id ="contactenos"  class="section-container container-fluid">
            <div class="nuestro-contacto row"> 
                <div class="col-md-12 col-lg-6 col-sm-12 col-12">                     
                    <h2><?= $vocab["titulo_contactenos"] ?></h2>                    
                    <article class="row">
                        <div class="offset-1 offset-md-1 offset-sm-1 col-2 col-sm-2 col-md-1 col-lg-1">
                            <i class="fas  fa-2x fa-phone-square colores-invertido"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-6 col-lg-10">         
                            <h3> <?= $vocab["contacto_telefono"] ?></h3>
                            <p> <?= $vocab["info_telefono"] ?></p>
                        </div>
                    </article>
                    <br>
                    <article class="row">
                        <div class="offset-1 offset-md-1 offset-sm-1 col-2 col-sm-2 col-md-1 col-lg-1  ">
                            <i class="fas fa-envelope fa-2x colores-invertido"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-6 col-lg-10">  
                            <h3> <?= $vocab["contacto_correo"] ?></h3>
                            <p> <?= $vocab["info_correo"] ?></p>
                        </div> 
                    </article>
                    <br>
                    <article class="row">
                        <div class="offset-1 offset-md-1 offset-sm-1 col-2 col-sm-2 col-md-1 col-lg-1  ">
                            <i class="fas fa-map-marker-alt fa-2x colores-invertido"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-6 col-lg-10">  
                            <h3> <?= $vocab["contacto_ubicacion"] ?></h3>
                            <p> <?= $vocab["info_ubicacion"] ?></p>
                        </div> 
                    </article>

                    <article class="row">
                        <div class="col-11 col-sm-11 col-md-11 col-lg-11 d-flex justify-content-end">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d502354.17798478546!2d-83.95263494999999!3d10.37048155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scr!4v1550770062233" width="200" height="200" frameborder="0" style="border:0 ;    border-radius:250px; padding: 5" allowfullscreen></iframe>
                        </div> 
                    </article>

                    <article class="row">
                        <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-start">
                            <img class="foterLogo" src="../desamar/img/logoBlanco.png" height="75px">  
                        </div>  
                        <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-start">
                            <img class="foterLogo" src="../desamar/img/alatrans.png" height="85px">
                        </div> 
                    </article>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">  
                    <h2><?= $vocab["titulo_formularioContacto"] ?></h2> 
                    <div id="divFormulario">
                        <form action="lib/mail.php" method="post">

                            <input type="text" class="form-control" name="nombre" placeholder=" Nombre y apellido" required=""><br>
                            <input type="mail" class="form-control" name="correo" placeholder=" Correo electrónico" required=""><br>
                            <input type="text" class="form-control" name="telefono" placeholder=" Teléfono" required=""><br>
                            <textarea id="mensaje" name="mensaje" class="form-control" placeholder=" Escribe tu mensaje aquí..." required=""></textarea><br><br><br>

                            <div class="row btnContacto">
                                <input  id="btnEnviar" type="submit" class="pointer" value="Enviar" /><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include('footer.php'); ?>

        <script src="inc/js/menuSticky.js" type="text/javascript"></script>

    </body>

</html>

