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
            </div>
            <?php include('header.php'); ?> 
        </header>        

        <section class="section-container container-grid">
            <article class="card">
                <div class="card-picture">
                    <img src="img/conan4.png" alt="Card picture">
                </div>
                <p>
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.”
                </p>
            </article>
            <article class="card">
                <div class="card-picture">
                    <img src="img/conan1.gif" alt="Card picture">
                </div>
                <p>t, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis,consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis,
                </p>
            </article>
            <article class="card">
                <div class="card-picture">
                    <img src="img/conan1.gif" alt="Card picture">
                </div>
                <p>t, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis,
                </p>
            </article>
            <article class="card">
                <div class="card-picture">
                    <img src="img/conan1.gif" alt="Card picture">
                </div>
                <p>t, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis,
                </p>
            </article>
            <article class="card">
                <div class="card-picture">
                    <img src="img/conan1.gif" alt="Card picture">
                </div>
                <p>t, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis,
                </p>
            </article>
            <article class="card">
                <div class="card-picture">
                    <img src="img/conan1.gif" alt="Card picture">
                </div>
                <p>t, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis,
                </p>
            </article>
        </section>

        <!------------------------------------ ELEMENTOS DE USO COMUN EN BOOTSTRAP -------------------------------------->
        <section class="section-container">
            <H2>BOTONES</H2>
            <button type="button" class="btn btn-primary btn-sm">Primary sm peque;o</button>
            <button type="button" class="btn btn-secondary btn-lg">Secondary lg largo</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning" disabled>Warning boton deshabilitado</button>
            <button type="button" class="btn btn-outline-info">Info con outline</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button>
            <br><br><br><br>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                </label>
            </div>
            <br><br><br><br>
        </section>
        <!----------------------------------- FIN ELEMENTOS DE USO COMUN EN BOOTSTRAP ----------------------------------->

        <?php include('footer.php'); ?>

        <script src="inc/js/menuSticky.js" type="text/javascript"></script>

    </body>

</html>