<?php
    echo '<!-- Modo Noturno -->
    
    <script> 

    function start() {
        if (localStorage.getItem("n") == "desligado" || localStorage.getItem("n") == null) {
            document.getElementById("luz").src = "/public/images/sol.png";
            document.getElementById("logo").src = "/public/images/logo.jpg";
            document.body.style.backgroundColor = "#C5E6FF";
            document.getElementById("mynav").style.backgroundColor = "rgb(30, 92, 138)";
            
             
        } else {
            document.getElementById("luz").src = "/public/images/lua.png";
            document.getElementById("logo").src = "/public/images/logonoturno.jpg";
            document.body.style.backgroundColor = "#142A34";
            document.getElementById("mynav").style.backgroundColor = "rgb(14, 29, 36)";

        }
    }

    function noturno() {
        if (localStorage.getItem("n") == "desligado" || localStorage.getItem("n") == null) {
           localStorage.setItem("n", "ligado");
           document.getElementById("luz").src = "/public/images/lua.png";
           document.getElementById("logo").src = "/public/images/logonoturno.jpg";
           document.body.style.backgroundColor = "#142A34";
           document.getElementById("mynav").style.backgroundColor = "rgb(14, 29, 36)";

        } else {
            localStorage.setItem("n", "desligado");
            document.getElementById("luz").src = "/public/images/sol.png";
            document.getElementById("logo").src = "/public/images/logo.jpg";
            document.body.style.backgroundColor = "#C5E6FF";
            document.getElementById("mynav").style.backgroundColor = "rgb(30, 92, 138)";

        }

    }

    </script>';