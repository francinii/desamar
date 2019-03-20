
<div id="navigation-menu" class="navigation-menu-show"> 
    <a class="brand" href="#">
        <img src="../desamar/img/logoNav.png" height="50px">
    </a>
    
    <a class="brand imgmenu">
            <img src="img/menu.png" onclick="aparecerMenu()">
    </a>
            
    <ul class="nav justify-content-end">
        
        <!-- <img id="imgNavBar" src="../desamar/img/logo.png" height="50px">-->
        <li class="nav-item"> <a href="#inicio"> <?= $vocab["menu_inicio"] ?>   </a> </li>    
        <li class="nav-item"> <a> | </a> </li>   
        <li class="nav-item"> <a href="#acerca">  <?= $vocab["menu_acerca_de"] ?>   </a>  </li>
        <li class="nav-item"> <a> | </a> </li>  
        <li class="nav-item"> <a href="#servicios"> <?= $vocab["menu_servicios"] ?> &nbsp;  </a>   </li>
        <li class="nav-item"> <a> | </a> </li>  
        <li class="nav-item"> <a href="#alianzas"> <?= $vocab["menu_alianzas"] ?>  </a></li>
        <li class="nav-item"> <a> | </a> </li>  
        <li class="nav-item"> <a href="#aduanas"> <?= $vocab["menu_aduanas"] ?>  </a></li>
        <li class="nav-item"> <a> | </a> </li>  
        <li class="nav-item"> <a href="#contactenos"> <?= $vocab["menu_contactenos"] ?>  </a></li>
    </ul>
</div>

<div id="menuResponsive">
    <ul>
        <li><a href=”#”>Inicio</a></li>
        <li><a href=”#”>Sobre nosotros</a></li>
        <li><a href=”#”>Servicios</a></li>
        <li><a href=”#”>Productos</a></li>
        <li><a href=”#”>Contacto</a></li>
    </ul>

</div>