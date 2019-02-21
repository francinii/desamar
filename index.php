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
                    <article class="servicio col-md-3 col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio"></div>                            
                            <h4> <?= $vocab["subtitulo_almacen_fiscal"] ?> </h4>
                            <p> <?= $vocab["contenido_agencia_aduanal"] ?> </p>                           
                        </div>              
                    </article>

                    <article class="servicio col-md-3 col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio"></div>                            
                            <h4> <?= $vocab["subtitulo_agencia_aduanal"] ?> </h4>
                            <p> <?= $vocab["contenido_agencia_aduanal"] ?> </p>                           
                        </div>              
                    </article>

                    <article class="servicio col-md-3 col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio"></div>                            
                            <h4> <?= $vocab["subtitulo_transporte"] ?> </h4>
                            <p> <?= $vocab["contenido_transporte"] ?> </p>                           
                        </div>              
                    </article>

                    <article class="servicio col-md-3 col-sm-6">    
                        <div class="borde">
                            <div class="img-servicio"></div>                            
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



        <!------------------------------------ ADUANAS -------------------------------------->
        <section class="section-container">
            <div class="nuestras-alianzas">                
                <h2><?= $vocab["titulo_alianzas"] ?></h2>           
            </div>
        </section>


        <section style="height: 500px; background: white;">
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <i class="fab fa-facebook fa-5x colores" id  = "">&nbsp;</i>
            <i class="fab fa-twitter fa-5x colores">&nbsp;</i>
            <i class="fab fa-linkedin fa-5x colores">&nbsp; </i><br><br>
            &nbsp; &nbsp; &nbsp;  <i class="fas fa-ship fa-7x colores"> &nbsp;  </i>
            <br><br><br>
            &nbsp; &nbsp; &nbsp;   <i class="fas fa-lock fa-7x colores"></i><br><br>
            <br><br><br>
            &nbsp; &nbsp; &nbsp;  <i class="fas fa-box-open  fa-7x colores"></i><br><br>
            &nbsp; &nbsp; &nbsp;  <i class="fas fa-warehouse fa-7x colores"></i><br>


        </section>
        <!----------------------------------- FIN ELEMENTOS DE USO COMUN EN BOOTSTRAP ----------------------------------->
        <section style="height: 500px; background: white;">
            <div style="position: relative;">
                <div style="position: absolute; left: 40px; top: 40px; background-color: blue;"> CUADRO 1 </div>
                <div style="position: absolute; left: 80px; top: 90px; background-color: red;"> CUADRO 2 </div>
            </div>
        </section>

        <?php include('footer.php'); ?>

        <script src="inc/js/menuSticky.js" type="text/javascript"></script>

    </body>

</html>