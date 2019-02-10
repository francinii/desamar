            window.onscroll = function () {
                fijarMenu();
            };

// Get the header
            var header = document.getElementById("navigation-menu");

// Get the offset position of the navbar
            var sticky = header.offsetTop;

            function fijarMenu() {
                if (window.pageYOffset > sticky) {                
                 
                  header.classList.remove("navigation-menu-show");
                    header.classList.add("sticky");
                    
                } else {
                    
                    header.classList.remove("sticky");
                    header.classList.add("navigation-menu-show");
                }
            }

