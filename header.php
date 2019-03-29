<div id="navigation-menu" class="navigation-menu-show"> 
    <a class="brand" href="#">
        <img src="img/logoNav.png" height="50px">
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
    <ul class="navResposive">
        <li class="nav-item">
            
                <img src="img/logoNav.png" height="50px">
            
        </li>

        <li class="nav-item">
            <i class="fas fa-home"></i>
            <a class="itemMenuR" href="#inicio"> <?= $vocab["menu_inicio"] ?>   
            </a> 
        </li>
        
        <li class="nav-item"> 
            <i class="fas fa-building"></i>
            <a class="itemMenuR" href="#acerca">  <?= $vocab["menu_acerca_de"] ?>   
            </a>  
        </li>
        
        <li class="nav-item"> 
            <i class="fas fa-globe"></i>
            <a class="itemMenuR" href="#servicios"> <?= $vocab["menu_servicios"] ?> &nbsp;  
            </a>   
        </li>
        
        <li class="nav-item"> 
            <i class="fas fa-user-friends"></i>
            <a class="itemMenuR" href="#alianzas"> <?= $vocab["menu_alianzas"] ?>  
            </a>
        </li>
        
        <li class="nav-item">
            <i class="fas fa-truck"></i>
            <a class="itemMenuR" href="#aduanas"> <?= $vocab["menu_aduanas"] ?>  
            </a>
        </li>
        
        <li class="nav-item"> 
            <i class="fas fa-phone"></i>
            <a class="itemMenuR" href="#contactenos"> <?= $vocab["menu_contactenos"] ?>  
            </a>
        </li>
    </ul>

</div>
