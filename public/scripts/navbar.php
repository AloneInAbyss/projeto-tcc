<?php
echo '
<!-- NAVBAR -->
    <nav id="mynav" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <!-- BOTÃO/ÍCONE DA NAVBAR -->
      <a class="navbar-brand" href="/"><img id="logo" alt="Logotipo" src="/public/images/logo.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS DA NAVBAR -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">

          <!-- LINK "PÁGINA INICIAL" -->
          <li class="nav-item">
            <a class="nav-link texto-branco" href="/">Página Inicial</a>
          </li>

          <!-- LINK "SOBRE NÓS" -->
          <li class="nav-item">
            <a class="nav-link texto-branco" href="/sobre-nos">Sobre Nós</a>
          </li>

          <!-- DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle texto-branco" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Matérias</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/materia-matematica">Matemática</a>
              <a class="dropdown-item" href="/materia-fisica">Física</a>
              <a class="dropdown-item" href="/materia-quimica">Química</a>
              <a class="dropdown-item" href="/materia-biologia">Biologia</a>
              <a class="dropdown-item" href="/materia-geografia">Geografia</a>
              <a class="dropdown-item" href="/materia-literatura">Literatura</a>
              <a class="dropdown-item" href="/materia-historia">História</a>
              <a class="dropdown-item" href="/materia-portugues">Português</a>
            </div>
          </li> 

          
          <li>
            <img src="/public/images/sol.png" id="luz" alt="Modo noturno" onclick="noturno()">
          </li>
        </ul>

        <!-- FORMULÁRIO "PESQUISA" -->
        <form class="form-inline my-2 my-lg-0" method="post" action="/resultado">
          <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Pesquisar" aria-label="Pesquisa"/>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="ir">Pesquisar</button>
        </form>

      </div>
      <!-- /LINKS DA NAVBAR -->
    </nav>
    <!-- /NAVBAR -->
';