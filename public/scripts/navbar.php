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

          <!-- DROPDOWN -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle texto-branco" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Matérias</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="matematica">
              <input class="dropdown-item" name="formMateria" type="submit" value="Matemática">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="fisica">
              <input class="dropdown-item" name="formMateria" type="submit" value="Física">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="quimica">
              <input class="dropdown-item" name="formMateria" type="submit" value="Química">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="biologia">
              <input class="dropdown-item" name="formMateria" type="submit" value="Biologia">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="geografia">
              <input class="dropdown-item" name="formMateria" type="submit" value="Geografia">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="literatura">
              <input class="dropdown-item" name="formMateria" type="submit" value="Literatura">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="historia">
              <input class="dropdown-item" name="formMateria" type="submit" value="História">
            </form>
            <form method="post" action="/materias">
              <input type="hidden" name="materia" value="portugues">
              <input class="dropdown-item" name="formMateria" type="submit" value="Português">
            </form>
            </div>
          </li>
        </ul>


          
        <ul>
          <li style="padding-right: 25px; padding-top: 15px; list-style-type: none;">
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