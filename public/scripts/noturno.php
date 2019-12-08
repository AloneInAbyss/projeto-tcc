<?php
    echo '<!-- Modo Noturno -->
    
    <script> 

    function start() {
        if (localStorage.getItem("n") == "desligado" || localStorage.getItem("n") == null) {
            document.getElementById("luz").src = "/public/images/sol.png";
            document.getElementById("logo").src = "/public/images/logo.jpg";
            document.getElementById("matematica").src = "/public/images/matematica.png";
            document.getElementById("fisica").src = "/public/images/fisica.png";
            document.getElementById("literatura").src = "/public/images/literatura.png";
            document.getElementById("biologia").src = "/public/images/biologia.png";
            document.getElementById("portugues").src = "/public/images/portugues.png";
            document.getElementById("quimica").src = "/public/images/quimica.png";
            document.getElementById("historia").src = "/public/images/historia.png";
            document.getElementById("geografia").src = "/public/images/geografia.png";
            document.body.style.backgroundColor = "#C5E6FF";
            document.getElementById("mynav").style.backgroundColor = "rgb(30, 92, 138)";
             
        } else {
            document.getElementById("luz").src = "/public/images/lua.png";
            document.getElementById("logo").src = "/public/images/logonoturno.jpg";
            document.getElementById("matematica").src = "/public/images/matematicanoturna.png";
            document.getElementById("fisica").src = "/public/images/fisicanoturna.png";
            document.getElementById("literatura").src = "/public/images/literaturanoturna.png";
            document.getElementById("biologia").src = "/public/images/biologianoturna.png";
            document.getElementById("portugues").src = "/public/images/portuguesnoturna.png";
            document.getElementById("quimica").src = "/public/images/quimicanoturna.png";
            document.getElementById("historia").src = "/public/images/historianoturna.png";
            document.getElementById("geografia").src = "/public/images/geografianoturna.png";
            document.body.style.backgroundColor = "#142A34";
            document.getElementById("mynav").style.backgroundColor = "rgb(14, 29, 36)";
        }
    }

    function noturno() {
        if (localStorage.getItem("n") == "desligado" || localStorage.getItem("n") == null) {
           localStorage.setItem("n", "ligado");
           document.getElementById("luz").src = "/public/images/lua.png";
           document.getElementById("logo").src = "/public/images/logonoturno.jpg";
           document.getElementById("matematica").src = "/public/images/matematicanoturna.png";
           document.getElementById("fisica").src = "/public/images/fisicanoturna.png";
           document.getElementById("literatura").src = "/public/images/literaturanoturna.png";
           document.getElementById("biologia").src = "/public/images/biologianoturna.png";
           document.getElementById("portugues").src = "/public/images/portuguesnoturna.png";
           document.getElementById("quimica").src = "/public/images/quimicanoturna.png";
           document.getElementById("historia").src = "/public/images/historianoturna.png";
           document.getElementById("geografia").src = "/public/images/geografianoturna.png";
           document.body.style.backgroundColor = "#142A34";
           document.getElementById("mynav").style.backgroundColor = "rgb(14, 29, 36)";

        } else {
            localStorage.setItem("n", "desligado");
            document.getElementById("luz").src = "/public/images/sol.png";
            document.getElementById("logo").src = "/public/images/logo.jpg";
            document.getElementById("matematica").src = "/public/images/matematica.png";
            document.getElementById("fisica").src = "/public/images/fisica.png";
            document.getElementById("literatura").src = "/public/images/literatura.png";
            document.getElementById("biologia").src = "/public/images/biologia.png";
            document.getElementById("portugues").src = "/public/images/portugues.png";
            document.getElementById("quimica").src = "/public/images/quimica.png";
            document.getElementById("historia").src = "/public/images/historia.png";
            document.getElementById("geografia").src = "/public/images/geografia.png";
            document.body.style.backgroundColor = "#C5E6FF";
            document.getElementById("mynav").style.backgroundColor = "rgb(30, 92, 138)";
        }

    }

    </script>';